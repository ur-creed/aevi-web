<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta FIRST -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aevi Web | Contact</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <!-- CDN Fonts   -->
    <link href="https://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
	<!-- JQuery	-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <!-- Local JS -->
    <script src="js/contact.js" type="text/javascript"></script>
</head>
<body>
	<!-- Navigation -->
	<?php include_once 'navigation.php' ?>
    <!-- Particles -->
    <?php include_once 'particles.php' ?>
   <div class="container">
       <h1 class="h1 display-4 text-center text-white">Contact Us!</h1>
       <hr class="my-4">
   </div>
	<div class="container container-form h-100">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="wrapper">
	                <form id="ContactForm" class="form">
		                <div class="secondaryTitle title">
			                Please fill out this form below.
		                </div>
		                <label class="form-label" for="FullName">First and last name</label>
		                <input id="FullName" type="text" class="name formEntry" placeholder="Ragnar Doe" required>
		                <label class="form-label" for="ClientEmail">Email address</label>
	                    <input id="ClientEmail" type="text" class="email formEntry" placeholder="ragnar@email.com" required>
		                <label class="form-label" for="Message">What's on your mind?</label>
                        <textarea id="Message" class="message formEntry" placeholder="Send us a message about anything really..." required></textarea>
	                    <label for="Terms" class="form-label form-text text-center mt-0" style="color: grey">I Accept the <span style="color: #0e3721">Privacy Policy</span>.</label><br>
                        <input id="Terms" type="checkbox" class="termsConditions" value="Term">
                        <button type="submit" class="submit formEntry">Submit message</button>
                    </form>
                </div>
            </div>
        </div>

	</div>
	
	<!-- Footer -->
	<?php include_once 'footer.php' ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>