/**
 * Created by uwaeae on 23.01.14.
 */



$(document).ready(function () {
    $("input.search").keyup(function () {
        //$("tbody.results").load('/data/plant/search/code/' + $(this).val() + 'tbody.results');
        $.get('/' + $(this).val(), function (data) {
            var content = $(data).find(" tbody.results ").children();
            $("tbody.results").empty().html(content);
        });

    });
});