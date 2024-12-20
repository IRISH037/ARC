<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="tryy.css">
    <link rel="stylesheet" href="try.js">
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
 
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="homepage.php" class="navbar-brand">
                <img src="img/logoo.png" alt="Logo" class="navbar-logo"> <!-- Insert your logo file path here -->
                Enchanted Luzon Getaways
            </a>
            <div class="menu-icon" id="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="homepage.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown">Destinations</a>
                    <ul class="dropdown-menu">
                        <li><a href="citytours.php" class="dropdown-item">City Tours</a></li>
                        <li><a href="Populartour.php" class="dropdown-item">Popular Toous</a></li>
                        <li><a href="Adventuretour.php" class="dropdown-item">Adventure Tours</a></li>
                        <li><a href="beaches.php" class="dropdown-item">Beaches</a></li>
                        <li><a href="Alldestination.php" class="dropdown-item">All Destinations</a></li>
                    </ul>
                </li>
                <li><a href="logout.php" class="nav-link">Sign out</a></li>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

    <div class="container-fluid bg-primary py-5 mb-5 hero-headerr">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <div class="aboutluzon">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <div class="aboutpar">
                    <p>Enchanted Luzon Getaways is your ultimate guide to discovering the beauty and wonders of Luzon, from hidden gems to popular tourist destinations. We provide detailed information, curated itineraries, and insider tips to make your travel experience unforgettable. Whether you're seeking adventure, relaxation, or cultural exploration, Enchanted Luzon Getaways helps you plan the perfect trip across Luzon’s breathtaking landscapes.</p></div>
                </div>
                    <div class="adjust">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="login.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About us</li>
                        </ol></div>
                        <style>
                            /* Reset some browser default styles */
