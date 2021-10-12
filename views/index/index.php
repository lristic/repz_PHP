   <div class="container">
    <div class="row">
        <div class="col-md-12 welcome-index">
            <h1>Welcome to repz<b style="color: #ef3e36">.</b></h1>
            <h4>Track your training progress</h4>
            <br>
            <?php if(!isset($_SESSION['name'])){?>
            <a href="<?php echo URL;?>login"><button class="signin-button-index">Sign In</button></a>
            <a href="<?php echo URL;?>register"><button class="signup-button-index">Sign Up</button></a>
            <?php } else{?>
            <a href="<?php echo URL;?>profile/profileInfo/<?php echo $_SESSION['id'];?>"><button class="yourrepz-button-index">Your repz</button></a>
            <?php } ?>
        </div>
    </div>
</div>