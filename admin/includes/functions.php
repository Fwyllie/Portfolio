<?php
  $user = 'root';
	$pass = 'root';
	$host = 'localhost';
	$db = "portfolio";

	$conn = mysqli_connect($host, $user, $pass, $db, 8889);

	mysqli_set_charset($conn, 'utf8');

	if(!$conn){
		echo 'uh oh it broken';
		exit;
	}

	if(isset($_GET['getImages'])){
		$myQuery = 'SELECT * FROM tbl_images WHERE img_primary = "yes"'; //this gets the thumbnails
		$results = mysqli_query($conn, $myQuery);
		$rows = array();
		while ($row = mysqli_fetch_assoc($results)){
			$rows[] = $row;
		}
		echo json_encode($rows); //show it on the page
	}

	if(isset($_GET["portPiece"])){
		$portOption = $_GET["portPiece"];

	$myQuery = "SELECT * FROM tbl_images WHERE img_projects= '$portOption' AND img_primary = 'no'"; //this gets the images that go inside of the lightbox
  //SELECT * FROM tbl_images WHERE img_projects = "codeworld"
  $result = mysqli_query($conn, $myQuery);
	$row =  mysqli_fetch_assoc($result);
	echo json_encode($row);
}
?>
