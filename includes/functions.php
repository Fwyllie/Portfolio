<?php
$user = "franwyll_fron";
$pass = "rhon1234";
$url = "localhost";
$db = "franwyll_portfolio";
$conn = mysqli_connect($url, $user, $pass, $db, "8889");

	mysqli_set_charset($conn, 'utf8');

	if(!$conn){
		echo 'uh oh it broken';
		exit;
	}

	if(isset($_GET['getImages'])){
		$myQuery = 'SELECT * FROM tbl_images WHERE img_primary = "yes"';
		$results = mysqli_query($conn, $myQuery);
		$rows = array();
		while ($row = mysqli_fetch_assoc($results)){
			$rows[] = $row;
		}
		echo json_encode($rows);
	}

	if(isset($_GET["portPiece"])){
		$portOption = $_GET["portPiece"];
		$myQuery = "SELECT * FROM tbl_images WHERE img_projects= '$portOption' AND img_primary = 'no'";
		$results = mysqli_query($conn, $myQuery);
		$row =  mysqli_fetch_assoc($results);
		echo json_encode($row);
}
?>
