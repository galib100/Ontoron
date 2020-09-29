
<?php
include_once 'dbcon.php';
session_start();
error_reporting(0);
if (strlen($_SESSION['id'])==0) {
  header("Location:logout.php");
}
else {
  if(isset($_POST['change']))
  {
  $oldpassword=md5($_POST['old_psw']);
  $sql=mysqli_query($conn,"SELECT password FROM admin where password='$oldpassword'");
  $num=mysqli_fetch_array($sql);
  if($num>0)
  {
  $adminid=$_SESSION['id'];
  $newpass=md5($_POST['new_psw']);
   $ret=mysqli_query($con,"update admin set password='$newpass' where id='$adminid'");
  $_SESSION['msg']="Password Changed Successfully !!";
  //header('location:user.php');
  }
  else
  {
  $_SESSION['msg']="Old Password not match !!";
  header("location:change_password.php?change=failed");
  exit();
  }
  }

}
// old_psw
// new_psw
// con_psw
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Change password</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href=" style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>
  <body>
    <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation" data-target="#sidebar"></div>
            </div>
          <a href="#" class="logo"><b>Admin Dashboard</b></a>
          <div class="nav notify-row" id="top_menu">

              </ul>
          </div>
          <div class="top-menu">
            <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="logout.php"> <span class="fa fa-"></span>Logout</a> </li>
            </ul>
          </div>
      </header>
  <section id="navse">

  <aside>
      <div id="sidebar"  class="nav-collapse ">
          <ul class="sidebar-menu" id="nav-accordion">

              <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              <h5 class="centered"><?php echo $_SESSION['login'];?></h5>

              <li class="mt">
                  <a href="change-password.php">
                      <i class="fa fa-file"></i>
                      <span>Change Password</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="alldonar.php" >
                      <i class="fa fa-users"></i>
                      <span>Manage Users</span>
                  </a>
              </li>
          </ul>
      </div>
  </aside>
  <nav >

  </nav>
  </section>
  <br>
<br>
<section class="">
  <div class="container">
    <h3>Change Password</h3>
    <p class="text-danger"><?php echo $_SESSION['msg']; ?>

      <?php echo $_SESSION['msg']=""; ?></p>
  <form class="" action="" method="post">
    <div class="form-group">
        <label for="old_psw">Old Password</label>
        <input  class="form-control"type="password" name="old_psw" value="">
    </div>
    <div class="form-group">
        <label for="new_psw">New Password</label>
        <input class="form-control" type="password" name="new_psw" value="">
    </div><div class="form-group">
        <label for="con_psw">confirm Password</label>
        <input class="form-control" type="password" name="con_psw" value="">
    </div>
    <button type="submit"class="btn btn-primary btn-circle" name="change">Change</button>

  </form>
  </div>
</section>





    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
    <script>
      $(function(){
          $('select.styled').customSelect();
      });

    </script>
  </body>
</html>
