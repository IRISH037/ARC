<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Destinations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="try.css">
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
                        <li><a href="Populartour.php" class="dropdown-item">Popular Tours</a></li>
                        <li><a href="Adventuretour.php" class="dropdown-item">Adventure Tours</a></li>
                        <li><a href="beaches.php" class="dropdown-item">Beach Tours</a></li>
                        <li><a href="Alldestination.php" class="dropdown-item">All Destinations</a></li>
                    </ul>
                </li>
                <li><a href="logout.php" class="nav-link">Sign out</a></li>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

    <div class="container-fluid bg-primary py-5 mb-5 hero-headerrr">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <div class="aboutluzon">
                    <h1 class="display-3 text-white animated slideInDown">All Destinations</h1>
                    <div class="aboutpar">
                    <p>Enchanted Luzon Getaways is your ultimate guide to discovering the beauty and wonders of Luzon, from hidden gems to popular tourist destinations. We provide detailed information, curated itineraries, and insider tips to make your travel experience unforgettable. Whether you're seeking adventure, relaxation, or cultural exploration, Enchanted Luzon Getaways helps you plan the perfect trip across Luzon’s breathtaking landscapes.</p></div>
                </div>
                    <div class="adjust">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">All Destinations</li>
                        </ol></div>
                        <style>
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

                            .hero-header {
    background: url('img/taalll.jpg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}

.hero-headerrr {
    background: url('img/destination-2.jpg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}
.hero-headerrr::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Green with 50% opacity */
    z-index: 1; /* Ensure it's above the background but below other content */
}

.hero-headerrr > * {
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

                        </style>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
     <div class="alldestinations">
    <!-- Navigation Buttons for Destination Categories -->
    <div class="category-buttons">
      <button class="tab-link active" onclick="showCategory('alldestinations')">All Destinations</button>
      <button class="tab-link" onclick="showCategory('city-tours')">City Tours</button>
      <button class="tab-link" onclick="showCategory('beaches')">Beach Tours</button>
      <button class="tab-link" onclick="showCategory('adventures')">Adventure Tours</button>
      <button class="tab-link" onclick="showCategory('popular')">Popular Tours</button>
    </div>


    <!-- All Destinations Tours Section -->
   
    <div id="alldestinations" class="tab-content active">
        <h3>Explore Everywhere</h3>
        <div class="destination-grid" >
          <div class="destination-card" onclick="window.location.href='ampere.php'">
            <img src="img/ampere1.jpg" alt="Ampere Beach">
            <h4>Ampere Beach</h4>
            <p> A picturesque stretch of coastline renowned for its unique pebble-lined shores and the striking contrast of its dark sand.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='baguio.php'" >
            <img src="img/baguio2.jpg" alt="Baguio City">
            <h4>Baguio City</h4>
            <p>A mountain town of universities and resorts. Called the “City of Pines,” it’s particularly popular in summer due to unusually cooler weather.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='basco.php'">
            <img src="img/basco1.jpg" alt="Basco">
            <h4>Basco Lighthouse</h4>
            <p>Located in Naidi Hills where the old telegraph facility was during the American era. The lighthouse is white in color and crowned with a red lantern room.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='binondo.php'">
            <img src="img/binondo1.jpg" alt="Binondo">
            <h4>Binondo China Town</h4>
            <p>The Chinatown area of Manila. The name comes from the Tagalog word binondoc, which means 'mountainous' due to its hilly landscape.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='blossom.php'">
            <img src="img/blossom.jpg" alt="Blossom">
            <h4>Blossom Flower Farm</h4>
            <p>A stunning two- hectare farm situated in Atok, Benguet. With its picturesque mountain backdrop.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='bonuan.php'">
            <img src="img/bonuan.jpg" alt="Bonuan">
            <h4>Bonuan Beach</h4>
            <p>Commonly known as Tondaligan Beach is located at Bonuan Tondaligan, Dagupan City. It is one of the most popular beaches here in Pangasinan.</p>
          </div>  
          <div class="destination-card" onclick="window.location.href='calle.php'">
            <img src="img/calle.jpg" alt="Calle Vigan">
            <h4>Calle Vigan</h4>
            <p>Is one of the most beautiful streets in the Philippines. It boasts centuries-old stone houses, lovely tungsten lamps, and antique cobblestone.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='caving.php'">
            <img src="img/caving3.jpg" alt="Caving In Sagada">
            <h4>Caving In Sagada</h4>
            <p>It is also known as the Big Cave of Sagada and has a depth of more than 500 feet with extensive underground network, chambers, and unexplored tunnels.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='hills.php'">
            <img src="img/hillss.jpg" alt="Chocolate Hills">
            <h4>Chocolate Hills</h4>
            <p>A geological formation in Bohol Province, Philippines. There are at least 1,260 hills (and maybe more) spread over an area of more than 50 square kilometres (20 sq mi).</p>
          </div>
          <div class="destination-card" onclick="window.location.href='dino.php'">
            <img src="img/dino.jpg" alt="Dinosaur Island">
            <h4>Dinosaur Island</h4>
            <p>Dino Island is a captivating prehistoric theme park featuring life-sized dinosaur replicas, interactive exhibits, and lush landscapes. It offers an adventurous and educational experience perfect for families and dinosaur lovers.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='museum.php'">
            <img src="img/vigan1.jpg" alt="Ilocos Sur Museum">
            <h4>Ilocos Sur Museum</h4>
            <p>The Ilocos Sur Museum showcases the region's rich history and culture, featuring artifacts, traditional crafts, and exhibits that highlight local heritage and the evolution of Ilocano life.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='hitorical.php'">
            <img src="img/intramuros.PNG" alt="Intramuros">
            <h4>Intramuros</h4>
            <p>Intramuros is the historic walled city of Manila, rich in colonial architecture and cultural heritage. It features landmarks like Fort Santiago, San Agustin Church, and vibrant plazas, reflecting the Philippines' Spanish history.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='hopping.php'">
            <img src="img/hopping2.jpg" alt="Island Hopping">
            <h4>Island Hopping</h4>
            <p>Calatagan, Batangas is a picturesque coastal town known for its beautiful beaches, clear waters, and vibrant marine life. It’s a popular destination for water sports, relaxation, and stunning sunset views.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='kayak.php'">
            <img src="img/kayak1.jpg" alt="Kayaking in El Nido">
            <h4>Kayaking in El Nido</h4>
            <p>El Nido, Palawan, is renowned for its breathtaking limestone cliffs, turquoise waters, and vibrant coral reefs. It's a paradise for island hopping, snorkeling, and experiencing stunning natural beauty in the Philippines..</p>
          </div>
          <div class="destination-card" onclick="window.location.href='laiya.php'">
            <img src="img/laiya.jpg" alt="Laiya Beach">
            <h4>Laiya Beach</h4>
            <p>Laiya, located in Batangas, is known for its beautiful white-sand beaches, crystal-clear waters, and lush surroundings. It's a popular destination for relaxation, water sports, and vibrant beachfront resorts.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='little.php'">
            <img src="img/little.jpg" alt="Little Boracay">
            <h4>Little Boracay</h4>
            <p>Little Boracay, located in San Juan, Batangas, features stunning white sand beaches and clear blue waters, reminiscent of Boracay's famous shores. It's a popular getaway for relaxation, swimming, and beach activities.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='mahaba.php'">
            <img src="img/mahaba.jpg" alt="Mahabang Buhangin Beach">
            <h4>Mahabang Buhangin Beach</h4>
            <p>Mahabang Buhangin Beach, situated in Calatagan, Batangas, boasts a long stretch of powdery white sand and clear waters. It's an ideal spot for swimming, sunbathing, and enjoying breathtaking sunsets in a tranquil setting.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='mop.php'">
            <img src="img/mop1.jpg" alt="Manila Ocean Park">
            <h4>Manila Ocean Park</h4>
            <p>Manila Ocean Park is an oceanarium and marine-themed park in Manila, featuring diverse marine life exhibits, interactive experiences, and educational shows. It offers visitors a chance to explore the wonders of the sea while promoting marine conservation.p>
          </div>
          <div class="destination-card" onclick="window.location.href='mayon.php'">
            <img src="img/mayon.jpg" alt="Mayon Volcano">
            <h4>Mayon Volcano</h4>
            <p>Mayon Volcano, located in Albay, Philippines, is famous for its perfect cone shape and stunning views. It's an active volcano, attracting tourists for hiking, photography, and experiencing the region's natural beauty.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='pulag.php'">
            <img src="img/pulag1.jpg" alt="Mount Pulag">
            <h4>Mount Pulag</h4>
            <p>Mount Pulag, the highest peak in Luzon, Philippines, is known for its stunning sea of clouds and diverse flora and fauna. It's a popular trekking destination, offering breathtaking views and cooler temperatures.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='nacpan.php'">
            <img src="img/nacpannn.jpg" alt="Nacpan Beach">
            <h4>Nacpan Beach in El Nido</h4>
            <p>Nacpan Beach, located in El Nido, Palawan, features pristine golden sands and crystal-clear waters. It’s perfect for sunbathing, swimming, and enjoying breathtaking sunsets, making it a must-visit destination..</p>
          </div>
          <div class="destination-card" onclick="window.location.href='patar.php'">
            <img src="img/patarr.jpg" alt="Patar Beach">
            <h4>Patar Beach</h4>
            <p>Patar Beach, situated in Bolinao, Pangasinan, is known for its stunning white sands and crystal-clear waters. It's a popular destination for swimming, sunbathing, and exploring nearby rock formations and scenic views.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='saud.php'">
            <img src="img/saud.jpg" alt="Saud Beach">
            <h4>Saud Beach</h4>
            <p>Saud Beach, located in Pagudpud, Ilocos Norte, features pristine white sands and turquoise waters. It's a serene destination perfect for swimming, relaxing, and enjoying breathtaking sunsets along the northern coast of Luzon.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='scuba.php'">
            <img src="img/scuba1.jpg" alt="Scuba Diving in Puerto Galera">
            <h4>Scuba Diving in Puerto Galera</h4>
            <p>Puerto Galera, located in Oriental Mindoro, is renowned for its stunning beaches, vibrant marine life, and excellent diving spots. It's a popular destination for water sports, relaxation, and nightlife, attracting tourists year-round.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='skyranch.php'">
            <img src="img/skyranch1.jpg" alt="Skyranch Pampanga">
            <h4>Skyranch in Pampanga</h4>
            <p>Sky Ranch Pampanga is a family-friendly amusement park featuring thrilling rides, attractions, and beautiful views of the surrounding landscape. It offers a fun day out with entertainment, dining, and recreational activities.</p>
          </div><div class="destination-card" onclick="window.location.href='subic.php'">
            <img src="img/subic.jpg" alt="Subic Beach">
            <h4>Subic Beach</h4>
            <p>Subic Beach, located in Zambales, is known for its powdery white sands and clear blue waters. It's a tranquil destination perfect for swimming, sunbathing, and enjoying stunning sunsets amidst lush surroundings.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='surfing.php'">
            <img src="img/surfing1.jpg" alt="Surfing in La Union">
            <h4>Surfing in La Union</h4>
            <p>La Union is a popular destination in the Philippines, known for its beautiful beaches, surfing spots, and vibrant culture. It offers a mix of relaxation, adventure, and local culinary delights.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='taal.php'">
            <img src="img/taal.jpg" alt="Taal Volcano">
            <h4>Taal Volcano</h4>
            <p>Taal Volcano, located on Luzon Island, is one of the Philippines' most active volcanoes, featuring a stunning crater lake. Its scenic views and unique geological features attract tourists and adventure seekers.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='trekking.php'">
            <img src="img/TB2.jpg" alt="Trekking in Banaue">
            <h4>Trekking in Banaue</h4>
            <p>Banaue, in the Philippines, is famous for its breathtaking rice terraces, a UNESCO World Heritage site. It offers rich cultural experiences, traditional villages, and stunning mountain views, attracting nature lovers and adventurers.</p>
          </div>
          <div class="destination-card" onclick="window.location.href='zip.php'">
            <img src="img/zip1.jpg" alt="Zip-Lining in Tanay Rizal">
            <h4>Zip-Lining in Tanay Rizal</h4>
            <p>The Taytay Rizal Zip Line offers thrilling rides across stunning landscapes, providing breathtaking views of the surrounding mountains and rivers. It's a popular adventure destination for adrenaline seekers and nature lovers alike.</p>
          </div>
        </div>
      </div>

    
      
  

    <!-- City Tours Section -->
   
    <div id="city-tours" class="tab-content">
      <h3>Urban Adventures</h3>
      <div class="destination-grid">
        <div class="destination-card">
          <img src="images/manila.jpg" alt="Manila City">
          <h4>Manila Historical Tour</h4>
          <p>Explore Manila's rich colonial history with visits to Intramuros, Rizal Park, and Fort Santiago.</p>
        </div>
        <div class="destination-card">
          <img src="images/vigan.jpg" alt="Vigan City">
          <h4>Vigan Heritage Walk</h4>
          <p>Stroll down the cobblestone streets of this UNESCO World Heritage Site, known for its preserved Spanish architecture.</p>
        </div>
        <div class="destination-card">
          <img src="images/baguio.jpg" alt="Baguio City">
          <h4>Baguio City Exploration</h4>
          <p>Discover the cool mountain air of Baguio with stops at Burnham Park, Mines View, and the local strawberry farms.</p>
        </div>
      </div>
    </div>

    <!-- Beaches Section -->
    <div id="beaches" class="tab-content">
      <h3>Coastal Escapes</h3>
      <div class="destination-grid">
        <div class="destination-card">
          <img src="img/ampere.jpg" alt="Pagudpud Beach">
          <h4>Pagudpud's White Sand Beaches</h4>
          <p>Relax in the serene waters of Pagudpud, famous for its crystal-clear waters and white sandy shores.</p>
        </div>
        <div class="destination-card">
          <img src="img/hopping.jpg" alt="El Nido">
          <h4>El Nido's Island Hopping</h4>
          <p>Discover the beauty of El Nido's lagoons, hidden beaches, and vibrant coral reefs with island-hopping tours.</p>
        </div>
        <div class="destination-card">
          <img src="img/nacpannn.jpg" alt="La Union">
          <h4>La Union Surfing Shores</h4>
          <p>Catch the waves in La Union, known as one of the top surfing destinations in the Philippines.</p>
        </div>
      </div>
    </div>

    <!-- Popular Section -->
    <div id="popular" class="tab-content">
        <h3>Explore Destinations</h3>
        <div class="destination-grid">
          <div class="destination-card">
            <img src="img/ampere.jpg" alt="Pagudpud Beach">
            <h4>Pagudpud's White Sand Beaches</h4>
            <p>Relax in the serene waters of Pagudpud, famous for its crystal-clear waters and white sandy shores.</p>
          </div>
          <div class="destination-card">
            <img src="img/hopping.jpg" alt="El Nido">
            <h4>El Nido's Island Hopping</h4>
            <p>Discover the beauty of El Nido's lagoons, hidden beaches, and vibrant coral reefs with island-hopping tours.</p>
          </div>
          <div class="destination-card">
            <img src="img/nacpannn.jpg" alt="La Union">
            <h4>La Union Surfing Shores</h4>
            <p>Catch the waves in La Union, known as one of the top surfing destinations in the Philippines.</p>
          </div>
        </div>
      </div>
  

    <!-- Adventure Section -->
    <div id="adventures" class="tab-content">
      <h3>Thrilling Expeditions</h3>
      <div class="destination-grid">
        <div class="destination-card">
          <img src="images/mt-pulag.jpg" alt="Mt. Pulag">
          <h4>Mt. Pulag Hiking Adventure</h4>
          <p>Climb the tallest peak in Luzon and witness the breathtaking sea of clouds at sunrise.</p>
        </div>
        <div class="destination-card">
          <img src="images/siargao.jpg" alt="Siargao Island">
          <h4>Siargao Island Surfing</h4>
          <p>Experience world-class surfing in Siargao, the Philippines' top destination for thrilling wave action.</p>
        </div>
        <div class="destination-card">
          <img src="images/pagsanjan.jpg" alt="Pagsanjan Falls">
          <h4>Pagsanjan Falls River Rafting</h4>
          <p>Take a thrilling boat ride through the rapids to reach the majestic Pagsanjan Falls.</p>
        </div>
      </div>
    </div></div>
  </section>
  <style>
.alldestinations{
    position: relative;
    top: 100px;
}
body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f9;
  padding: 0;
  margin: 0;
  text-align: center;
}

h2 {
  color: #2b2b2b;
  font-size: 32px;
  margin-top: 20px;
}

.category-buttons {
  margin-bottom: 30px;
}

.tab-link {
  background-color: #86B817;
  border: none;
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin: 5px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.tab-link:hover {
  background-color: #5d8508;
}

.tab-link.active {
  background-color: #2b2b2b;
}

.tab-content {
  display: none;
  padding: 20px;
}

.tab-content.active {
  display: block;
}

.destination-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 20px;
  padding: 20px 0;
}

.destination-card {
  background-color: #ffffff;
  width: 300px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: left;
  cursor: pointer;
}

.destination-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.destination-card h4 {
  font-size: 20px;
  color: #2b2b2b;
  margin: 15px 10px 5px;
}

.destination-card p {
  color: #666666;
  font-size: 15px;
  padding: 0 10px 15px;
  line-height: 1.6;
}

/* Footer styling */
footer {
  background-color: #2b2b2b;
  color: white;
  padding: 40px 0;
}

@media (max-width: 768px) {
  .destination-grid {
    flex-direction: column;
    align-items: center;
  }
}

  </style>
  <script>
    function showCategory(category) {
  const contents = document.querySelectorAll('.tab-content');
  const buttons = document.querySelectorAll('.tab-link');

  // Hide all content
  contents.forEach(content => content.classList.remove('active'));
  
  // Remove active class from all buttons
  buttons.forEach(button => button.classList.remove('active'));

  // Show selected content
  document.getElementById(category).classList.add('active');

  // Add active class to the clicked button
  event.currentTarget.classList.add('active');
}

  </script>
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

  <script src="script.js"></script>
</body>
</html>