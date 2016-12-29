$(document).ready(function(){
    $("#add").click(function(){
        var name = $("#name").val(); 
		var genre = $("#genre").val(); 
        var price = $("#price").val();
        var amount = $("#amount").val();
        var pages = $("#pages").val();
		var annotation = $("#annotation").val();
        var data = JSON.stringify([name, price, genre, annotation, amount]);
        $.ajax({
            url: '/admin/add_magazine',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data +'&page=' + $("#current_page").val(),
            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
    });
});
function delete_magazine(id)
{
        var data = JSON.stringify([id]);
        $.ajax({
            url: '/admin/delete_magazine',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data +'&page=' + $("#current_page").val(),
            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
}

function go_page(page) 
{
    if (page > 0 && page <= $("#max_page").val())
    {
        $.ajax({
            url: '/admin/magazine',
            type: 'get',
            dataType: 'json',
            data: 'page=' + page,

            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
    }
}
function next_page() 
{
    go_page($("#max_page").val());
}
function prev_page() 
{
    go_page(1);
}