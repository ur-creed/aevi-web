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
	<section>
		<form>
			<input type="text" name="full_name" class="form__input" placeholder="Full Name (John Doe)" id="FullName" required>
			<label for="FullName" class="form__label">Full name</label>
		
			<input type="email" name="from_email" class="form__input" placeholder="Email address" id="Email" required>
			<label for="Email" class="form__label">Email address</label>
		
			<label for="PackageSelect" class="form__label-1">Choose a package:</label>
			<select id="PackageSelect"  class="form__input" name="package_select">
				<option value=""></option>
				<option value="new">New Project</option>
				<option value="maintenance">Maintenance</option>
			</select>
		
			<textarea id="Message" name="message" class="form__input" placeholder="Tell us about your project..." required></textarea>
			<label for="Message" class="form__label">Tell us about your project</label>
		
			<button id="SendMessageButton" type="submit" form="ContactForm">
				Send message
			</button>
		</form>
	</section>
	<!-- Footer -->
	<?php include_once 'footer.php' ?>
</body>
</html>