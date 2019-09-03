#!/usr/bin/env python3
import argparse
import json
import os
import shutil

import humps


def get_paginate_refs(namespace, fields):
    imports = []
    for field in fields:
        if not (len(fields[field]) == 1 and 'items' in fields[field]) \
                and fields[field]["type"] == 'array':
            if '$ref' in fields[field]["items"]:
                assert field == 'entries'
                ref_type = fields[field]["items"]['$ref'].replace('#/definitions/', '').replace('Models\\', '')
                imports.append(ref_type)
    return imports


def get_classes_with_paginated():
    # pass  # use pageinated response instead

    responses_schemas = {}
    paginated_classes = []

    rest_endpoints = plenty_api['paths']
    for rest_endpoint, value in rest_endpoints.items():
        path = rest_endpoint.split("/")[1:]
        if path[0] not in responses_schemas:
            responses_schemas[path[0]] = {}
        curr = responses_schemas[path[0]]

        for idx, p in enumerate(path[1:]):
            if p == 'accounts':
                print("")
            if idx < len(path) - 2:
                if p not in curr:
                    curr[p] = {}
                curr = curr[p]
            else:
                assert p not in curr
                for http_type in ['get', 'post']:
                    if http_type in value and 'schema' in value[http_type]['responses']['200']:
                        val = value[http_type]['responses']['200']['schema']

                        if 'type' in val and val['type'] == 'object':
                            curr[p + '.php'] = {}
                            curr[p + '.php']["END"] = {'rest_endpoint': rest_endpoint,
                                                       'value': val}
                            if 'properties' not in val:
                                fields = []
                            else:
                                fields = val['properties']

                            namespace = "/".join([humps.pascalize(part) for part in rest_endpoint.split('/')[1:]])
                            paginated_class = get_paginate_refs(
                                namespace=namespace,
                                fields=fields)
                            paginated_classes.extend(paginated_class)
    return paginated_classes


def gen_php_class(parent_namespace, namespace, name, fields):
    namespace = "\\".join((parent_namespace + "\\" + namespace).split('\\')[:-1])
    imports = []
    for field in fields:
        if not (len(fields[field]) == 1 and 'items' in fields[field]) \
                and fields[field]["type"] == 'array':
            if '$ref' in fields[field]["items"]:
                ref_type = fields[field]["items"]['$ref'].replace('#/definitions/', '')
                imports.append(ref_type)

    lines = ['<?php',
             '',
             '',
             f'namespace {namespace};',
             '']

    for _import in imports:
        _import = (parent_namespace + "\\" + _import).replace('Models\\', '')
        lines.append(f'use {_import};')
    if len(imports) > 0:
        lines.append(f'')

    lines.append(f'class {name}')
    lines.append('{')

    for field in fields:

        lines.append('    /**')
        if 'description' in fields[field]:
            if '<li>' in fields[field]["description"]:
                fields[field]["description"] = fields[field]["description"] \
                    .replace('<ul>', '') \
                    .replace('</ul>', '') \
                    .replace('<li>', '') \
                    .replace('</li>', '') \
                    .replace('\n', '\n     * ')
            lines.append(f'     *  {fields[field]["description"]}')
        if len(fields[field]) == 1 and 'items' in fields[field]:
            lines.append(f'     * @var []')
        elif fields[field]["type"] in ['integer', 'string', 'boolean', 'number']:
            _type = fields[field]["type"]
            if _type == 'number':
                _type = 'float'

            lines.append(f'     * @var {_type}')
        elif fields[field]["type"] == 'array':
            assert 'items' in fields[field]
            if '$ref' in fields[field]["items"]:

                ref_type = fields[field]["items"]['$ref'].replace('#/definitions/', '')
                assert ref_type in imports
                ref_type = ref_type.split('\\')[-1].replace('Models\\', '')
                lines.append(f'     * @var {ref_type}[]')
            else:
                # assert len(fields[field]["items"]) == 0
                # TODO handle
                lines.append(f'     * @var array')
        elif fields[field]["type"] == 'object':
            lines.append(f'     * @var object')
        #     TODO

        else:
            raise NotImplementedError
        lines.append('     */')
        lines.append(f'    public ${field};')
        lines.append('    ')
    lines.append('}')
    return [l + '\n' for l in lines]


def gen_paginatedphp_class(parent_namespace, namespace, name):
    namespace = "\\".join((parent_namespace + "\\" + namespace).split('\\')[:-1]).replace('Models\\', '')

    lines = ['<?php',
             '',
             '',
             f'namespace {namespace};',
             '',
             f'use {parent_namespace}\\PaginatedResponse;',
             '']

    lines.append(f"class {name}Paginated extends PaginatedResponse")
    lines.append("{")
    lines.append("    /**")
    lines.append(f"     * @var {name}[]")
    lines.append(f"    */")
    lines.append(f"    public $entries;")
    lines.append("}")

    return [l + '\n' for l in lines]


