<?php  
include_once("model/user.php");
$information="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName = $_REQUEST["username"];
    $userName = $_REQUEST["password"];
    $user = User::authentication($userName, $passWord);
    if ($user!=null) {
        # code...
        $information ="Login success. Welcome !". $user->$fullName;
    }
    else{
        $information ="Login false ! Check your email or password !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login_css.css">
    <script src="js/login2.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="message signup">
    <div class="btn-wrapper">
      <button class="button" id="signup">SignUp</button>
      <button class="button" id="login"> Login</button>
    </div>
  </div>
  <div class="form form--signup">
    <div class="form--heading">Welcome! Sign Up</div>
    <form autocomplete="off">
      <input type="text" placeholder="Name">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Password">
      <button class="button">Sign Up</button>
    </form>
  </div>
  <div class="form form--login">
    <div class="form--heading">Welcome back! </div>
    <form autocomplete="off">
      <input type="text" placeholder="Name">
      <input type="password" placeholder="Password">
      <button class="button">Login</button>
    </form>
  </div>
</div>
</body>
</html>