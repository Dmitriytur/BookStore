$(document).ready(function(){
    var func = function() {

        var pricesort;
        if ($("#asc").is(":checked"))
		{
			pricesort = "asc";
		}
		else if ($("#desc").is(":checked"))
		{
			pricesort = "desc";
		}
        else
        {
            pricesort = "";
        }
         var formData = {
            "name":$("#search_name").val(),
            "genre":$("#search_genre").val(),
            "page":1,
            "pricesort":pricesort

        };
        $.ajax({
            url: '/magazines/search',
            type: 'get',
            dataType: 'json',
            data: 'data=' + $.toJSON(formData),
            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
    };
    $("#search").click(func);
    $("#search_f").click(func);
});

$(document).ready(function(){
    $("#clear").click(function(){

        $("#search_name").val('');
        $("#search_genre").val('');
        $("#asc").prop('checked', false);
        $("#desc").prop('checked', false);
    });
});

function go_page(page) 
{
    var pricesort;
    if (page > 0 && page <= $("#max_page").val())
    {
        if ($("#asc").is(":checked"))
		{
			pricesort = "asc";
		}
		else if ($("#desc").is(":checked"))
		{
			pricesort = "desc";
		}
        else
        {
            pricesort = "";
        }
         var formData = {
            "name":$("#search_name").val(),
            "genre":$("#search_genre").val(),
            "page":page,
            "pricesort":pricesort

        };
        $.ajax({
            url: '/magazines/search',
            type: 'get',
            dataType: 'json',
            data: 'data=' + $.toJSON(formData),
            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
    }
}
function next_page() 
{
    go_page(parseInt($("#current_page").val()) + 1);
}
function prev_page() 
{
    go_page($("#current_page").val() - 1);
}