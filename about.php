<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta FIRST -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <!-- Local JS -->
    <script src="js/about.js" type="text/javascript"></script>
    <title>Aevi Web | About Us</title>
</head>
<body>
	<!-- The navigation bar -->
	<?php include_once 'navigation.php' ?>
    <div id="contactModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="contentinfo">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="h1 modal-title">Contact Us</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="John">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Smith">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="JohnSmith@email.com">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else!</div>
                        </div>
                        <div class="mb-3">
                            <label for="textarea" class="form-label">Send us a message!</label>
                            <textarea class="form-control" name="textarea" id="textArea" cols="30" rows="10"></textarea>
                        </div>
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>

	<div class="container container-header bg-white p-5">
		<h1 class="display-4 mt-0">About Us</h1>
		<hr class="my-4">
		<a data-bs-toggle="modal" data-bs-target="#contactModal" type="button" class="btn btn-primary btn-lg" id="contactModal" role="button">Contact Us</a>
	</div>
	<div class="container container-about">
		<div class="row row-content">
            <h1>A Little About Who We Are</h1>
			<p class="display-6 text-center text-white col-lg-6 col-sm-12 lead">
				At Aevi Web, we believe every human being deserves to have their website dream come to life!
				Whether you have an existing idea or project in place and need updates or want a brand spanking new project built, we can help with that!
				We work with custom websites, WordPress, Squarespace, Magento, or use just about any other CMS (Content Management System).
				Let us be your guide on your web journey!
	            <br>
				<br>
	            <strong class="h1 mt-0">Creating</strong> | <strong class="h1 mt-0">Maintaining</strong> | <strong class="h1 mt-0">Consulting</strong>
            </p>
		
			<!--			-->
	        <div class="col-sm d-none d-lg-block">
	                <img src="images/shenandoah-national-park.png"  class="animate__animated animate__slideInRight img-fluid" height="750" width="750" alt="Shenandoah National Park">
	        </div>

            <p class="p-3 display-6 text-center text-white col-12">
	            We are experienced developers based out of Shenandoah, Virginia, with a fiery passion for creating web solutions, helping others, and saving the Earth.
	            Help us change the world for the better, one website at a time, plus 10% of all sales go to help protect our beautiful planet.
            </p>
	    </div>

		<div class="row row-content">
            <h1 class="mt-0">Our Founders</h1>
            <div class="container">
                <!--  image left  -->
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/imagesymbol.png" alt="" class="w-100" />
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="row align-items-center h-100">
                            <div class="col">
                                <h1 class="display-3">Creed Polen | Chief Executive Officer</h1>
                                <p class="lead">Some Info will go here............alksdjflk;djsfa l;fdjasdk;fjskfdkfkdsfja;dksfj
                                    al;kdjas;kdfjasdk;fljasdkfdf;f;fjfkdfj;fsd;f;l
                                    <br /><br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->

                <!--  image right  -->
                <div class="row">
                    <div class="col-md-6 order-md-1">
                        <img src="images/imagesymbol.png" alt="" class="w-100" />
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 order-md-6">
                        <div class="row align-items-center h-100">
                            <div class="col">
                                <h1 class="display-3">Chris Polen | Chief Design Officer</h1>
                                <p class="lead">Some Info will go here............alksdjflk;djsfa l;fdjasdk;fjskfdkfkdsfja;dksfj
                                    al;kdjas;kdfjasdk;fljasdkfdf;f;fjfkdfj;fsd;f;l
                                    <br /><br />
                                </p>
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
	<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>