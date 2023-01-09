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
	<title>Aevi Web | About</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <!-- CDN Fonts   -->
    <link href="https://fonts.cdnfonts.com/css/laca-text" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/about.css" type="text/css">
	<link rel="stylesheet" href="css/particles.css" type="text/css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
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
	<!-- The navigation bar -->
	<?php include_once 'navigation.php' ?>
    <!-- Particles -->
    <?php include_once 'particles.php' ?>
	<!-- About Header -->

<!-- Top Btn -->
    <button class="btn btn-dark" id="myButton" onclick="lightMode()">Light Mode</button>
	<!-- About Content -->
	<div class="container container-about">
        <h1 class="display-4 text-center h-1 mt-3">About Aevi Web</h1>
        <hr class="my-4">
		<div class="row row-content">
			<p class="display-6 text-center text-white col-lg-6 col-sm-12 lead">
				At Aevi Web, we are dedicated to helping our clients bring their website dreams to life.
				We offer a range of services, including website design, development, and maintenance, as well as consulting services to help our clients achieve their goals.
				Whether you need updates to an existing project or want to start from scratch, we have the skills and expertise to help.
				We are proficient in custom website development, as well as WordPress, Squarespace, WIX, and other content management systems.
				Let us guide you on your web journey.
	            <br>
				<br>
                <strong class="h1 mt-0">Creating</strong> | <strong class="h1 mt-0">Maintaining</strong> | <strong class="h1 mt-0">Consulting</strong>
            </p>
	        <div class="col-sm d-none d-lg-block">
		        <img src="images/shenandoah-national-park.png"  class="animate__animated animate__slideInRight img-fluid" height="750" width="750" alt="Shenandoah National Park">
	        </div>
            <p class="p-3 display-6 text-center text-white col-12">
	            We are a team of experienced developers based in Shenandoah, Virginia.
	            We are passionate about creating web solutions, helping others, and protecting the environment.
	            With Aevi Web, you can not only get a top-quality website, but you can also contribute to making the world a better place.
	            That's because we donate 12% of all sales to environmental causes.
            </p>
	    </div>
        <hr class="my-4">
		<!-- Founders -->
		<div class="row row-content1">
            <h2 class="text-center h-1 mt-0">Our Founders</h2>
           <div class="container mt-5">
               <div class="card rounded mb-5 border-0" style="max-width: 750px;">
                   <div class="row g-0">
                       <div class="col-md-4">
                           <img src="images/Creed.JPG" class="img-fluid rounded-start" alt="Creed Polen CEO">
                       </div>
                       <div class="col-md-8">
                           <div class="card-body">
                               <h2 class="card-title mt-3 text-decoration-underline" style="font-size: 2.9rem;">Creed Polen | Chief Executive Officer</h2>
                               <p class="card-text mt-4" style="font-size: 1.5rem;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <i class="fa-brands fa-linkedin" style="font-size: 3rem; color: steelblue"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="card rounded border-0 mb-3 float-end" style="max-width: 750px;">
                   <div class="row g-0">
                       <div class="col-md-8">
                           <div class="card-body">
                               <h2 class="card-title mt-3 text-decoration-underline" style="font-size: 2.9rem;">Chris Polen | Chief Design Officer</h2>
                               <p class="card-text mt-4" style="font-size: 1.5rem;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <i class="fa-brands fa-linkedin" style="font-size: 3rem; color: steelblue"></i>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <img src="images/christopher.jpg" class="img-fluid rounded-start" alt="Chris Polen CDO">
                       </div>
                   </div>
               </div>
           </div>
		</div>
	</div>
    <!-- Footer -->
	<?php include_once 'footer.php' ?>
    <!-- JQuery	-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS. -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Local JS -->
	<script src="js/about.js" type="text/javascript"></script>
</body>
</html>