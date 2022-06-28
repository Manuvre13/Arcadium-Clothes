<?php
if (isset($_POST['ORDER'])){

  $selected_f00d=$_POST['food'];
  $quantity=$_POST['quantity'];

  $counter=0;


  echo "Success! here is what you ordered";
  while ($counter < $quantity){
    echo '<img src="Cookie.jpg" alt="HTML5 Icon" style="width:200px;height:200px>">';
    echo "\r";
    $counter++;

  }
  ?>


