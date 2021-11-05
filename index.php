
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta 1st!! -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>AEVI WEB</title>
	
	
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Local CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css">
	
	<!-- JavaScript -->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="https://kit.fontawesome.com/a448bf0070.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <!-- Navigation Bar START -->
        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    AEVI WEB
                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
        
            <div class="nav-links ms-auto">
                <a href="#home" target="_blank">Home</a>
                <a href="#about" target="_blank">About Us</a>
                <a href="#packages" target="_blank">Packages</a>
                <a href="#portfolio" target="_blank">Portfolio</a>
                <a href="#design" target="_blank">Design</a>
            </div>
        </div>
    <!-- NavBar END -->
       <div id="image" class="animate__animated animate__backInLeft">
           <img src="imgs/AeviWebNorse.png" alt="Aevi Web" class="AeviWeb">
       </div>
        </header>

    <main>
        <section class="aboutUs">
                <h1 class="title">Who We Are</h1>

            <h3 class="title2">Our Work</h3>
            <div class="container" id="box1">
                <div class="row">
                    <div class="col align-self-start">
                <p>
                    At Aevi Web LLC, we believe everyone deserves to have their passion brought to life. We build fully custom solutions
                    for all your website needs. Whether it's fully custom built or using a CMS (Content Management System).
                    We are here to be the guide for your web presence journey. Creating & Consulting
                    with you every step of the way until your web dream becomes a reality and beyond.
                </p>
                    </div>
                </div>
            </div>

            <h3 class="title3">Our story</h3>
            <div class="container" id="box2">
                <p>
                    We are experienced developers based out of the Shenandoah Valley, Virginia with a passion for making everyone's website dreams come true.
                    This fueled us to harness that fire by changing the world for the better, one website at a time.
                </p>
            </div>
        </section>

        <section class="Packages">
            <h1 class="title">Packages</h1>
            <div class="container">
                <div class="card">
                    <span></span>
                    <div class="content">
                        <h2>The Basics</h2>
                        <p>New to the website world and want to grow the reach of your small business or passion? This package is great for the beginners out there! Allow people to find and connect with you much easier.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>

                <div class="card">
                    <span></span>
                    <div class="content">
                        <h2>The Pro</h2>
                        <p>For the more advanced passion that </p>
                        <a href="#">Learn more</a>
                    </div>
                </div>

                <div class="card">
                    <span></span>
                    <div class="content">
                        <h2>Maintain</h2>
                        <p>Is your website in need of updates or new features? This package is perfect for that! We will work with you to make sure you get what you need and not sell you more than that.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="contactUs">
            <h1 class="title">Contact Us</h1>
            <div class="container">
                <form id="contact" action="" method="post">
                    <h4>Send us a quick message telling us passion you want to bring to life!</h4>
                    <fieldset>
                        <input placeholder="John Doe" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="john@email.com" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
                    </fieldset>
                    <fieldset>
                        <select name="package_select" id="PackageSelect">
                            <option value="">Choose a Package</option>
                            <option value="basics">The Basics</option>
                            <option value="pro">The Pro</option>
                            <option value="Maintenance">Maintain</option>
                        </select>
                    </fieldset>
                    <fieldset>
	                    <label for=""></label>
                        <textarea aria-label="" placeholder="Tell us about your passion!" tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                </form>
            </div>
        </section>
      
        <section class="Squad">
            <h1 class="title">Founders</h1>
            <div class="container">
                <div class="circle1">
                    <div class="aligner">
                        Creed Polen | Chief Executive Officer
                    </div>
                </div>
                <div class="circle2">
                    <div class="aligner">
                    </div>
                </div>
	            <div class="circle3">
	                <div class="aligner">
	                    Chris Polen | Chief Design Officer
	                </div>
	            </div>
            </div>
        </section>
    </main>
    
    <!-- Site footer -->
    <footer class="site-footer">
        <div class = "container">
            
            <div class="grid-container">
                <div class="grid-item">
                    <img src = "imgs/logo_name.png" class = "logo-img" alt="aevi logo">
                </div>
                
                <div class="grid-item inner-grid-container">
                    
                    <div class="grid-item"><a href="">About Us</a></div>
                    <div class="grid-item"><a href="">Packages</a></div>
                    <div class="grid-item"><a href="">Contact us</a></div>
                    <div class="grid-item"><a href="">Founders</a></div>
                
                
                </div>
                
                <div class="grid-item">
                    <div class = "social-buttons">
                        <a href= ""><i class="fab fa-facebook circle-icon"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            
            <p>Copyright &copy; 2021 | Aevi Web LLC | All rights reserved</p>
        
        </div>
    </footer>
</body>
</html>





