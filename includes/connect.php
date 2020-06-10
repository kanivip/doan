<?php 
    $connect = mysqli_connect("localhost","id13680425_shoppet2k","","id13680425_database");
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
  }
   
  echo "Connected successfully";
?>