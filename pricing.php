<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta FIRST -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7KVJBNBW11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7KVJBNBW11');
    </script>
    <title>Aevi Web | Pricing</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- CDN Fonts   -->
    <link href="https://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/kaz7xgh.css">
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
    <style type="text/css">
        ul {
            list-style: url("images/checkmark(32px).png");
        }
        .card {
            margin: 0 auto !important;
            float: none;
        }
    </style>
    <script type='text/javascript'>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', 'a72a96fac25c4d95dc8213531cc3a56a34dc5ed0', { region: 'eu' });
    </script>
</head>
<body>
	<!-- Navigation -->
	<?php include_once 'navigation.php' ?>
    <!-- Particles -->
    <?php include_once 'particles.php' ?>

    <!-- Top Btn -->
    <div class="container-fluid">
        <label class="switch float-end">
            <input type="checkbox" onclick="darkMode()"/>
            <span></span>
        </label>
    </div>

	<!-- Pricing Heading   -->
    <div class="container container-h1">
        <h1 class="display-4 text-center h1 mt-0">Our Services</h1>
        <hr class="my-4">
    </div>

    <div class="container">
        <div class="card table border rounded" style="box-shadow: 2px 2px 4px #000000; width: 65%">
            <div class="card-body row">
                <div class="col-md-4">
                    <h2 class="text-decoration-underline mt-3 text-center" style="font-size: 2.5rem;">New Project</h2>
                    <ul class="mt-2 ms-5" style="font-size: 2rem;">
                        <li>Up to 5 Pages</li>
                        <li>100% Responsive Design</li>
                        <li>One Contact Form</li>
                        <li>Accessibility</li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <h2 class="text-decoration-underline mt-3 text-center" style="font-size: 2.5rem;">Maintenance</h2>
                    <ul class="mt-2 ms-5" style="font-size: 2rem;">
                        <li>SEO & Content Updates</li>
                        <li>Feature Additions</li>
                        <li>Bug Fixes</li>
                        <li>Support</li>
                    </ul>
                </div>
            </div>
            <div class="btn p-4">
                <button id="RequestQuoteButton" aria-label="" style="box-shadow: 2px 2px 4px #000;">
                    Request a Quote
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="my-4">
    </div>
	<!-- Alerts	-->
	<?php include_once 'alert.php'?>
	<?php include "pricingForm.php"; ?>
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