function login()
{
    var form = $('#loginForm');
    var url = form.attr('action');

    $.ajax(
    {
        type: "POST",
        url: 'recaptcha.php',
        data: form.serialize(),
        success: function(data)
        {
             $('#message').empty();
            $('#message').append(data);
        }
    });

}
grecaptcha.ready(function() {
grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
.then(function(token) {

    $('#google-response-token').val(token);
});
});
