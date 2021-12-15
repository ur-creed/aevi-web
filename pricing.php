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
    <<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/pricing.css" type="text/css">
</head>
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
    <div class="container container-cards">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/newproject.jpeg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="display-3 card-title">New Project</h5>
                        <p class="card-text lead">Looking to start a brand new project? Whether you know exactly what you want or have absolutely no idea where to begin, We can help with that!</p>
                        <p class="card-text"><span class="badge bg-primary">Starting at: $750</span></p>
	                    <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary " id="NewProjectButton" type="button">
                                Learn more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/maintenance.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="display-3 card-title">Maintenance</h5>
                        <p class="card-text lead">Have an existing website that needs updated information or just flat out needs to take that leap to the future? You're in the right place to teleport it there!</p>
                        <p class="card-text"><span class="badge bg-primary">$63 / hr</span></p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" id="ExistingProjectButton" type="button">
                                Learn more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>
<!-- Pricing Form -->
	<div class="container container-form">
        <div class="row row-content">
            <form id="PricingContactForm">
                <div class="secondaryTitle title">
                    Please fill out this form below.
                </div>
                <div class="mb-3">
                    <label class="form-label" for="FullName">First and last name</label>
                    <input id="FullName" name="full_name" class="form-control name formEntry" type="text" placeholder="Ragnar Doe" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ClientEmail">Email address</label>
                    <input id="ClientEmail" name="client_email" class="form-control email formEntry" type="email" placeholder="ragnar@email.com" aria-describedby="EmailHelp" required>
                    <span id="EmailHelp" class="form-text text-white">We'll never share your email with anyone else!</span>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="PackageSelect">Choose a package:</label>
                    <select id="PackageSelect" name="package_select" class="form-select select formEntry" required>
                        <option value="">Select an option</option>
                        <option value="new">New project</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Message">A little about your dream</label>
                    <textarea id="Message" name="message" class="form-control message formEntry" cols="30" rows="10" placeholder="Tell us a little about the project you want built..." required></textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-outline-success" id="SubmitInquiryButton" type="submit" form="ContactForm">Submit</button>
                </div>
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