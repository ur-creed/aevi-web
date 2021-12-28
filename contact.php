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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/contact.css" type="text/css">
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
	
	<!-- Alerts	-->
	<?php include_once 'alert.php'?>
	
	<div class="container container-form">
        <div class="row row-content">
            <form id="ContactForm">
                <div class="secondaryTitle">
	                Please fill out this form below.
                </div>
                <div class="mb-5">
                    <label class="form-label h1" for="FullName">First and last name</label>
                    <input id="FullName" name="full_name" type="text" class="form-control name formEntry" placeholder="Ragnar Lothbrok" required>
                </div>
                <div class="mb-5">
                    <label class="form-label h1" for="ClientEmail">Email address</label>
                    <input id="ClientEmail" name="client_email" type="text" class="form-control email formEntry" aria-describedby="emailHelp" placeholder="Ragnar.Lothbrok@email.com" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else!</div>
                </div>
                <div class="mb-5">
                    <label class="form-label h1" for="Message">What's on your mind?</label>
                    <textarea class="form-control message" name="message" id="Message" cols="30" rows="10" placeholder="Send us a message about anything really..." required></textarea>
                </div>
                <div class="d-grid gap-1 col-6 mx-auto mt-4 mb-3">
                    <button type="submit" class="btn btn-danger">Send message</button>
                </div>
            </form>
        </div>
    </div>

	<!-- Footer -->
	<?php include_once 'footer.php' ?>
	
	<!-- JQuery	-->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap JS. -->
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Local JS -->
	<script src="js/contact.js" type="text/javascript"></script>
</body>
</html>