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
    <link rel="stylesheet" href="css/pricing.css" type="text/css">
    <!-- Local JS -->
    <script src="js/about.js" type="text/javascript"></script>

<body>
	<!-- Navigation -->
	<?php include_once 'navigation.php' ?>
    <!-- Particles -->
    <?php include_once 'particles.php' ?>
	<!-- TODO :: UPDATE THIS PART FOR THE PRICING SECTION -->
    <div class="container">
        <h1 class="display-4 text-center text-white h1 mt-0">Pricing and Packages</h1>
        <hr class="my-4">
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/imagesymbol.png" class="img-fluid card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title display-4 mt-0">New Site</h5>
                        <hr class="my-4">
                        <p class="card-text lead h1">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/imagesymbol.png" class="img-fluid card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title display-4 mt-0">Maintenance</h5>
                        <hr class="my-4">
                        <p class="card-text lead h1">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>

	<div class="container">
        <div class="row row-content">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="FullName">Full name</label>
                    <input class="form-control" type="text" name="full_name" placeholder="Full Name (John Doe)" id="FullName" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Email">Email address</label>
                    <input class="form-control" type="email" name="client_email" placeholder="Email address" id="Email" aria-describedby="emailHelp" required>
                    <div id="emilHelp" class="form-text text-white">We'll never share your email with anyone else!</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="PackageSelect">Choose a package:</label>
                    <select class="form-select" id="PackageSelect" name="package_select">
                        <option value="">Select from list:</option>
                        <option value="new">New Project</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Message">Tell us about your project</label>
                    <textarea name="message" id="Message" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-lg btn-primary" id="SendMessageButton" type="submit" form="ContactForm">Send message</button>
            </form>
        </div>

    </div>

    <!-- Footer -->
    <?php include_once 'footer.php' ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>