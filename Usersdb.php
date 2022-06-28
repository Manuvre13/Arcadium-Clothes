<?php
 
require_once("connect.php");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email, firstname, lastname, tel, Username FROM registration";
$result= $conn->query($sql);


if (isset($_GET["edit"])) {
 $id=$GET["edit"];
 $sql= "SELECT Email, firstname, lastname, MobileNo, Username FROM registration WHERE Email=$id";
}



$conn->close();
?>