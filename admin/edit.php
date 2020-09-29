

<?php
// include_once 'inc/header.php';
session_start();
include_once 'dbcon.php'


?>
<?php
 if (strlen($_SESSION['id'])==0) {
    header("Location:logout.php");
 }
 else {

   if (isset($_POST['update'])) {

$c_name = $_POST['c_name'];
$c_phone = $_POST['c_phone'];
$c_blood_group = $_POST['c_blood_group'];
$c_district = $_POST['c_district'];
$uid = intval($_GET['uid']);


$sql ="UPDATE donar SET name ='$c_name', phone='$c_phone',blood_group='$c_blood_group',district='$c_district' WHERE id='$uid';";
mysqli_query($conn,$sql);
$_SESSION['msg']="Profile Updated successfully";

// header("Location:../index.php?edited=success");

 }

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update Profile</title>
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
                  <li><a class="logout" href="logout.php">Logout</a></li>
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



     <?php
  //    if (empty($_POST['c_name'])|| empty($_POST['c_phone']) || empty($_POST['c_blood_group']) || empty($_POST['c_district'])) {
  //   echo "Your must fill the box!!";
  //
  // }
  ?>
<br> <br>
<div class="container">
  <div class=" py-4 wrapper">
<?php
$sql= "SELECT* FROM donar WHERE id='".$_GET['uid']."';";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {





?>
 <h3>Update <strong><?php echo $row['name']; ?></strong>'s profile</h3>

    <form class="form-group" action=" " method="POST">
      <div class="text-danger text-center mt-2">
        <?php echo $_SESSION['msg']; ?>
        <?php echo $_SESSION['msg']=""; ?>
      </div>
<div class="form-group">
  <label for="c_name">Your Name</label>

    <input class="form-control mb-2" type="text" class="form-" name="c_name" value="<?php echo $row['name']; ?>" required>
</div>
<div class="form-group">
  <label for="c_phone">Your Phone </label>
    <input class="form-control mb-2" type="text" class="form-" name="c_phone" value="<?php echo $row['phone']; ?>" required>
</div>

<div class="form-group">
  <label for="c_blood_group">Your Blood group</label>
  <input class="form-control mb-2" type="text" class="form-" name="c_blood_group" value="<?php echo $row['blood_group']; ?>" readonly>
</div>

<div class="form-group">
  <label for="c_district"> Your Location </label>

    <input class="form-control mb-2" type="text" class="form" name="c_district" value="<?php echo $row['district']; ?>"required>
</div>

 <button type="submit" class="btn btn-primary btn-block" name="update">UPDATE</button>
  </form>
<?php } ?>
</div>
</div>
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
<?php } ?>
