$(document).ready(function () {
    var A6Index = 0;
    $('.printA6').hide();
    $('.loading').hide();


    $('a.reset').click(function (event) {
        event.preventDefault();
        $('input').val('');
        $('textarea').val('');

    });

    $("#search").focus().autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "/data/product/sjson/" + request.term,
                dataType: "json",

                success: function (data) {
                    response($.map(data, function (item) {

                        return {
                            label: item.name + ' ' + item.name_botanic + ' ' + item.code,
                            name: item.name,
                            name_botanic: item.name_botanic,
                            code: item.code,
                            article_id: item.article_id,
                            variant_id: item.variant_id,
                            value: item.name,
                            data: item
                        }
                    }));
                }
            });
        },
        minLength: 2,

        select: selected,
        open: function (event, ui) {
            $(this).autocomplete("widget").css({
                "width": 900
            })
        }
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        //console.log(item);
        return $("<li>")
            .append("<a><div class='auto_article_id'> " + (item.article_id == null ? '-' : item.article_id) + "</div><div class='auto_name'> " + item.name + "</div><div class='auto_name_botanic'>" + item.name_botanic + "</div><div class='auto_code'>" + item.code + "</div></a>")
            .appendTo(ul);
    };


    $('form.LableForm').submit(function (event) {
        event.preventDefault();

        //$('.PdfOut').attr('data','/images/pdfloading.pdf ');
        $('.PdfOut').remove();
        var data = $(this).serializeArray();
        $.post($(this).attr('action'), data)
            .done(function (data) {


                $('.LableOutput').append('<object class="PdfOut" data="' + data['pdfurl'] + '" type="application/pdf" width="100%" height="200px"></object>');
            });

    });

    $('#lableA6').click(function (event) {
        event.preventDefault();
        if ($('#lableA6').html() != 'Etiketten') $('#lableA6').html('Etiketten');
        else $('#lableA6').html('DIN A6');
        $('.printA6').toggle();
        $('.printLable').toggle();
    });


    $('#addDinA6').click(function (event) {
        event.preventDefault();
        var item = $('<div class="a6-print-item" data-a6item="' + A6Index + '"></div>')
        var name = $('form.LableForm input[id="name"]').val();
        var name_botanic = $('form.LableForm input[id="name_botanic"]').val();
        var description = $('form.LableForm textarea[id="description"]').val();
        var picurl = $('img.article_pic').attr('src');
        item.append($('<img class="a6-print-item-pic img-thumbnail" src="' + picurl + '" />'));
        item.append($('<p><strong>Etikett ' + A6Index + '</strong></p>'));
        item.append($('<p><strong>' + name + '</strong></p><p>' + name_botanic + '</p>'));
        item.append($('<p>' + description + '</p>'));


        $('form.LableForm input,textarea').each(function () {
            //console.log($(this).val());
            var id = $(this).attr('id');

            var obj = $('<input type=text type="hidden" ' +
                'name="A6Lable[' + A6Index + '][' + id + ']"' +
                'id="A6_' + A6Index + '_' + id + '"' +

                '/>').val($(this).val()).hide();
            //$('#labelsToPrint').append(obj);
            item.append(obj);


        });
        item.append($('<input type=text type="hidden" ' +
            'name="A6Lable[' + A6Index + '][picurl]"' +
            'id="A6_' + A6Index + '_picurl"' +
            '/>').val(picurl).hide()
        );


        var remove = $('<button class="btn btn-default btn-lg" data-a6item="' + A6Index + '">Remove</button>').click(function (event) {
            event.preventDefault();
            var itemid = $(this).data('a6item');
            $('#labelsToPrint div[data-a6item="' + itemid + '"]').remove();

        });
        //$('#labelsToPrint').append(remove);
        item.append(remove);
        $('#labelsToPrint').append(item);
        A6Index++;


        //form-dinA6

    });
    $('.LableForm').keypress(function (event) {
        if (event.keyCode == 13) {
            // Bei ENTER
            event.preventDefault();
        }
    });

    $('#descriptionShort').keypress(countChars);
    countChars();
});


var countChars = function () {

    var text = $('#descriptionShort ').val();

    var felder = text.split(" ");
    var line = '';
    var lines = 0;
    var max = 58;
    var length = 0;
    for (var i = 0; i < felder.length; i++) {
        length = (line + ' ' + felder[i]).length;
        if (length <= max) {
            line += ' ' + felder[i];
        } else {
            lines++;
            line = felder[i];
        }

    }
    var result = (max * 5) - ((lines * max) + length);
    console.log('lines ' + lines + ' length ' + length);
    $('#available').val(result);
    if (result < 0) $('#available').css("color", "red");
    else $('#available').css("color", "green");

};
var searchString = "";
var searchParam = function () {

    $("#search").autocomplete("search", searchString);
};

var selected = function (event, ui) {

    // Aktueller Datenstamm auf Plenty holen


    var data = ui.item.data;


    if (data.article_id == null) {
        var r = confirm('Der Ausgewählte Pflanze hat keine Artikel ID!\n\n "OK" um ohne ID weiterzumachen\n "Abbrechen" um neu zu suchen ');
        if (r === false) {
            $("#search").focus();
            searchString = String(data.article_no);
            window.setTimeout(searchParam(), 1000);
            return false;
        }
    }
    $('.row').fadeTo('fast', 0.4)
    $('.loading').show();


    // if (data.article_id) {
    $.getJSON('/data/product/item/' + data.article_id + '/variation/' + data.variant_id).done(function (data) {
        $('#name ').val(data.name);
        $('#name_botanic ').val(data.name_botanic);
        $('#description ').val(data.label_text);
        $('#descriptionShort ').val(data.description_short);
        $('#articlecode ').val(data.article_no);
        $('#articleid ').val(data.article_id);
        $('#variantid ').val(data.variant_id);
        $('#picurl').val(data.picurl);
        $('.article_pic').attr('src', data.picurl);
        $('.loading').hide();
        $('.row').fadeTo('fast', 1)
    });
    // } else {
    //     $('#name ').val(data.name);
    //     $('#name_botanic ').val(data.name_botanic);
    //     $('#description ').val(data.label_text);
    //     $('#descriptionShort ').val(data.description_short);
    //     $('#articlecode ').val(data.article_no);
    //     $('#articleid ').val(data.article_id);
    //     $('#variantid ').val(data.variant_id);
    //     $('#picurl').val(data.picurl);
    //     $('.article_pic').attr('src', data.picurl);
    //     $('.loading').hide();
    //     $('.row').fadeTo('fast', 1)
    // }


    countChars();
    return false;
};
