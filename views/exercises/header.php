<?php
    if(!isset($_SESSION['name'])){ 
        session_start(); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home | repz.</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2:600,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo URL;?>public/css/style.css">
        
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="<?php echo URL;?>public/js/formValidation.js"></script>
    <script src="<?php echo URL;?>public/js/stopwatch.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo URL;?>index">repz<b style="color: #EF3E36">.</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>

  <?php if(isset($_SESSION['name'])){?>
      <button class="btn btn-outline-success my-2 my-sm-0 ml-auto profile">
          <a style="font-size: 1rem!important" href="<?php echo URL;?>profile/profileInfo/<?php echo $_SESSION['id'];?>"><?php echo $_SESSION['name'];?></a>
      </button>
      <button class="btn btn-outline-success my-2 my-sm-0">
      <a class="logout-link" href="<?php echo URL;?>login/logout">Logout</a>
        </button>
      <?php }?>
      
  
</nav>