<?php
include_once 'inc/header.php';
include_once 'Includes/dbh.inc.php';
 $errorms = "";
?>




<section  id="regroup" class="request">
<div class="dark-overly">

  <div class="container">
    <h4 class="lead text-primary"> <b>Creat Blood Request !! </b></h4>

    <form class="form-group" action="request.php" method="POST">

      <div class="input-group mb-2 ">
        <div class="input-group-text input-group-prepend">
          <span class="fa fa-heartbeat"></span>
        </div>
          <input class="form-control " maxlength="3" type="text" name="group"  placeholder="Your Blood Group" required>

      </div>

      <div class="input-group mb-2 ">
        <div class="input-group-text input-group-prepend">
          <span class="fa fa-location-arrow"></span>
        </div>
        <input class="form-control " type="text" name="location" placeholder="Your Location " required>
      </div>
      <div class="input-group mb-2 ">
        <div class="input-group-text input-group-prepend">
          <span class="fa fa-phone"></span>
        </div>
        <input class="form-control" type="text" name="number" placeholder="Your Phone Number" required >
      </div>


      <button  class="btn btn-outline-primary btn-sm m-1 "type="submit" name="submit">submit</button>

    </form>

  </div>
</div>
</section>
<section>
  <div class="container bg-success">
    <h3>Common Reasons People Can't Donate</h3>
    <p>Even if you were deferred in the past,you may be eligible to donate now  </p>
<div class="row">

  <div class="col-lg-3 col-md-6 mb-1">
    <div class="card p-3">
    <img src="" alt="">
      <h4>cold,Flu and Other Types of Illness</h4>
      <div class="card-body">

      <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-1">
    <div class="card p-3">
    <img src="" alt="">
      <h4>cold,Flu and Other Types of Illness</h4>
      <div class="card-body">

      <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
</p>
      </div>
    </div>
  </div><div class="col-lg-3 col-md-6 mb-1">
    <div class="card p-3">
    <img src="" alt="">
      <h4>cold,Flu and Other Types of Illness</h4>
      <div class="card-body">

      <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    </p>
      </div>
    </div>
  </div><div class="col-lg-3 col-md-6 mb-1">
    <div class="card p-3">
    <img src="" alt="">
      <h4>cold,Flu and Other Types of Illness</h4>
      <div class="card-body">

      <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
</p>
      </div>
    </div>
  </div>

</div>
  </div>
</section>


  <!-- Blood request section -->
<?php
$sql = "SELECT * FROM request;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
$count = 1;

if ($resultCheck >0) {


   while ($row = mysqli_fetch_assoc($result)) {
     ?>
     <div class="container my-2 text-light">
      <div class="card bg-dark text-light">
      <h3 class="text-warning p-3">!!Blood Request!!</h3>
      <h4 class="text-danger text-right pr-4">Post No. <?php echo $count; ?></h4>
      <div class="card-body">
        <p>Reqired Blood Group: <b class="text-danger"> <?php echo $row['bloodGroup']; ?> </b></p>
       <p>Location: <b class="text-danger"> <?php echo $row['location']; ?> </b> </p>
       <p>Contact Number: <b class="text-danger"> <?php echo $row['num']; ?> </b></p>

      </div>
      </div>
     </div>

      <?php
      $count++;
   }
}
 ?>
<!-- <section>

<h3>DAte niye khelci!!!</h3>
<?php
$t_date = date("y-m-d");
$start_date = strtotime("2019-06-14");
$end_date = strtotime("$t_date");
$diff= ($start_date-$end_date)/60/60/24;
echo "the difference between two dates:".$diff;
 ?>
</section> -->




</body>
