<?php
function connect(){
    $dbserver="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="results";

    $link=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or 
    die("Could not connect".mysqli_connect_error());
    return ($link);

}

function setData($sql){
  $link=connect();
  if(mysqli_query($link, $sql)){
   echo "Success";
  }
    else{
      echo "Error".mysqli_error($link);
    }
}
function getData($sql){
  $link=connect();
  $result= mysqli_query($link,$sql);

  if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_assoc($result)){
      $rows[]=$row;

    }
    return $rows;
  }
}

?>
