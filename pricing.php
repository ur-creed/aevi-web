<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta FIRST -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aevi Web | Pricing</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <!-- CDN Fonts   -->
    <link href="https://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/pricing.css" type="text/css">
	<link rel="stylesheet" href="css/particles.css" type="text/css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
<body>
	<!-- Navigation -->
	<?php include_once 'navigation.php' ?>
    <!-- Particles -->
    <?php include_once 'particles.php' ?>
	<!-- Pricing Heading   -->
    <div class="container container-h1">
        <h1 class="display-4 text-center text-white h1 mt-0">Pricing</h1>
        <hr class="my-4">
    </div>
	
	<!-- Pricing Cards -->
    <div class="container">
        <div class="row row-content1">
            <div class="wrapper">
                <div class="table new">
                    <div class="ribbon"><span>Starting At</span></div>
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inside">
                                <span class="text">$</span>
                                <span class="price">1K</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name"></div>
                    <ul class="features">
                        <li>
                            <span class="list-name">Up to 5 Pages</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">100% Responsive Design</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Lifetime Site Updates</span>
                            <span class="icon cross"><i class="fas fa-times"></i></span>
                        </li>
                        <li>
                            <span class="list-name">One Contact Form</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
	                    <li>
		                    <span class="list-name">Accessibility</span>
		                    <span class="icon check"><i class="fas fa-check"></i></span>
	                    </li>
                    </ul>
                    <div class="btn">
	                    <button id="NewProjectButton" aria-label="">Learn More</button>
                    </div>
                </div>
                <div class="table maintenance">
                    <div class="ribbon ribbon_maintenance"><span>Hourly</span></div>
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inside">
                                <span class="text">$</span>
                                <span class="price">63</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name"></div>
                    <ul class="features">
                        <li>
                            <span class="list-name">Feature Additions</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">SEO & Content Updates</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Bug Fixes</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Lifetime Site Updates</span>
                            <span class="icon cross"><i class="fas fa-times"></i></span>
                        </li>
	                    <li>
		                    <span class="list-name">Support</span>
		                    <span class="icon check"><i class="fas fa-check"></i></span>
	                    </li>
                    </ul>
                    <div class="btn">
                        <button id="ExistingProjectButton" aria-label="Website Maintenance Learn More Button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Alerts	-->
	<?php include_once 'alert.php'?>
	
	<!-- Pricing Form -->
	<div class="container container-form">
	    <div class="row row-content">
	        <form id="PricingContactForm">
	            <div class="secondaryTitle title">
	                Please fill out this form below.
	            </div>
	            <div class="mb-5">
	                <label for="FullName" class="form-label">Full Name</label>
	                <input id="FullName" type="text" name="full_name" class="form-control name formEntry" placeholder="Ragnar Lothbrok" required>
	            </div>
	            <div class="mb-5">
	                <label for="ClientEmail" class="form-label">Email</label>
	                <input id="ClientEmail" type="email" name="client_email" class="form-control email formEntry" aria-describedby="emailHelp" placeholder="Ragnar.Lothbrok@email.com" required>
	                <div id="emailHelp" class="form-text">We'll never share your email with anyone else!</div>
	            </div>
	            <div class="mb-5">
	                <label for="PackageSelect" class="form-label">Select a Package:</label>
	                <select id="PackageSelect" class="form-select" name="package_select" required>
	                    <option value="">Choose package</option>
		                <option value="new">New site</option>
		                <option value="existing">Maintenance</option>
	                </select>
	            </div>
	            <div class="mb-5">
	                <label for="Message" class="form-label">A little about your project</label>
	                <textarea id="Message" name="message" class="form-control message formEntry" placeholder="Tell us a little bit about your project and vision..." required></textarea>
	            </div>
	            <div class="d-grid gap-1 col-6 mx-auto mt-4 mb-3">
	                <button type="submit" class="btn btn-success" aria-label="Pricing Submit Button">Submit</button>
	            </div>
<!--		        <div class="spinner-grow text-success" role="status">-->
<!--			        <span class="sr-only">Loading...</span>-->
<!--		        </div>-->
	        </form>
	    </div>
	</div>
	<!-- End Form -->
	
    <!-- Footer -->
    <?php include_once 'footer.php' ?>
    <!-- JQuery	-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS. -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Local JS -->
    <script src="js/pricing.js" type="text/javascript"></script>
</body>
</html>