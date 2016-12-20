$(document).ready(function(){
    $("#add").click(function(){
        var name = $("#name").val(); 
		var genre = $("#genre").val(); 
        var price = $("#price").val();
        var amount = $("#amount").val();
		var annotation = $("#annotation").val();

        var data = JSON.stringify([name, price, genre, annotation, amount]);
        $.ajax({
            url: '/admin/add_magazine',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data,
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
            data: 'data=' + data,
            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
}
