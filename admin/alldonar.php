<?php
session_start();

include_once 'dbcon.php';


?>
<?PHP
if (strlen($_SESSION['id']== 0)) {
  header("Location:logout.php");
}
else {

  if(isset($_POST['donate'])){
    $uid = intval($_GET['uid']);
    $date= date('y-m-d');
    $sql = "UPDATE donar set date_of_donate ='$date' WHERE id= '$uid';";
    $result = mysqli_query($conn,$sql);
  }





?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Login</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                      <a href="change_password.php">
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
<br>
  <div class="container ">
    <div class="form-group">

      <h3> <span class="fa fa-users fa-lg"style="padding: 10px;"></span>Alldonar Information</h3>
      </div>
 <table class="table table-dark table-striped table-hover p-3">
   <tr>
  <th> id </th>
  <th> Name</th>
  <th> blood </th>
   <th> phone </th>
  <th> Location</th>
  <th></th>
  <th></th>
   </tr>

   <?php
 $sql = " SELECT * FROM donar;";
 $result = mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);
?>
<?php
$count = 1;
$today = strtotime(date('y-m-d'));
if ($resultCheck >0 ) {
while ($row = mysqli_fetch_assoc($result)) {
  $d_day = strtotime($row['date_of_donate']);
    $diff = ($today-$d_day)/60/60/24;//day_differerenc
  if ($diff>= 120) {
  $_SESSION['perfet']="Donatable";
  }
?>
<tr>
  <td><?php echo $count; ?> </td>
  <td><?php echo $row['name']; ?> </td>
  <td><?php echo $row['blood_group']; ?> </td>
  <td><?php echo $row['phone']; ?> </td>
  <td><?php echo $row['district']; ?> </td>
    <td>
        <a href="edit.php?uid=<?php echo $row['id']; ?>" class="btn btn-danger" ><span class="fa fa-pencil"></span> Edit</a> </td>
    <td>
          <form class="" action="alldonar.php?uid=<?php echo    $row['id']; ?>" method="post">
              <input type="submit" class="btn btn-success" name="donate" value="donate">
      </form>
      <small> donate <b class="text-danger"><?php  echo $diff ?></b> days ago</small>
    </td>
    <td> <p class="text-danger"><?php echo $_SESSION['perfet']; ?> <?php echo $_SESSION['perfet']=""; ?></p></td>
</tr>
<tr>
  <td></td>
</tr>
<?php
$count++;

}
}
?>

</table>
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
<?php

}
 ?>
