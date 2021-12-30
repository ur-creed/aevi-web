<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta FIRST -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aevi Web | About</title>
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
    <link rel="stylesheet" href="css/about.css" type="text/css">
</head>
<body>
	<!-- The navigation bar -->
	<?php include_once 'navigation.php' ?>
    <!-- Particles -->
    <?php include_once 'particles.php' ?>
<!-- About Header -->
	<div class="container container-header bg-transparent p-5">
		<h1 class="display-4 text-center text-black h-1 mt-0">A Little About Who We Are</h1>
		<hr class="my-4">
	</div>
<!-- About Content -->
	<div class="container container-about">
		<div class="row row-content">
<!--            <h1 class="display-3 h1 mt-0">A Little About Who We Are</h1>-->
			<p class="display-6 text-center text-white col-lg-6 col-sm-12 lead">
				At Aevi Web, we believe every human being deserves to have their website dream come to life!
				Whether you have an existing idea or project in place and need updates or want a brand spanking new project built, we can help with that!
				We work with custom websites, WordPress, Squarespace, WIX, or just about any other CMS (Content Management System).
				Let us be your guide on your web journey!
	            <br>
				<br>
	            <strong class="h1 mt-0">Creating</strong> | <strong class="h1 mt-0">Maintaining</strong> | <strong class="h1 mt-0">Consulting</strong>
            </p>
	        <div class="col-sm d-none d-lg-block">
	                <img src="images/shenandoah-national-park.png"  class="animate__animated animate__slideInRight img-fluid" height="750" width="750" alt="Shenandoah National Park">
	        </div>
            <p class="p-3 display-6 text-center text-white col-12">
	            We are experienced developers based out of Shenandoah, Virginia, with a fiery passion for creating web solutions, helping others, and saving the Earth.
	            Help us change the world for the better, one website at a time, plus 10% of all sales go to help protect our beautiful planet!
            </p>
	    </div>
		<!-- Founders -->
		<div class="row row-content1">
            <h1 class="display-3 text-black text-center h1 mt-0 mb-4">Our Founders</h1>
            <div class="container">
                <!--  image left  -->
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/creed.png" alt="" class="img-fluid w-100" />
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="row align-items-center h-100">
                            <div class="col">
                                <h1 class="display-3 text-black">Creed Polen <span class="divider">|</span> Chief Executive Officer</h1>
<!--                                <p class="lead text-white founderP">Some Info will go here............alksdjflk;djsfa l;fdjasdk;fjskfdkfkdsfja;dksfj-->
<!--                                    al;kdjas;kdfjasdk;fljasdkfdf;f;fjfkdfj;fsd;f;l-->
<!--                                    <br /><br />-->
<!--                                </p>-->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->

                <!--  image right  -->
                <div class="row">
                    <div class="col-md-6 order-md-1">
                        <img src="images/chris.png" alt="" class="img-fluid w-100" />
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 order-md-6">
                        <div class="row align-items-center h-100">
                            <div class="col">
                                <h1 class="display-3 text-black">Chris Polen <span class="divider">|</span> Chief Design Officer</h1>
<!--                                <p class="lead text-white founderP">Some Info will go here............alksdjflk;djsfa l;fdjasdk;fjskfdkfkdsfja;dksfj-->
<!--                                    al;kdjas;kdfjasdk;fljasdkfdf;f;fjfkdfj;fsd;f;l-->
<!--                                    <br /><br />-->
<!--                                </p>-->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
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