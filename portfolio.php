<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Meta First!!   -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
	<title>Aevi Web | Portfolio</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <!-- CDN Fonts   -->
    <link href="https://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
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
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="images/clients/dare_angel_logo_new.png" class="card-img-top img-fluid da" alt="...">
                        <div class="card-body">
                            <div class="middleTextDA">
                                <a href="https://www.dareangel.com/" id="daa"><h5 class="card-title">Dare Angel</h5></a>
                                <p class="card-text lead">A film production company based in California taking the industry by storm!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/clients/ReneeMWagnerPolen.png" class="card-img-top img-fluid rw" alt="...">
                        <div class="card-body">
                            <div class="middleTextRW">
                                <a href="https://www.reneemwpolen.art/" id="rwa"><h5 class="card-title">Renee M Wagner-Polen Fine Art</h5></a>
                                <p class="card-text lead">Do you love abstract art as much as we do?! Check out our latest project for Renee Wagner-Polen, an amazing abstract artist.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
	<div class="container text-center">
		<h2 class="display-3 mt-5 animate__animated animate__pulse">More projects coming soon!</h2>
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