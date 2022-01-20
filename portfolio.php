<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Meta First!!   -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="AeviWeb">
    <meta property="og:title" content="Aevi Web website">
    <meta property="og:type" content="website">
    <meta property="og:image" content="image.png">
    <!-- Title -->
	<title>Aevi Web | Portfolio</title>
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
	<!-- Local CSS -->
    <link rel="stylesheet" href="css/portfolio.css" type="text/css">
	<link rel="stylesheet" href="css/particles.css" type="text/css">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
	<!-- Navigation -->
	<?php include_once 'navigation.php' ?>
	<!-- Particles -->
	<?php include_once 'particles.php' ?>
	<div class="container container-h1">
		<h1 class="display-4 text-center text-white h1 mt-0">Portfolio</h1>
		<hr class="my-4">
	</div>
    <div class="container justify-content-center">
        <div class="card mx-auto">
            <img class="card-img-top" src="images/clients/dare_angel_logo_new.png" alt="Dare Angel Productions">
            <div class="card-body">
                <h5 class="card-title">Dare Angel</h5>
                <p class="card-text lead">A film production company based in California taking the industry by storm!</p>
                <a class="btn btn-primary bg-dark dare_angel" href="https://dareangel.com" target="_blank">Website</a>
            </div>
        </div>
    </div>
	<div class="container text-center">
		<h2 class="display-3 mt-3 animate__animated animate__pulse">More projects coming soon!</h2>
	</div>
	
	<!-- Footer -->
	<?php include_once 'footer.php' ?>
	<!-- JQuery	-->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap JS. -->
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Local JS -->
	<script src="js/portfolio.js" type="text/javascript"></script>
</body>
</html>