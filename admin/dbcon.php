<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ontoron";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);
// cheak_connection
if (mysqli_connect_error()) {
echo "Failed to connect to MySQL".mysqli_connect_error();
}
