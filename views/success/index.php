<div class="container">
    <div class="row">
        <div class="col-md-6 success-div">
           <?php if(isset($_SESSION['name'])){?>
            <h3 class="success-heading">Successfully entered exercises!</h3>
            <center><a href="<?php echo URL; ?>profile/profileInfo/<?php echo $_SESSION['id'];?>">Back to profile</a></center>
            <?php }else{ ?>
            <h3 class="success-heading">Successfully registered!</h3>
            <center><a href="<?php echo URL; ?>login/">Sign in</a></center>
            <?php } ?>
        </div>
    </div>
</div>