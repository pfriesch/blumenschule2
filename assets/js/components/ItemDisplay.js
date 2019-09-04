import Form from "react-bootstrap/Form";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";
import React from "react";

function TextField(props) {
    const isDinA6Printing = props.isDinA6Printing;

    let formLabelText;
    let remainingChars;
    let fieldValue;
    let barcodeCheckbox;
    if (isDinA6Printing) {
        formLabelText = "Beschreibung";
        fieldValue = props.description;
        remainingChars = countCharsDinA6(fieldValue);
    } else {
        formLabelText = "Etikettentext";
        fieldValue = props.labelText;

        remainingChars = countCharsLabel(fieldValue, props.withBarcode);
        barcodeCheckbox = (
            <Form.Check type="checkbox" checked={props.withBarcode} label={<Form.Label><b>Barcode </b></Form.Label>}
                        onChange={() => props.toggleBarcode()}/>)
    }
    let isValidChars = remainingChars > 0;
    return (<div>
        <Form.Group as={Row} controlId="formHorizontalDescription">
            <Form.Label column sm={2}>
                <b>{formLabelText}</b>
            </Form.Label>
            <Col sm={10}>
                <Form.Control className="label-text" type="text" placeholder="" as="textarea" value={fieldValue}
                              readOnly/>
                <Row>
                    <Col>
                        <Form.Label>noch verfügbare zeichen auf dem Etikett</Form.Label>
                        <Form.Control className="remaining-chars" type="text" value={remainingChars}
                                      isValid={isValidChars}
                                      isInvalid={!isValidChars} readOnly/>
                    </Col>
                    <Col  sm={2}>{barcodeCheckbox}</Col>
                </Row>
            </Col>
        </Form.Group>
    </div>);
}

function ItemDisplayElement(props) {
    const controlId = "formHorizontal" + props.name;

    return (
        <Form.Group as={Row} controlId={controlId} className="item-display">
            <Form.Label column sm={2}>
                <b>{props.name}</b>
            </Form.Label>
            <Col sm={10}>
                <Form.Control type="text" placeholder="" value={props.text} readOnly/>
            </Col>
        </Form.Group>
    );
}

function ItemDisplay(props) {

    const isDinA6Printing = props.isDinA6Printing;
    const {name, name_botanic, code, articleId, variantId, description, labelText, imgURL, stock: {storageLocationId, quantity}} = props.item;
    const withBarcode = props.withBarcode;

    return (
        <Form>
            <ItemDisplayElement name="Name" text={name}/>
            <ItemDisplayElement name="Botanisch" text={name_botanic}/>
            <ItemDisplayElement name="Code" text={code}/>
            <ItemDisplayElement name="ArtikelID" text={articleId}/>
            <ItemDisplayElement name="VariationId" text={variantId}/>
            <TextField className="labeltext-field" isDinA6Printing={isDinA6Printing} description={description}
                       labelText={labelText} withBarcode={withBarcode} toggleBarcode={props.toggleBarcode}/>
        </Form>
    );
}

var countCharsDinA6 = function (text) {
    const max_chars = 730;
    return max_chars - text.length;
};

var countCharsLabel = function (text, withBarcode) {
    const fields = text.split(" ");
    let line = '';
    let lines = 0;
    let max;
    if (withBarcode) {
        max = 56;
    } else {
        max = 80;
    }
    let length = 0;
    for (let i = 0; i < fields.length; i++) {
        length = (line + ' ' + fields[i]).length;
        if (length <= max) {
            line += ' ' + fields[i];
        } else {
            lines++;
            line = fields[i];
        }

    }
    return (max * 5) - ((lines * max) + length);
};

export default ItemDisplay;