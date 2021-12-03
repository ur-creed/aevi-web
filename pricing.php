<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aevi Web | Pricing</title>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
	<!-- Local CSS -->
	<link rel="stylesheet" href="css/pricing.css" type="text/css">
	<!-- Local JS -->
	<script src="js/pricing.js" type="text/javascript"></script>
</head>
<body>
	<!-- Navigation -->
	<?php include_once 'navigation.php' ?>
	
	<!-- TODO :: UPDATE THIS PART FOR THE PRICING SECTION -->
	<p>
		This will be where the pricing stuff will go.
	</p>
	<hr>
	<section>
		<form>
			<label for="FullName">Full name</label>
			<input type="text" name="full_name" placeholder="Full Name (John Doe)" id="FullName" required>
			<label for="Email">Email address</label>
			<input type="email" name="client_email" placeholder="Email address" id="Email" required>
			<label for="PackageSelect">Choose a package:</label>
			<select id="PackageSelect" name="package_select">
				<option value=""></option>
				<option value="new">New Project</option>
				<option value="maintenance">Maintenance</option>
			</select>
			<label for="Message">Tell us about your project</label>
			<textarea id="Message" name="message" placeholder="Tell us about your project..." required></textarea>
			<button id="SendMessageButton" type="submit" form="ContactForm">
				Send message
			</button>
		</form>
	</section>
	
	<!-- Footer -->
	<?php include_once 'footer.php' ?>
</body>
</html>