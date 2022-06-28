<?php

require_once("connect.php");

$sqli="SELECT * FROM registration";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($test);
if(isset($_GET["edit"])){
 $id=$_GET["edit"];
 $sqli="SELECT * FROM registration WHERE firstname=$Firstname";

}
?>