function search_book()
{
        var name = document.getElementById('search_name').value;
        var author = document.getElementById('search_author').value;
        var genre = document.getElementById('search_genre').value;
        var data = JSON.stringify([name, author, genre]);
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