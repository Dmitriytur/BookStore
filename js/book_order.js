$(document).ready(function(){
    $("#buy_book").click(function(){
        $.ajax({
            url: '/books/buy',
            type: 'post',
            dataType: 'text',
            data: 'book_id=' + $("#book_id").val(),
            success: function(response) {
                if (response == 'success')
                {
                    $('#massage').animate({opacity: "1"}, 0);
                    $('#massage').animate({opacity: "0"}, 5000);
                }
                else
                {
                    window.location = "/login";
                }
            }
        });
    });
});