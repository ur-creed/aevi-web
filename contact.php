<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta FIRST -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aevi Web | Contact Us</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <!-- CDN Fonts   -->
    <link href="http://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <!-- Local JS -->
    <script src="js/about.js" type="text/javascript"></script>
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
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="FullName">Full name</label>
                        <input class="form-control" type="text" id="FullName" name="full_name" placeholder="John Snow" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Email">Email address</label>
                        <input class="form-control" type="email" id="Email" name="client_email" placeholder="JohnSnow@email.com" aria-describedby="emailHelp" required>
                        <div id="emilHelp" class="form-text text-white">We'll never share your email with anyone else!</div>
                    </div>
                    <div class="mb-3">
                        <label for="Message">Message</label>
                        <textarea name="message" id="Message" class="form-control" cols="30" rows="10" placeholder="Send us a message about anything really..." required></textarea>
                    </div>
                    <!-- Button(s) -->
                    <button class="btb btn-lg btn-outline-primary" id="SendMessageButton" type="submit" form="ContactForm" disabled>
                        Send Message
                    </button>
                </form>
            </div>
        </div>

	</div>
	
	<!-- Footer -->
	<?php include_once 'footer.php' ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>