<?php
<<<<<<< HEAD
  $user = "franwyll_fron";
  $pass = "rhon1234";
  $url = "localhost";
  $db = "franwyll_portfolio";
=======
  $user = "root";
  $pass = "root";
  $url = "localhost";
  $db = "";
>>>>>>> ff914c11b8566a842da2fff48d413a58af585f82
   $link = mysqli_connect($url, $user, $pass, $db, "8889");


if(mysqli_connect_error()){
  printf("connect failed: %s\n", mysqli_connect_error());
  exit();
}

?>
