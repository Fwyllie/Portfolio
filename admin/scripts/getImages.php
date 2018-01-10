<?php
  include("connect.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $workQuery = "SELECT * FROM tbl_images WHERE img_id={$id}";
    $getImages = mysqli_query($link, $workQuery);
  }else{
    $workQuery = "SELECT img_id, img_link, img_title, img_desc FROM tbl_images WHERE img_primary='yes'"; //load all thumbs
    $getImages = mysqli_query($link, $workQuery);
  }

  $grpResult = "";

  echo "[";

  while($imgResult = mysqli_fetch_assoc($getImages)){
    $jsonResult = json_encode($imgResult);
    $grpResult .= $jsonResult. ",";
  }
  echo substr($grpResult, 0, -1);

  echo "]";

  mysqli_close($link);

?>
