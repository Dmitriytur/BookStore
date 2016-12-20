function search_book()
{
        var name = document.getElementById('search').value;
        var data = JSON.stringify([name]);
        $.ajax({
            url: '/books/search',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data,
            success: function(response) {
                $('#container_books').html(response.html);
            }
        });
}