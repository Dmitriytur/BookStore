$(document).ready(function(){
    $("#add").click(function(){
        var name = $("#name").val(); 
        var author = $("#author").val();
        var year = $("#year").val();
		var genre = $("#genre").val(); 
        var price = $("#price").val();
        var amount = $("#amount").val();
        var pages = $("#pages").val();
		var annotation = $("#annotation").val();

		var binding;
		if ($("#flexible").is(":checked"))
		{
			binding = "flexible";
		}
		else 
		{
			binding = "stiff";
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
		else
		{
			images = "without";
		}

        var data = JSON.stringify([name, author, year, genre, price, amount, binding, pages, images, annotation]);

        $.ajax({
            url: '/admin/add_book',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data +'&page=' + $("#current_page").val(),
            success: function(response) {
                $('#container_books').html(response.html);
            }
        });
    });
});
function delete_book(id)
{
        var data = JSON.stringify([id]);
        $.ajax({
            url: '/admin/delete_book',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data +'&page=' + $("#current_page").val(),
            success: function(response) {
                $('#container_books').html(response.html);
            }
        });
}

function go_page(page) 
{
    if (page > 0 && page <= $("#max_page").val())
    {
        $.ajax({
            url: '/admin/book',
            type: 'get',
            dataType: 'json',
            data: 'page=' + page,
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
