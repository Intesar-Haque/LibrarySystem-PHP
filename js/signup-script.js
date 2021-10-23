$(function() {
    $("#signupForm").validate({
    rules: {
        signup_uname: {
            required: true,
            minlength: 4
        },
        signup_email: {
            required: true,
            email : true
        },
        signup_pass: {
            required: true,
            pwcheck: true,
            minlength: 6
        },
        signup_cpass: {
          required: true,
          equalTo:"#signup_pass"
        }
    },
    messages: {
        signup_uname: {
          required: "<br><div style='padding-top:5px;'>Please enter Valid Username</div>",
          minlength: "<br><div style='padding-top:5px;'>Your Username must be at least 4 characters</div>"
        },
        signup_email: "<br><div style='padding-top:5px;'>Please provide Valid Email</div>",
        signup_pass: {
          required: "<br><div style='padding-top:5px;'>Please provide a Password</div>",
          pwcheck:"<br><div style='padding-top:5px;'>Password must contain upppercase, lowercase,<br> symbols and numbers </div>",
          minlength: "<br><div style='padding-top:5px;'>Your Password must be at least 6 characters</div>"
        },
        signup_cpass: {
          required: "<br><div style='padding-top:5px;'>Please provide a Password</div>",
          minlength: "<br><div style='padding-top:5px;'>Your Password must be at least 6 characters</div>",
          equalTo: "<br><div style='padding-top:5px;'>Passwords don't match</div>"
        }
    }
    });
    $.validator.addMethod("pwcheck", function(value) {
      return /^[A-Za-z0-9\d=!\-#@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value)&& /[\=!#\-@._*]/.test(value);
    });
});