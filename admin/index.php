<?php
session_start();
error_reporting(0);
include ('dbcon.php');

if (isset($_POST['login'])) {
$UserId = $_POST['username'];
$adminpassword = md5( $_POST['ad_pwd']);

$sql = "SELECT * FROM admin WHERE username ='$UserId' AND password = '$adminpassword';";
$result= mysqli_query($conn,$sql);
$num = mysqli_fetch_array($result);
if ($num>0) {
$_SESSION['login'] = $_POST['username'];
$_SESSION['id']=$num['id'];
$extra = "alldonar.php";
// header("Location:$extra");
 echo "<script>window.location.href='".$extra."'</script>";

exit();
}
else {
  $backlink ="index.php";
  $_SESSION['aler_msg1'] ="**invalid password or username";
   echo "<script>window.location.href</script>";
   exit();
}

}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link hre="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.4.0/js/components/lightbox.min.js">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo_with_white.webp">
    <title>Ontoron Blood foundation</title>
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
     </head>
  <body class=" logsec">
    <!-- adminLogin_form -->
<section id="adminLogin_form"class=" py-5">
  <div class="container">
    <form class="form-login" action="" method="post">
      <div class="card">
    <h3 class="card-header text-center"style="background: #68DFF0;">Log in Now</h3>
        <p class="text-danger text-center pt-1"><?php echo$_SESSION['aler_msg1'] ; ?><?php echo $_SESSION['aler_msg1']=""; ?></p>

<div class="input-group mb-2">
  <div class="input-group-text input-group-prepend">
    <span class="fa fa-user"></span>
  </div>
  <input type="text" class="form-control " name="username" value="" placeholder="User Id" required>

</div>
  <div class="input-group mb-2">
      <div class="input-group-text input-group-prepend">
        <span class="fa fa-lock"></span>
      </div>
        <input type="password"  class="form-control"name="ad_pwd" value="" placeholder="Password" required>
  </div>
        <button type="submit" class="btn btn-outline-primary btn-block" name="login">Log In</button>
      </div>
    </form>
  </div>
</section>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("assets/img/login-bg.jpg", {speed: 500});
</script>


  </body>
</html>
