<div class="container">
   <center>
    <div class="row">
        <div class="col-md-12 login-naslov">
            Sign In
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo URL;?>login/loginControl" method="post" id="login-form">
                <label class="form-label" for="email">E-mail:</label>
                <br>
                <input class="form-input" type="text" name="email" id="email">
                <br>
                <span id="emailPopup"></span>
                <br>
                
                <label class="form-label" for="password">Password:</label>
                <br>
                <input class="form-input" type="password" name="password" id="password">
                <br>
                <a style="color: #eae6e5;" href="#" onclick="showPassword()" id="showPassword">Show password</a><br>
                <span id="pwPopup"></span>
                <br><br>
                
                <input type="submit" name="submit" class="form-submit-button" id="submit" value="Sign In">
                <br><br>
                
                <p>Don't have an account? <a class="signup-link" href="<?php echo URL;?>register">Sign up</a></p>
            </form>
        </div>
    </div>
    </center>
</div>