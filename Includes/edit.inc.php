<?php
include_once 'dbh.inc.php';

$c_name = $_POST['c_name'];
$c_phone = $_POST['c_phone'];
$c_blood_group = $_POST['c_blood_group'];
$c_district = $_POST['c_district'];
$c_pwd = $_POST['c_pwd'];
$new_pwd = $_POST['new_pwd'];

$sql ="UPDATE donar SET name ='$c_name', phone='$c_phone',blood_group='$c_blood_group',district='$c_district',password ='$new_pwd' WHERE password = '$c_pwd';";
mysqli_query($conn,$sql);
header("Location:../index.php?edited=success");
