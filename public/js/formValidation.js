$(document).ready(function(){
            let emailError = "";
            let passwordError = "";
            let nameError = "";
            let validEmail = 0;
            let validPassword = 0;
            let validName = 0;
    
            $("#name").keyup(function(){
                let name = $(this).val();
                if(name.length > 0){
                    $(this).css("border", "3px solid #27fb6b");
                    validName = 1;
                }else{
                    $(this).css("border", "3px solid #ef3e36");
                    validName = 0;
                }
            })
    
            $("#email").keyup(function(){
                let email = $(this).val();
                let regex = new RegExp('[a-z0-9]+@(yahoo.com|gmail.com)');
                
                if(regex.test(email)){
                    $("#emailPopup").html("Valid e-mail").css("color", "#27fb6b");
                    $(this).css("border", "3px solid #27FB6B");
                    validEmail = 1;
                    
                }else{
                    $("#emailPopup").html("Invalid e-mail <br> E-mail must be @yahoo.com or @gmail.com").css("color", "#ef3e36");
                    $(this).css("border", "3px solid #ef3e36");
                    validEmail = 0;
                } 
            });    
            
            $("#password").keyup(function(){
                let password = $(this).val();
                var regexUpper = new RegExp('[A-Z]');
                var regexLower = new RegExp('[a-z]');
                var regexNumber = new RegExp('[0-9]');
                
                if(regexUpper.test(password) && regexLower.test(password) && regexNumber.test(password) && password.length >= 8){
                    $("#pwPopup").html("Valid password").css("color", "#27fb6b");
                    $(this).css("border", "3px solid #27FB6B");
                    validPassword = 1;
                    
                }else{
                    $("#pwPopup").html("Invalid password <br> Password must contain at least:<br> 8 characters, 1 uppercase letter,<br> 1 lowercase letter, 1 number<br>").css("color", "#ef3e36");
                    $(this).css("border", "3px solid #ef3e36");
                    validPassword = 0;
                }
            });
    
            $("#login-form").submit(function(event){
                event.preventDefault();
                let email = $("#email").val();
                let password = $("#password").val();
                
                console.log(email);
                console.log(password);
                
                if(validEmail == 1 && validPassword == 1){
                    $.post("http://localhost/repz/login/loginControl", {
                        email: email,
                        password: password
                    }, function(data){
                        $("body").html(data);
                    });
                }
                
                if(email == ""){
                    emailError = "Please input your e-mail";
                    $("#emailPopup").text(emailError).css("color", "#ef3e36");
                    $("#email").text(emailError).css("border", "3px solid #ef3e36");
                }
                
                if(password == ""){
                    passwordError = "Please input your password";
                    $("#pwPopup").text(passwordError).css("color", "#ef3e36");
                    $("#password").text(passwordError).css("border", "3px solid #ef3e36");
                }
            });
    
    
            $("#register-form").submit(function(event){
                event.preventDefault();
                let email = $("#email").val();
                let password = $("#password").val();
                let name = $("#name").val();
                
                
                if(validEmail == 1 && validPassword == 1 && validName == 1){
                    $.post("http://localhost/repz/register/registerControl", {
                        email: email,
                        password: password,
                        name: name
                    }, function(data){
                        data = "<div class='container'><div class='row'><div class='col-md-6 success-div'><h3 class='success-heading'>Successfully registered!</h3><center><a href='http://localhost/repz/login/'>Sign in</a></center></div></div></div>";
                        $('body').html(data);
                    });
                }
                
                if(name == ""){
                    nameError = "Please input your name";
                    $("#namePopup").text(nameError).css("color", "#ef3e36");
                    $("#name").text(nameError).css("border", "3px solid #ef3e36");
                }
                
                if(email == ""){
                    emailError = "Please input your e-mail";
                    $("#emailPopup").text(emailError).css("color", "#ef3e36");
                    $("#email").text(emailError).css("border", "3px solid #ef3e36");
                }
                
                if(password == ""){
                    passwordError = "Please input your password";
                    $("#pwPopup").text(passwordError).css("color", "#ef3e36");
                    $("#password").text(passwordError).css("border", "3px solid #ef3e36");
                }
            })
});

function showPassword(){
    let passwordInput = document.getElementById('showPassword');
    let password = document.getElementById('password');
    if(password.type == 'password'){
        password.type = 'text';
        passwordInput.text = "Hide password";
    }else{
        password.type = 'password';
        passwordInput.text = "Show password";
    }
}