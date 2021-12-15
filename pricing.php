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
                    <div class="ribbon"><span>Starting At</span></div>
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
                    <div class="ribbon"><span>Starting At</span></div>
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
    <div class="container">
        <div class="contact-parent">
            <div class="contact-child child1">
            </div>

            <div class="contact-child child2">
                <div class="inside-contact">
                    <h2>Please Fill Out The Form</h2>
                    <h3>
                        <span id="confirm">
                    </h3>
                    <form action="">
                        <div class="mb-3">
                            <label for="txt_name" id="name" class="form-label">Full Name</label>
                            <input id="txt_name" type="text" class="name form-control" placeholder="Ragnar Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_email" id="email" class="form-label">Email</label>
                            <input id="txt_email" type="text" class="email form-control" placeholder="ragnarDoe@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Leave a message</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control message"></textarea>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-success mb-3">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<!-- End Form -->
    <a href="#" class="scrollToTop" title="Go Top"><i class="sprite scrollarrow"></i></a>

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