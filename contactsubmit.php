<?php
	if (isset($_REQUEST['client_email'])) {
		$to = 'creed@aeviweb.com, christopher@aeviweb.com';
		$from = "inquire@aeviweb.com";
		$client_email = $_REQUEST['client_email'];
		$client_full_name = $_REQUEST['full_name'];
		$package = $_REQUEST['package_select'] ?? null;
		$subject = "General Contact";
		$message = $_REQUEST['message'] .
			"<br/>My contact email: " . $client_email;
		
		if ($package) {
			switch ($package) {
				case 'new':
					$subject = "New Project Inquiry";
					break;
				case 'existing':
					$subject = "Site Maintenance Inquiry";
					break;
				default:
					$subject = "I'm Undecided But Interested";
					break;
			}
		}
		
		$subject = $subject . " - " . $client_full_name;
		
		$headers = array(
			'From'         => $from,
			'Reply-To'     => $client_email,
			'X-Mailer'     => 'PHP/' . phpversion(),
			'Content-Type' => 'text/html; charset=iso-8859-1'
		);
		
		if (mail($to, $subject, $message, $headers)) {
			echo 200;
		} else {
			echo 500;
		}
	}