def gen_models(parent_namespace, paginated_classes):
    models = plenty_api['definitions']

    models_tree = {}

    work_dir = os.getcwd()

    for model_path, value in models.items():
        model_path = model_path.replace('Models\\', '')
        path = model_path.split("\\")
        if path[0] not in models_tree:
            models_tree[path[0]] = {}
            if not os.path.exists(path[0]):
                os.mkdir(path[0])
        os.chdir(path[0])
        curr = models_tree[path[0]]

        for idx, p in enumerate(path[1:]):
            if idx < len(path) - 2:
                if p not in curr:
                    curr[p] = {}
                    if not os.path.exists(p):
                        os.mkdir(p)
                os.chdir(p)
                curr = curr[p]
            else:
                assert p not in curr
                assert value['type'] == 'object'
                curr[p] = value
                if 'properties' not in value:
                    fields = []
                else:
                    fields = value['properties']

                php_class = gen_php_class(parent_namespace=parent_namespace, namespace=model_path, name=p,
                                          fields=fields)

                with open(p + ".php", "w") as f:
                    f.writelines(php_class)
                #     json.dump(value, f, indent=1)
                if model_path in paginated_classes:
                    paginated_php_class = gen_paginatedphp_class(parent_namespace, model_path, p)
                    with open(p + "Paginated.php", "w") as f:
                        f.writelines(paginated_php_class)

        os.chdir(work_dir)


# def gen_models_rest_responses(parent_namespace):
#     # pass  # use pageinated response instead
#     work_dir = os.getcwd()
#
#     responses_schemas = {}
#
#     rest_endpoints = plenty_api['paths']
#     for rest_endpoint, value in rest_endpoints.items():
#         if 'get' in value:
#             path = rest_endpoint.split("/")[1:]
#             if path[0] not in responses_schemas:
#                 responses_schemas[path[0]] = {}
#                 if not os.path.exists(path[0]):
#                     os.mkdir(path[0])
#             curr = responses_schemas[path[0]]
#             os.chdir(path[0])
#
#             for idx, p in enumerate(path[1:]):
#                 if p == 'accounts':
#                     print("")
#                 if idx < len(path) - 2:
#                     if p not in curr:
#                         curr[p] = {}
#                         if not os.path.exists(p):
#                             os.mkdir(p)
#                     os.chdir(p)
#                     curr = curr[p]
#                 else:
#                     assert p not in curr
#                     if 'schema' in value['get']['responses']['200']:
#                         val = value['get']['responses']['200']['schema']
#
#                         if 'type' in val and val['type'] == 'object':
#                             curr[p + '.php'] = {}
#                             curr[p + '.php']["END"] = {'rest_endpoint': rest_endpoint,
#                                                        'value': val}
#                             if 'properties' not in val:
#                                 fields = []
#                             else:
#                                 fields = val['properties']
#
#                             namespace = "/".join([humps.pascalize(part) for part in rest_endpoint.split('/')[1:]])
#                             classname = humps.pascalize(p)
#                             php_class = gen_php_class(
#                                 parent_namespace=parent_namespace,
#                                 namespace=namespace,
#                                 name=classname, fields=fields)
#                             with open(p + ".php", "w") as f:
#                                 f.writelines(php_class)
#         os.chdir(work_dir)
#     os.chdir('rest')
#     # clean empty folders in the rest dir
#     for i in range(10):
#         for root, dirs, _ in os.walk('.'):
#             for d in dirs:
#                 path = os.path.join(root, d)
#                 if len(os.listdir(path)) == 0:
#                     os.rmdir(path)
#     os.chdir(work_dir)


parser = argparse.ArgumentParser(description='Renerate model definitions from plenty swagger API file')
parser.add_argument('--api_doc', type=str, default='plentymarketsApiV2.json', required=False,
                    help='path to the swagger API doc')
parser.add_argument('--parent_namespace', type=str, default='App\Service\plentymarketsAPI\Model', required=False,
                    help='namespace where the code is generated/used')

args = parser.parse_args()

with open(args.api_doc) as f:
    plenty_api = json.load(f)

paginated_classes = get_classes_with_paginated()
paginated_classes = set(paginated_classes)
gen_models(args.parent_namespace, paginated_classes)

for dir in ['bool', 'export', 'mixed', 'Illuminate', 'Response', 'string', 'Symfony']:
    if os.path.exists(dir):
        shutil.rmtree(dir)
