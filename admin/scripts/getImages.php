<?php
  include("connect.php");

  //$filter = $_GET['filter'];
  //echo $filter;
  if(isset($_GET['id'])){
    //gets single movie
    $id = $_GET['id'];
    $workQuery = "SELECT * FROM tbl_images WHERE img_id={$id}";
    $getImages = mysqli_query($link, $workQuery);
  }else{
    $movieQuery = "SELECT img_id, img_link, img_title, img_desc FROM tbl_images WHERE img_primary="yes"";
    $getImages = mysqli_query($link, $workQuery);
  }

  $grpResult = "";

  echo "[";

  while($movResult = mysqli_fetch_assoc($getMovies)){
    //this loops throught $getMovies
    //echo $movResult['movies_title'];
    $jsonResult = json_encode($movResult);
    //echo $jsonResult;
    $grpResult .= $jsonResult. ",";
  }

  echo substr($grpResult, 0, -1); //target, remove, how many characters to count back

  echo "]";

  mysqli_close($link);

?>
