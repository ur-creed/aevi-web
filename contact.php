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
	<div class="container container-form">
        <div class="row row-content">
            <form action="">
                <div class="secondaryTitle title">
                    Please fill out this form below.
                </div>
                <div class="mb-3">
                    <label class="form-label h1" for="FullName">Full Name</label>
                    <input id="FullName" type="text" class="form-control name formEntry" placeholder="Ragnar Doe" required>
                </div>
                <div class="mb-3">
                    <label class="form-label h1" for="ClientEmail">Email address</label>
                    <input id="ClientEmail" type="text" class="form-control email formEntry" aria-describedby="emailHelp" placeholder="ragnar@email.com" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label h1" for="Message">What's on your mind?</label>
                    <textarea class="form-control message" name="Message" id="Message" cols="30" rows="10" placeholder="Send us a message about anything really..."></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input id="Terms" type="checkbox" class="form-check-input" value="Term">
                    <label for="Terms" class="form-check-label" style="color: grey">I Accept the <span style="color: #0e3721">Privacy Policy</span>.</label>
                </div>
                <button type="submit" class="submit formEntry">Submit message</button>
            </form>
        </div>
    </div>

	<!-- Footer -->
	<?php include_once 'footer.php' ?>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>