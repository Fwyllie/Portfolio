<?php
  $user = "franwyll_fron";
  $pass = "rhon1234";
  $url = "localhost";
  $db = "franwyll_portfolio";
  $link = mysqli_connect($url, $user, $pass, $db, "8889");


if(mysqli_connect_error()){
  printf("connect failed: %s\n", mysqli_connect_error());
  exit();
}

?>
