<?php
	require_once("admin/scripts/config.php");
	if(isset($_POST['submit'])){
		//echo "YOU DID IT YOU CLICKED THE BUTTON";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$street = $_POST['street'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$direct = "thankyou.php";
		//echo $name;
		if($street === ""){
			//echo "Human";
			$sendMail = submitMessage($name, $email, $subject, $message, $direct);
		}
	}

?>
