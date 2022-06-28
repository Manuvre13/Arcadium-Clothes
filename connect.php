<?php
$server_name= "localhost";
$username= "root";
$password= "";
$database="Clothes";

$conn=mysqli_connect($server_name, $username, $password, $database);

if (!$conn) {
    die("Could not connect".mysqli_connect_error());

}
else {
    echo "Welcome!! You Have Connected successfully";
}

/*$conn=mysqli_connect("localhost", "root", "" ) */


?>