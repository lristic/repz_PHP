<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php if(isset($this->verifyReg)){if($this->verifyReg == 1){?>
            <h3>Account successfully created!</h3>
            <a href="<?php echo URL;?>/login">Sign in</a>
            <?php } }else{?>
            <h3>Please use your verification link sent to your e-mail.</h3>
            <?php } ?>
        </div>
    </div>
</div>