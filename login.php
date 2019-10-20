<?php  
session_start();
if(isset($_SESSION["user"]))
    header("location:index.php");
include_once("model/user.php");
$information="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName = $_REQUEST["username"];
    $passWord = $_REQUEST["password"];
    $user = User::authentication($userName, $passWord);
    if($user != null){
        # code...
        $_SESSION["user"] = serialize($user);
        header("location:index.php");
        
    }
    else{
        $information ="Login false ! Check your email or password !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="vendor/bootstrap/scss/bootstrap.scss" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" class="login-form" id="form">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login for PHP page</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="fas fa-user prefix"></i> -->
            <input name="username" id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="fas fa-lock prefix"></i> -->
            <input name="password" id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
            <a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
            <?php if (strlen($information) != 0) { ?>
                        <div class="alert alert-danger clearfix" role="alert">
                            <?php
                                echo $information;
                                ?>
                        </div>
                    <?php } ?>
        </div>
		  		<div class="row">
                  <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Forget Password</a></p>
          </div>  
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Register Now!</a></p>
          </div>         
        </div>
        </div>


      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