.hero-header {
    background: url('img/taalll.jpg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}

.hero-headerr {
    background: url('img/little.jpg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}
.hero-headerr::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Green with 50% opacity */
    z-index: 1; /* Ensure it's above the background but below other content */
}

.hero-headerr > * {
    position: relative; /* Ensure that content inside the header appears above the overlay */
    z-index: 2;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.aboutpic {
    position: relative;
    top: 110px;
}
.navbar-logo{
    width: 70px;
    position: relative;
    top: -10px;
    left: 20px;
}
.cute{
    cursor: pointer;
}
body {
    font-family: Arial, sans-serif;
}

/* Navbar styling */
.navbar {
    background-color: #86B817;
    padding: 10px 10px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    color: white;
    font-size: 24px;
    text-decoration: none;
}

/* Menu icon (hamburger icon) */
.menu-icon {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.menu-icon span {
    background-color: white;
    height: 3px;
    width: 25px;
    margin: 4px;
}

/* Navbar links */
.nav-links {
    display: flex;
    list-style: none;
    position: relative;
    top: 10px;
}

.nav-links li {
    position: relative;
}

.nav-links a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    transition: background 0.3s;
}

.nav-links a:hover {
    background-color: white;
    border-radius: 5px;
}

/* Dropdown menu */
.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #86B817;
    top: 100%;
    left: 0;
    list-style: none;
    padding: 10px 0;
}

.dropdown-menu li a {
    padding: 10px 20px;
    display: block;
}

.dropdown-menu li a:hover {
    background-color: #fdfdfd;
}

/* Responsive menu */
@media (max-width: 768px) {
    .menu-icon {
        display: flex;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        background-color: #333333;
        position: absolute;
        top: 60px;
        right: 20px;
        width: 200px;
    }

    .nav-links li {
        text-align: center;
    }

    .nav-links.show {
        display: flex;
    }
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
    position: relative;
    left: -10px;
}
.slideInDown {
    animation-name: slideInDown;
    position: relative;
    bottom: 150px;
    color: #555;
}
@keyframes slideInDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
.wow {
    visibility: hidden;
}
.fadeInUp {
    animation-name: fadeInUp;
    animation-duration: 1s;
    animation-fill-mode: both;
    visibility: visible;
}
@keyframes fadeInUp {
    from {
        transform: translate3d(0, 100%, 0);
        opacity: 0;
    }
    to {
        transform: translate3d(0, 0, 0);
        opacity: 1;
    }
}
.button{
    background-color: #86B817;
}

.design{
    position: relative;
    top: -90px;
    margin: 10px;
    color: white;
    background-color: #86B817;
    width: 150px;
    height: 40px;
    border-radius: 7px;
}
.h1{
    color: #86B817;
}
.design :hover{
    background-color: white;
}
.owl-carousel, .owl-carousel .owl-item {
    -webkit-tap-highlight-color: transparent;
    position: relative;
    cursor: pointer;
}
.owl-carousel {
    display: none;
    width: 80%;
    z-index: s;
}
.owl-carousel .owl-stage {
    position: relative;
}
.owl-carousel .owl-item {
    float: left;
    min-height: 1px;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
}
.owl-dots {
    text-align: center;
}
.DESTINATIONS {
    position: relative;
    top: 120px;
}

footer {
    background-color: #282828;
    color: #ffffff;
    padding: 40px 0;
  }
  
  .footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .footer-section {
    flex: 1;
    padding: 0 20px;
  }
  
  .footer-section h2 {
    font-size: 18px;
    margin-bottom: 20px;
    color: #f4a261;
  }
  
  .footer-section p {
    line-height: 1.6;
  }
  
  .footer-section ul {
    list-style: none;
    padding: 0;
  }
  
  .footer-section ul li {
    margin-bottom: 10px;
  }
  
  .footer-section ul li a {
    text-decoration: none;
    color: #ffffff;
    transition: color 0.3s;
  }
  
  .footer-section ul li a:hover {
    color: #f4a261;
  }
  
  .footer-bottom {
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid #444444;
    padding-top: 20px;
  }
  
  .footer-bottom p {
    margin: 0;
    font-size: 14px;
  }
   .aboutluzon{
    position: relative;
    top: 20px;
   }
                            .aboutpar{
                                position: relative;
                                bottom: 150px;
                                font-size: large;
                                color: white;
                            }
                            .adjust{
                                position: relative;
                                top: -40px;
                            }
                        </style>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- About Start -->
   <div class="aboutpic">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="coloroff">About Us</h6>

                <h1 class="mb-4">Welcome to <span class=" colorof">Enchanted Luzon Getaways</span></h1>
                <p class="mb-4 colorabout ">Luzon, the largest and most populous island in the Philippines, is a treasure trove of diverse landscapes, rich cultural heritage, and unique experiences. From the bustling metropolis of Manila to the serene mountains of the Cordilleras, Luzon offers a variety of tourist destinations that appeal to travelers of all interests.</p>
                <p class="mb-4 colorabout ">This knowledge-based system provides an in-depth exploration of Luzon's top tourist spots, offering valuable information on historical landmarks, natural wonders, and vibrant local communities. Whether you're looking for adventure, relaxation, or a cultural journey, Luzon promises a memorable and enriching experience.1</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <div class="cute"> <a href="cute.html">
                        <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>City Tour</p>
                    </div></a>
                    <div class="col-sm-6"> <a href="cute.html">
                        <p class="mb-0"><i class="fa fa-arrow-right colorof"></i> Popular City</p>
                    </div></a>
                    <div class="col-sm-6"><a href="cute.html">
                        <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>Adventure City</p>
                    </div></a>
                    <div class="col-sm-6"><a href="cute.html">
                        <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>Beaches</p>
                    </div></a>
                    <div class="col-sm-6"><a href="cute.html">
                        <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>All Destinations</p>
                    </div></a>
                    
                </div> </div>
                <button class="pretty-button button1" href="cute.html">Read More</button>
                <style>

                    .pretty-button {
  border: none; /* No border */
  color: white; /* Text color */
  padding: 15px 0; /* Vertical padding */
  width: 200px; /* Fixed width for even sizes */
  font-size: 18px; /* Font size */
  border-radius: 25px; /* Rounded corners */
  cursor: pointer; /* Pointer cursor on hover */
  transition: all 0.3s ease; 
}

/* Button 1 */
.button1 {
  background-color: #86B817; 
}

.button1:hover {
  background-color: #699804; /* Darker shade on hover */
  transform: translateY(-3px); /* Lift the button */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
  
}
.colorof{
    color: #86B817;
}
                </style>
            </div>       
        </div>
    </div>
</div>

<!-- Navbar & Hero End -->
<!-- Navbar & Hero End -->

     <!-- Mission, Vision, Values Section -->
     <style>

        .mission-values {
                    display: flex;
                    justify-content: space-around;
                    margin-top: 40px;
                }
                .mission-values .box {
                    background-color: #edf1e5;
                    width: 30%;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
                .mission-values h3 {
                    color: #007BFF;
                    font-size: 1.8em;
                    margin-bottom: 10px;
                }
                .mission-values p {
                    font-size: 1.1em;
                    color: black;
                }
                .box{
                    position: relative;
                    top: 130px;
                    color: antiquewhite;
                }

                h3{
                    color: #86B817;
                }
        
        </style>
     <div class="mission-values">
        <div class="box">
            <h3>Our Mission</h3>
            <p>To provide travelers with detailed knowledge about the top tourist spots in Luzon, fostering a deep appreciation for the region’s history, culture, and natural beauty.</p>
        </div>
        <div class="box">
            <h3>Our Vision</h3>
            <p>To be the leading source of information for exploring Luzon’s best destinations, empowering tourists to experience the richness of the region and make informed travel decisions.</p>
        </div>
        <div class="box">
            <h3>Our Values</h3>
            <p>We believe in sharing authentic, reliable, and comprehensive information that highlights Luzon’s unique charm. Our commitment to responsible tourism ensures that we promote sustainable travel practices that protect the environment and support local communities.</p>
        </div>
    </div>
</div>
<div class="footerdegg">
    <footer>
        <div class="footer-container">
          <div class="footer-section about-us">
            <h4>About Enchanted Luzon Getaways</h4>
            <p>We offer curated experiences and detailed guides to help you explore the hidden gems and popular tourist spots across Luzon. Our goal is to provide travelers with the best resources to enjoy their adventures.</p>
          </div>
          
          <div class="footer-section quick-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">City Tours</a></li>
              <li><a href="#">Adventure Tours</a></li>
              <li><a href="#">Popular Tours</a></li>
              <li><a href="#">Beach Tours</a></li>
            </ul>
          </div>
          
          <div class="footer-section contact-us">
            <h4>Contact Information</h4>
            <ul>
              <li><i class="fas fa-envelope"></i> info@enchantedluzon.com</li>
              <li><i class="fas fa-phone"></i> +63 912 345 6789</li>
              <li><i class="fas fa-map-marker-alt"></i> Manila, Philippines</li>
            </ul>
          </div>
          
          <div class="footer-section social-media">
            <h4>Follow Us</h4>
            <div class="social-icons">
              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        
        <div class="footer-bottom">
          <p>&copy; 2024 Enchanted Luzon Getaways | All Rights Reserved</p>
        </div>
      </footer></div>
      <style>
        /* Footer styling */
.footerdegg{
  position: relative;
  top: 200px;
}

footer {
  background-color: #2b2b2b;
  color: #ffffff;
  padding: 40px 0;
  font-family: 'Arial', sans-serif;
  height:470px;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: flex-start;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  
}

.footer-section {
  flex: 1;
  min-width: 250px;
  margin: 20px;
}

.footer-section h4 {
  color: #f9a825;
  font-size: 18px;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.footer-section p, 
.footer-section li, 
.footer-section a {
  font-size: 15px;
  color: #cccccc;
  line-height: 1.6;
}

.footer-section a {
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section a:hover {
  color: #f9a825;
}

/* About Us section */
.about-us p {
  max-width: 400px;
}

/* Quick Links section */
.quick-links ul {
  list-style: none;
  padding: 0;
}

.quick-links ul li {
  margin-bottom: 10px;
}

.quick-links ul li a {
  color: #ffffff;
  font-size: 15px;
  transition: color 0.3s ease;
}

.quick-links ul li a:hover {
  color: #f9a825;
}

/* Contact Information section */
.contact-us ul {
  list-style: none;
  padding: 0;
}

.contact-us ul li {
  margin-bottom: 10px;
  font-size: 15px;
}

.contact-us ul li i {
  margin-right: 8px;
  color: #f9a825;
}

/* Social Media Icons */
.social-icons {
  display: flex;
  gap: 15px;
  margin-top: 10px;
}

.social-icons a {
  color: #ffffff;
  font-size: 20px;
  border: 1px solid #ffffff;
  border-radius: 50%;
  padding: 10px;
  transition: all 0.3s ease;
}

.social-icons a:hover {
  background-color: #f9a825;
  border-color: #f9a825;
}

/* Footer bottom */
.footer-bottom {
  margin-top: 30px;
  border-top: 1px solid #444;
  padding: 15px;
  text-align: center;
}

.footer-bottom p {
  margin: 0;
  font-size: 14px;
  color: #cccccc;
}

/* Responsive styling */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
  }

  .footer-section {
    margin-bottom: 30px;
  }
}

      </style>

<!-- Bootstrap JS & Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>


</body>
</html>