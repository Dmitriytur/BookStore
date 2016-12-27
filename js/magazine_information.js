$(document).ready(function(){
    $("#search").click(function(){

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
    });
});

$(document).ready(function(){
    $("#clear").click(function(){

        $("#search_name").val('');
        $("#search_genre").val('');
        $("#asc").prop('checked', false);
        $("#desc").prop('checked', false);
    });
});