<?php

	function redirect_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}


	//echo "From mail.php";
	function submitMessage($name, $email, $subject, $message, $direct){
		$to = "contact@franceswyllie.com";
		$subj = "Email from portfolio site";
		$extra = "Reply-to: {$email}";
		$msg = "Name: ". $name. "\n\nEmail:". $subject. "\n\nSubject:". $email. "\n\nMessage:". $message;
		//THIS WILL NOT WORK LOCALLY, THIS NEEDS TO BE TESTED ON YOUR HOSTING
		//mail($to, $subj, $msg, $extra);
		$direct = $direct. "?name={$name}";
		redirect_to($direct);
	}


?>
