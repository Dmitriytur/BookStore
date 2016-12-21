$(document).ready(function()
{
    $("#add").click(function()
    {
        var name = $("#name").val();
        var second_name = $("#second_name").val();
        var patronimic = $("#patronimic").val();
        var email = $("#email").val();
        var address = $("#address").val;
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        var a = false;

        //проверка пароля
        if(password != confirm_password)       
        {
            a = true;
            $("#confirm_password").val = "";
        }

        //проверка на ошибки    
        if (a) return;

    })
})