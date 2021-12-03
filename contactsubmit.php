<?php
	if (isset($_REQUEST['client_email'])) {
		$to = 'creed@aeviweb.com, christopher@aeviweb.com';
		$from = "inquire@aeviweb.com";
		$customer_email = $_REQUEST['client_email'];
		$customer_full_name = $_REQUEST['full_name'];
		$package = $_REQUEST['package_select'];
		$subject = "General Contact";
		$message = $_REQUEST['message'] . "<br/>My contact email: " . $customer_email;
		
		if ($package) {
			$subject = "Tell me more!";
			
			switch ($package) {
				case 'new':
					$subject = $customer_full_name . " - New Project - " . $subject;
					break;
				case 'maintenance':
					$subject = $customer_full_name . " - Site Maintenance - " . $subject;
					break;
				default:
					$subject = $customer_full_name . " - I'm Undecided But Interested - " . $subject;
					break;
			}
		}
		
		$headers = array(
			'From'    => 'inquire@aeviweb.com',
			'ReplyTo' => $customer_email
		);
		
		if (mail($to, $subject, $message, $headers)) {
			echo 200;
		} else {
			echo 500;
		}
	}
