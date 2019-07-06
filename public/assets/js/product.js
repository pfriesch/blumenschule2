var initItemFromAction = function () {
    $('.stockProductForm #form_Stock').change(function () {
        //console.log($(this).find('option:selected'));
        var data = $(this).parent().serializeArray();
        var url = $(this).parent().attr('action');
        //console.log(url);
        $.post(url, data);
    })
};


$(document).ready(function () {
    initItemFromAction();

    $.each($('.Stock_Form'), function (index) {
        var url = $($(this)).data('url');
        var obj = $(this);


        $.get(url, function (data) {
            obj.empty();
            obj.append(data);


        });
    });

    $('#PDF').width($(document).width());
    //$('#PDF').height($('.content').height());


    $("#Lable_width").keyup(function () {
        LableSize();
    });
    $("#Lable_height").keyup(function () {
        LableSize();
    });


    $("input.search_name").keyup(function () {

        $("tbody.results").fadeTo('fast', 0.2);
        if ($(this).val().length > 2) {
            $.get('/data/product/search/name/' + $(this).val(), function (data) {
                var content = $(data).find(" tbody.results ").children();
                //console.log(content);
                $("tbody.results").empty().html(content);
                $("tbody.results").fadeTo('fast', 1);
                LableSize();
                initItemFromAction();
            });
        }


    });
    $("input.search_code").keyup(function () {

        $("tbody.results").fadeTo('fast', 0.2);
        if ($(this).val().length > 2) {
            $.get('/data/product/search/code/' + $(this).val(), function (data) {
                var content = $(data).find(" tbody.results ").children();
                //console.log(content);
                $("tbody.results").empty().html(content);
                $("tbody.results").fadeTo('fast', 1);
                LableSize();
                initItemFromAction();
            });
        }


    });

    $("input.search_latein").keyup(function () {

        $("tbody.results").fadeTo('fast', 0.2);
        if ($(this).val().length > 2) {
            $.get('/data/product/search/latein/' + $(this).val(), function (data) {
                var content = $(data).find(" tbody.results ").children();
                //console.log(content);
                $("tbody.results").empty().html(content);
                $("tbody.results").fadeTo('fast', 1);
                LableSize();
                initItemFromAction();
            });
        }


    });

    LableSize();

});

function LableSize() {
    var w = $("#Lable_width").val()
    var h = $("#Lable_height").val()
    $(".width").val(w);
    $(".height").val(h);
}