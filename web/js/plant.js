
function toggleedit(id,url) {

    if( $('div .plantshow'.id).empty() )
        $('div .plantshow'.id).load(url);
    else
        $('div .plantshow'.id).hide();
}

$(document).ready(function(){
        $("input.search_code").keyup(function () {
            //$("tbody.results").load('/data/plant/search/code/' + $(this).val() + 'tbody.results');
            $.get('search/code/' + $(this).val() , function(data) {
                var content = $(data).find(" tbody.results ").children();
                $("tbody.results").empty().html(content);
            });

        });

        $("input.search_name").keyup(function () {
            //$("div.results").load('/data/plant/search/name/' + $(this).val() + ' div.results');
            $.get('search/name/' + $(this).val() , function(data) {
                var content = $(data).find(" tbody.results ").children();
                $("tbody.results").empty().html(content);
            });
        });

        $("input.search_latein").keyup(function () {
           // $("div.results").load('/data/plant/search/latein/' + $(this).val() + ' div.results');

            $.get('search/latein/' + $(this).val() , function(data) {
                var content = $(data).find("table tbody.results").children();
                $("tbody.results").html(content);
            });

        });

    $.each($( ".autotext" ),auto);



    $( "#dialog" ).dialog({
        autoOpen: false,
        height: 600,
        width: 850,
        modal: true


    });

});

function auto(key,obj){
    //console.log(obj);
    var name = $(obj).attr('name');
    name = name.match(/\[[a-zA-Z_]*]/g);
    //console.log(name);
    $(obj).autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "/data/plant/search/autotext/"+name+"/"+request.term,
                dataType: "json",

                success: function( data ) {
                    response( $.map( data, function( item ) {

                        return {
                            label:  item.term

                        }
                    }));
                }
            });
        },
        minLength: 1
    });


}
