<?php
$hName='localhost'; // host name
$uName='root'; // database user name
$password=''; // database password
$dbName = "reservation"; // database name
$dbCon = mysqli_connect($hName,$uName,$password,$dbName);
if ($dbCon->connect_error) {
    die("Connection failed: ". $dbCon->connect_error);
  }
  echo "";
?>