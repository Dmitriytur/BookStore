function search_magazine()
{
        var name = document.getElementById('search_name').value;
        var data = JSON.stringify([name]);
        $.ajax({
            url: '/magazines/search',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data,
            success: function(response) {
                $('#container_magazines').html(response.html);
            }
        });
}