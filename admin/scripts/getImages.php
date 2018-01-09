<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


  include("connect.php");

  //$filter = $_GET['filter'];
  //echo $filter;
  if(isset($_GET['id'])){
    //gets single movie
    $id = $_GET['id'];
    $workQuery = "SELECT * FROM tbl_images WHERE img_id={$id}";
    $getImages = mysqli_query($link, $workQuery);
  }else{
    $workQuery = "SELECT img_id, img_link, img_title, img_desc FROM tbl_images WHERE img_primary='yes'"; //load all thumbs
    $getImages = mysqli_query($link, $workQuery);
  }

  $grpResult = "";

  echo "[";

  while($imgResult = mysqli_fetch_assoc($getImages)){ ////////////////// //THIS
    $jsonResult = json_encode($imgResult);
    $grpResult .= $jsonResult. ",";
  }
  echo substr($grpResult, 0, -1); //target, remove, how many characters to count back

  echo "]";

  mysqli_close($link);

?>
