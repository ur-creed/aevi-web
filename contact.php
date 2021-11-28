<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aevi Web | Contact</title>
	
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/contact.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<form>
			<label for="FullName">Full name</label>
			<input type="text"
			       id="FullName"
			       name="full_name"
			       class="form__input"
			       placeholder="John Snow"
			       required>
			<label for="Email">Email address</label>
			<input type="email"
			       id="Email"
			       name="from_email"
			       class="form__input"
			       placeholder="JohnSnow@email.com"
			       required>
			<label for="Message">Message</label>
			<textarea id="Message"
			          name="message"
			          class="form__input"
			          placeholder="Send us a message about anything really..."
			          required>
			</textarea>
			<!-- Button(s) -->
			<button id="SendMessageButton" type="submit" form="ContactForm" class="btn btn--green">
				Send Message
			</button>
		</form>
	</div>
</body>
</html>