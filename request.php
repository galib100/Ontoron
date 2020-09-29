
<?php
include_once 'Includes/dbh.inc.php';
 if (  isset($_POST['submit'])) {
   

   $group = mysqli_real_escape_string($conn,$_POST['group']);
   $location = mysqli_real_escape_string($conn,$_POST['location']);
   $number = mysqli_real_escape_string($conn,$_POST['number']);

   $sqli = " INSERT INTO  request(bloodGroup,location,num) VALUES( '$group','$location' , '$number');";
    mysqli_query($conn,$sqli);
    header("Location:index.php?add=success");

 }
