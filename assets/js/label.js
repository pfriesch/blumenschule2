require('../css/styleBS.scss');
const $ = require('jquery');
require('bootstrap');
const autocomplete = require("jquery-ui/ui/widgets/autocomplete");


$(document).ready(function () {
    var A6Index = 0;
    $('.printA6').hide();
    $('.printLabel').show();

    $('.loading').hide();
    $('#search_spinner').hide();


    $("#search").focus().autocomplete({
        disabled: true,
        // delay: 0,
        source: function (request, response) {
            $.ajax({
                url: "/product/sjson/" + request.term,
                dataType: "json",

                success: function (data) {
                    $('#search_printLabelspinner').hide();
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
        //     $(this).autocomplete( "disable" );
        // $('.ui-autocomplete').removeClass('ui-state-disabled');
        // $('.ui-autocomplete').css('cursor','pointer');
        select: selected
        // open: function (event, ui) {
        //     $(this).autocomplete("widget").css({
        //         "width": 900
        //     })
        // }
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        return $("<li>")

            .append(
                "<div class='row'>" +
                "<div class='auto_article_id col-1'> " + (item.article_id == null ? '-' : item.article_id) + "</div>" +
                "<div class='auto_name col-4'> " + item.name + "</div>" +
                "<div class='auto_name_botanic col-4'>" + item.name_botanic + "</div>" +
                "<div class='auto_code col-1'>" + item.code + "</div>" +
                "</div>")
            .appendTo(ul);
    };


    // $('form.LabelForm').submit(function (event) {
    //     event.preventDefault();
    //

    // });


    $('#search_btn').click(function (event) {
        event.preventDefault();
        $('#search').autocomplete("enable").autocomplete("search");
        $('#search_spinner').show();
    });

    $('#create_label').click(function (event) {
        event.preventDefault();
        $data = {
            article_id: $('#articleid ').val(),
            variant_id: $('#variantid ').val(),
            quantity: $('#amount').val()
        };
        createPdf($data);

    });

    $('#labelA6').click(function (event) {
        event.preventDefault();
        switchLabelMode()
    });


    $('#addDinA6').click(function (event) {
        event.preventDefault();
        var item = $('<div class="a6-print-item" data-a6item="' + A6Index + '"></div>')
        var name = $('#name').val();
        var name_botanic = $('#name_botanic').val();
        var description = $('#description').val();
        var picurl = $('img.article_pic').attr('src');
        item.append($('<img class="a6-print-item-pic img-thumbnail" src="' + picurl + '" />'));
        item.append($('<p><strong>Etikett ' + A6Index + '</strong></p>'));
        item.append($('<p><strong>' + name + '</strong></p><p>' + name_botanic + '</p>'));
        item.append($('<p>' + description + '</p>'));


        $('form input,textarea').each(function () {
            //console.log($(this).val());
            var id = $(this).attr('id');

            var obj = $('<input type=text type="hidden" ' +
                'name="A6Label[' + A6Index + '][' + id + ']"' +
                'id="A6_' + A6Index + '_' + id + '"' +

                '/>').val($(this).val()).hide();
            //$('#labelsToPrint').append(obj);
            item.append(obj);


        });
        item.append($('<input type=text type="hidden" ' +
            'name="A6Label[' + A6Index + '][picurl]"' +
            'id="A6_' + A6Index + '_picurl"' +
            '/>').val(picurl).hide()
        );


        var remove = $('<button class="btn btn-danger" data-a6item="' + A6Index + '">Entfernen</button>').click(function (event) {
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
    $('#search').keyup(function (e) {
        if (e.keyCode === $.ui.keyCode.ENTER) {
            e.preventDefault();
            $(this).autocomplete("enable").autocomplete("search");
            $('#search_spinner').toggle();

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

var createPdf = function (data) {

    $('.row').fadeTo('fast', 0.4);
    $('.loading').show();
    // if (data.article_id) {
    $.getJSON('/product/getitem', {
        article_id: data.article_id,
        variant_id: data.variant_id,
        quantity: $('#amount').val()
    }).done(function (data) {
        $('#name ').val(data.name);
        $('#name_botanic ').val(data.name_botanic);
        $('#description ').val(data.label_text);
        $('#descriptionShort ').val(data.description_short);
        $('#articlecode ').val(data.code);
        $('#articleid ').val(data.article_id);
        $('#variantid ').val(data.variant_id);
        $('#picurl').val(data.picurl);
        $('#edit_article_btn').attr("href", "https://plentymarkets-cloud-de.com/11541?uiAction=item_detail&itemId=" + data.article_id);


        $('.article_pic').attr('src', data.picurl);
        $('.loading').hide();
        $('.row').fadeTo('fast', 1);


        $Pdfout = $('.PdfOut');
        //reload pdf field
        $Pdfout.attr('data', $Pdfout.attr('data'));

        countChars();

        //TODO figure out why the visibility of the description fields changes

        // enforce the description visibility
        if ($('#labelA6').html() !== 'Etiketten') {
            $('.printA6').hide();
            $('.printLabel').show();

        } else {
            $('.printA6').show();
            $('.printLabel').hide();

        }


    });
};

var selected = function (event, ui) {

    var data = ui.item.data;

    $("#search").autocomplete("disable");
    $('.ui-autocomplete').removeClass('ui-state-disabled');
    $('.ui-autocomplete').css('cursor', 'pointer');
    $('#search_spinner').hide();

    if (data.article_id == null) {
        var r = confirm('Der Ausgewählte Pflanze hat keine Artikel ID!\n\n "OK" um ohne ID weiterzumachen\n "Abbrechen" um neu zu suchen ');
        if (r === false) {
            $("#search").focus();
            searchString = String(data.article_no);
            window.setTimeout(searchParam(), 1000);
            return false;
        }
    }
    createPdf(data);

    return false;
};

var switchLabelMode = function () {
    if ($('#labelA6').html() !== 'Etiketten') {
        $('#labelA6').html('Etiketten');
        $('.printA6').show();
        $('.printLabel').hide();

    } else {
        $('#labelA6').html('DinA6');
        $('.printA6').hide();
        $('.printLabel').show();

    }
};