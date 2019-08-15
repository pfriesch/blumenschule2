require('../css/styleBS.scss');
const $ = require('jquery');
require('bootstrap');
const autocomplete = require("jquery-ui/ui/widgets/autocomplete");
const effect = require("jquery-ui/ui/effects/effect-transfer");


var getCurrentStorageLocationId = function () {
    return $("input.storageLocationActive").attr("name").split("_")[1];
};

var getCurrentStockQuantity = function () {
    return $("input.storageLocationActive").val();
};


var setCurrentStorageLocation = function (storageLocationId, quantity) {

    $("[name^='btnStorageLocation']").removeClass("storageLocationActive");
    $("[id^='labelBtnStorageLocation']").removeClass("storageLocationActive");

    $("#btnStorageLocation_" + storageLocationId).addClass("storageLocationActive");
    $("#labelBtnStorageLocation_" + storageLocationId).addClass("storageLocationActive");

    $("#btnStorageLocation_" + storageLocationId).val(quantity);

};

var storageUpdateFlashRed = function () {

    $(".storageLocationActive").switchClass("storageLocationActive", "stockDisplayFlashRed", 100);
    $(".storageLocationActive").switchClass("stockDisplayFlashRed", "storageLocationActive", 500);

};


var storageUpdateFlashGreen = function () {


    $(".storageLocationActive").switchClass("storageLocationActive", "stockDisplayFlashGreen", 100);
    $(".storageLocationActive").switchClass("stockDisplayFlashGreen", "storageLocationActive", 500);
};

$(document).ready(function () {

    // $("#test_btn").click(function (event) {
    //     storageUpdateFlashGreen();
    //     storageUpdateFlashRed();
    // });


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
                url: "/item/search/" + request.term,
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


    $("[name^='btnStorageLocation']").on("click", function () {
        //Change the storage location of an item
        $old_storage_location = getCurrentStorageLocationId();
        $new_storage_location = this.id.split("_")[1];
        // alert($old_storage_location + " " + $new_storage_location);

        if ($old_storage_location != $new_storage_location) {
            $data = {
                article_id: $('#articleid ').val(),
                variant_id: $('#variantid ').val(),
                new_quantity: getCurrentStockQuantity(),
                old_storage_location: $old_storage_location,
                new_storage_location: $new_storage_location
            };

            $.getJSON({
                url: "/item/changeStorageLocation",
                // dataType: "json",
                data: $data,
                success: function (data) {
                    alert(data);
                }
            });
        }
    });


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
    $('#create_label_with_stock').click(function (event) {
        event.preventDefault();
        $data = {
            article_id: $('#articleid ').val(),
            variant_id: $('#variantid ').val(),
            quantity: $('#amount').val()
        };
        createPdf($data);
        addStock();

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

    $('#add_stock').click(function (event) {
        event.preventDefault();
        addStock();

    });

    $('#remove_stock').click(function (event) {
        event.preventDefault();
        $data = {
            article_id: $('#articleid ').val(),
            variant_id: $('#variantid ').val(),
            new_quantity: getCurrentStockQuantity() - $('#amount').val()
        };
        alert($data.new_quantity);
        $.getJSON({
            url: "/item/removestock",
            // dataType: "json",
            data: $data,
            success: function (data) {
                alert(data);
                if ($('#articleid ').val() != data.article_id || $('#variantid ').val() != data.variation_id) {
                    alert("data mismatch" + data.article_id + " " + $('#articleid ').val() + " " + data.variation_id + " " + $('#variantid ').val())
                }
                setCurrentStorageLocation(data.stock.storageLocationId, data.stock.quantity);
                storageUpdateFlashRed();

            }
        });
    });

    $('#descriptionShort').keypress(countCharsLabel);
    countCharsLabel();
    countCharsDinA6();
});

var addStock = function () {
    $data = {
        article_id: $('#articleid ').val(),
        variant_id: $('#variantid ').val(),
        quantity: $('#amount').val()
    };
    $.post({
        url: "/item/addstock",
        dataType: "json",
        data: $data,
        success: function (data) {
            if ($('#articleid ').val() != data.article_id || $('#variantid ').val() != data.variation_id) {
                alert("data mismatch" + data + " " + $('#articleid ').val() + " " + $('#variantid ').val())
            }
            setCurrentStorageLocation(data.stock.storageLocationId, data.stock.quantity);
            storageUpdateFlashGreen();
        }
    });
};
var countCharsDinA6 = function () {
    var text = $('#description ').val();
    const max_chars = 730;

    const remaining = max_chars - text.length;
    console.log(remaining);
    $('#availableDinA6').val(remaining);
    if (remaining < 0) $('#availableDinA6').css("color", "red");
    else $('#availableDinA6').css("color", "green");
};

var countCharsLabel = function () {

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


    // history.pushState({},"/item/" + $('#articleid ').value + "/variant/" + $('#variantid ').value + "/quantity/" + $('#amount').value);

    //
    // article_id: $('#articleid ').val(),
    //     variant_id: $('#variantid ').val(),
    //     quantity: $('#amount').val()

    $.getJSON("/item/" + data.article_id + "/variant/" + data.variant_id + "/quantity/" + $('#amount').val(), {}).done(function (data) {
        history.pushState({}, document.title, "/item/" + data.article_id + "/variant/" + data.variant_id + "/quantity/" + $('#amount').val());
        $('#name ').val(data.name);
        $('#name_botanic ').val(data.name_botanic);
        $('#description ').val(data.description_short);
        $('#descriptionShort ').val(data.label_text);
        $('#articlecode ').val(data.code);
        $('#articleid ').val(data.article_id);
        $('#variantid ').val(data.variant_id);
        $('#arcreatePdfticleStock ').val(data.stock);
        $('#picurl').val(data.picurl);
        $('#edit_article_btn').attr("href", "https://plentymarkets-cloud-de.com/11541?uiAction=item_detail&itemId=" + data.article_id);


        setCurrentStorageLocation(data.stock.storageLocationId, data.stock.quantity);

        $('.article_pic').attr('src', data.picurl);
        $('.loading').hide();
        $('.row').fadeTo('fast', 1);


        $Pdfout = $('.PdfOut');
        //reload pdf field
        $Pdfout.attr('data', $Pdfout.attr('data'));

        countCharsLabel();
        countCharsDinA6();

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