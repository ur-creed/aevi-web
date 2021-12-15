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
    <link href="http://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/pricing.css" type="text/css">

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
                <div class="table basic">
                    <div class="ribbon"><span>Recommend</span></div>
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inner-area">
                                <span class="text">$</span>
                                <span class="price">29</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name"></div>
                    <ul class="features">
                        <li>
                            <span class="list-name">Something here</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">100% Responsive Design</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Something here</span>
                            <span class="icon cross"><i class="fas fa-times"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Lifetime Site Updates</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                    </ul>
                    <div class="btn"><button>Learn More</button></div>
                </div>
                <div class="table premium">
                    <div class="price-section">
                        <div class="price-area">
                            <div class="inner-area">
                                <span class="text">$</span>
                                <span class="price">59</span>
                            </div>
                        </div>
                    </div>
                    <div class="package-name"></div>
                    <ul class="features">
                        <li>
                            <span class="list-name">Something here</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">100% Responsive Design</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Something here</span>
                            <span class="icon check"><i class="fas fa-check"></i></span>
                        </li>
                        <li>
                            <span class="list-name">Lifetime Template Updates</span>
                            <span class="icon cross"><i class="fas fa-times"></i></span>
                        </li>
                    </ul>
                    <div class="btn"><button>Learn More</button></div>
                </div>
            </div>
        </div>
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
                    <span id="EmailHelp" class="form-text text-black">We'll never share your email with anyone else!</span>
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
                    <button class="btn btn-success" id="SubmitInquiryButton" type="submit" form="ContactForm">Submit</button>
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