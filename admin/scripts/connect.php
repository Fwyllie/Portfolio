<?php
//this page connects you to the db
   $user = "root";
   //$pass = ""; //Win
   $pass = "root"; // MAC
   $url = "localhost";
   $db = "portfolio";
   //$link = mysqli_connect($url, $user, $pass, $db); //Windows
   $link = mysqli_connect($url, $user, $pass, $db, "8889"); //MAC

if(mysqli_connect_error()){
  printf("connect failed: %s\n", mysqli_connect_error());
  exit();
}

?>
