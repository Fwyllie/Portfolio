<?php

	function redirect_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}
	function submitMessage($name, $email, $subject, $message){
		//echo "works";
		$to = "contact@franceswyllie.com";
		$subj = "Email from portfolio site";
		$extra = "Reply-to: {$email}";
		$msg = "Name:". $name. "\n\nEmail:". $email. "\n\nSubject:". $subject. "\n\nMessage:". $message;
		return "Thanks {$name}, your message has been sent.";
		mail($to, $subj, $msg, $extra);
	}
?>
