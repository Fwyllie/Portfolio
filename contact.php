<?php
	require_once("admin/scripts/config.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$street = $_POST['street'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		if($street === ""){
			$sendMail = submitMessage($name, $email, $subject, $message);
		}
	}

?>
