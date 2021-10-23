$(function() {
    $("#loginForm").validate({
    rules: {
        login_email: {
            required: true,
            email : true
        },
        login_pass: {
            required: true
        }
    },
    messages: {
        login_email: "<br><div style='padding-top:5px;'>Please provide Valid Email</div>",
        login_pass : "<br><div style='padding-top:5px;'>Please provide Valid Password</div>"
    }
    });
});