<?php

require("connect.php");

/*$sql= "INSERT INTO registration (firstname, middlename, surname, email)
VALUES ('John', 'Doe', 'Mcleen', 'johndoe12@gmail.com')";*/

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

print_r($_POST);


$Firstname=$_POST["firstname"];
$Middlename=$_POST["middlename"];
$Surname=$_POST["surname"];
$Email=$_POST["email"];
$Telephone_No=$_POST["tel"];
$Password=$_POST["psw"];

print_r($Firstname);
print_r($Middlename);
print_r($Surname);
print_r($Email);
print_r($Telephone_No);
print_r($Password);



?>