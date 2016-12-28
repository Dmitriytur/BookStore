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
            "author": $("#search_author").val(),
            "genre":$("#search_genre").val(),
            "flexible":$("#flexible").is(":checked"),
            "stiff":$("#stiff").is(":checked"),
            "coloured":$("#coloured").is(":checked"),
            "black_and_white":$("#black_and_white").is(":checked"),
            "without":$("#without").is(":checked"),
            "pricesort":pricesort,
            "page":1
        };
        $.ajax({
            url: '/books/search',
            type: 'get',
            dataType: 'json',
            data: 'data=' + $.toJSON(formData),

            success: function(response) {
                $('#container_books').html(response.html);
            }
        });
    };
    $("#search").click(func);
    $("#search_f").click(func);
});
$(document).on('keypress', function(e) {
    if(event.keyCode==13)
       {
          $("#search").click();
          return false;
       }
});
$(document).ready(function(){
    $("#clear").click(function(){

        $("#search_name").val('');
        $("#search_author").val('');
        $("#search_genre").val('');
        $("#flexible").prop('checked', false);
        $("#stiff").prop('checked', false);
        $("#coloured").prop('checked', false);
        $("#black_and_white").prop('checked', false);
        $("#without").prop('checked', false);
        $("#asc").prop('checked', false);
        $("#desc").prop('checked', false);
    });
});

function go_page(page) 
{
    if (page > 0 && page <= $("#max_page").val())
    {
        var binding;
		if ($("#flexible").is(":checked"))
		{
			binding = "flexible";
		}
		else if ($("#stiff").is(":checked"))
		{
			binding = "stiff";
		}
        else
        {
            binding = "";
        }
		var images;
		if ($("#coloured").is(":checked"))
		{
			images = "coloured";
		}
		else if ($("#black_and_white").is(":checked"))
		{
			images = "black_and_white";
		}
		else if ($("#without").is(":checked"))
		{
			images = "without";
		}
        else
        {
            images = "";
        }

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
            "author": $("#search_author").val(),
            "genre":$("#search_genre").val(),
            "flexible":$("#flexible").is(":checked"),
            "stiff":$("#stiff").is(":checked"),
            "coloured":$("#coloured").is(":checked"),
            "black_and_white":$("#black_and_white").is(":checked"),
            "without":$("#without").is(":checked"),
            "pricesort":pricesort,
            "page":page
        };
        $.ajax({
            url: '/books/search',
            type: 'get',
            dataType: 'json',
            data: 'data=' + $.toJSON(formData),

            success: function(response) {
                $('#container_books').html(response.html);
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