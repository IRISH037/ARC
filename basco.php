<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Basco Lighthouse</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
           
        }
        h1 {
            text-align: center;
            color: #007BFF;
        }
        p {
            text-align: left;
            color: #333;
            margin: 20px;
        }
        .gallery {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .gallery img {
            width: 400px;
            height: 350px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .eateries {
            margin: 20px 0;
            border: 1px solid #007BFF;
            border-radius: 5px;
            background-color: #fff;
            padding: 10px;
        }
        .eatery {
            margin: 10px 0;
            padding: 10px;
            border-bottom: 1px solid #eaeaea;
        }
        .eatery:last-child {
            border-bottom: none;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        /* For maintenance only!! */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 2rem;
    text-decoration: none;
    list-style: none;
    scroll-behavior: smooth;
    font-family: "Poppins", sans-serif;
}
:root {
    --main-color: #008148;
    --second-color: #1e3932;
}
section {
    padding: 50px 10%;
}
section {
    padding: 50px 10%;
}
*::selection{
    color: #fff;
    background: var(--main-color);
}
img {
    width: 100%;
}
header {
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    box-shadow: 0 4px 41px rgb(14 55 54 / 14%);
    padding: 0 20px;
    transition: 0.2s;  
}
.logo {
    display: flex;
}
.logo img {
    float: left;
    width: 75px;
    height: auto;
}
.navbar {
    display: flex;    
    list-style: none;
    flex: auto;
    
}
.navbar a{
    font-size: 20px;
    padding: 10px 50px;
    color: var(--second-color);
    font-weight: 600;
    text-transform: uppercase;
}
.navbar a:hover {
    color: var(--main-color);   
}
#menu-icon {
    font-size: 24px;
    cursor: pointer;
    z-index: 1001;
    display: none;
}
.HOME {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background: #ebdbc8;
    gap: 1rem;
}
.home-text{
    flex: 1 1 17rem;
}
.home.img{
    flex: 1 1 17rem;
}
.home-img img {
    animation: animate 3s linear infinite;
}
@keyframes animate{
    0% {
        transform: translate(-11px, 0);
    }
    50% {
        transform: translate(-0px, -11px);
    }
    100% {
        transform: translate(-11px, 0);

    }
}
.home-text span {
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: 600;
    color: var(--second-color);
}
.home-text h1 {
    font-size: 3.2rem;
    color: var(--main-color);
    font-weight: bolder;
}
.home-text h2 {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--second-color);
    text-transform: capitalize;
    margin: 0.5rem 0 1.4rem;
}
.btn {
    padding: 7px 16px;
    border: solid var(--second-color);
    border-radius: 40px;
    color: var(--second-color);
    font-weight: 500;
}
.btn:hover {
    color: #fff;
    background: var(--second-color);
}
.heading{
    text-align: center;
    text-transform: uppercase;
}
.heading span{
    font-size: 1rem;
    font-weight: 600;
    color: var(--second-color);
}
.heading h1 {
    font-size: 2rem;
    color: var(--main-color);
}
.shop-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 5rem;
}
.shop-container .box {
    flex: 1 1 10rem;
    background: var(--main-color);
    padding: 20px;
    display: flex;
    text-align: center;
    flex-direction: column;
    align-items: center;
    margin-top: 3rem;
    border-radius: 0.5rem;
}
.shop-container .box .box-img{
    width: 150px;
    height: 150px;
    margin-top: -100px;
}
.shop-container .box .box-img img{
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}
.stars{
    margin: 1rem 0 0.2rem;
}
.shop-container .box .stars .bx{
    color: #ebdbc8;
}
.shop-container .box h2{
    color: #ebdbc8;
    font-size: 1.2rem;
}
.shop-container .box span{
    color: #ebdbc8;
    font-size: 1.4rem;
    font-weight: 500;
    margin: 0.2rem 0 0.5rem;
}
.box .btn {
    border: 2px solid #ebdbc8;
    color: #ebdbc8;
}
.box .btn:hover {
    background: #ebdbc8;
    color: var(--second-color);
}
.font {
    display: flex;
    flex: auto;
    padding: 15px;
    
}    
.font a {
    font-size: 30px;
    padding: 10px 12px;
    color: var(--second-color);
    font-weight: 600;
    text-transform: uppercase;
    
}
.font a:hover {
    color: var(--main-color);
}
        
.blue {
    width: 82%;
    padding: 20px;
    background-color: #ffffff;
    border: 2px solid #0096c7;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    position: relative;
    top: -  200px;
    left: 132px;
}
.location{
    position: relative;
    top: 50px;
}



</style>
</head>
<body>
<h1>Basco Lighthouse</h1>
<div class="blue">
    <p>The Basco Lighthouse, located in the northern part of the Philippines, stands tall on a cliff overlooking the sea. This iconic structure, with its distinct white tower and red accents, serves as a beacon for ships navigating the waters. Surrounded by lush landscapes and breathtaking views, it not only guides mariners but also attracts visitors who appreciate its historical significance and scenic beauty. The lighthouse is a popular spot for photography and offers a glimpse into the region's maritime heritage. </p>
   </div> 
    <div class="gallery">
        <img src="img/basco1.jpg" alt="Image 1">
        <img src="img/basco4.jpg" alt="Image 2">
        <img src="img/basco3.jpg" alt="Image 3">
        <!-- Add more images as needed -->
    </div>
    <div class="location">
        <element class="strong">
        <h2>Location & Contacts</h2>
        <p><strong>Address:</strong> Basco Batanes, Philippines</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
        <p><strong>Email:</strong> info@bascolighthouse.com</p>
        <div id="map">
        </element>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4599.9032201823575!2d121.96180947595951!3d20.451468707354614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3479c044a0abe137%3A0x432bca0d0e779658!2sFX27%2BHQJ%20Basco%20Lighthouse%2C%20Basco%2C%20Batanes!5e1!3m2!1sen!2sph!4v1728458682802!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <script>
        // Function to initialize the map
        function initMap() {
            // Coordinates for the location
            var location = { lat: 13.2578, lng: 123.6852 }; // Adjusted coordinates for Mayon Volcano
            
            // Creating the map centered at the given location
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: location
            });
            
            // Adding a marker at the specified location
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
 
        // Function to open the modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
            initMap(); // Initialize the map when the modal opens
        }
 
        // Function to close the modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
       <div class="eateries">
    <h2>Recommended Eateries Nearby</h2>
    <div class="eatery">
        <strong>Pension Ivatan</strong><br>
        Address: Brgy. San Antonio, Basco, Batanes<br>
    </div>
    <div class="eatery">
        <strong>Cafe du Mendiola</strong><br>
        Address: 3rd Floor, Basco Town Plaza, Basco, Batanes<br>
    </div>
    <div class="eatery">
        <strong>Valugan Eatery</strong><br>
        Address: Valugan Boulder Beach, Basco, Batanes<br>
    </div>
</div>

<!-- For Hotel -->

<!-- For Hotel -->
<section class="section__container popular__container">
    <h2 class="section__header">Nearby Hotels</h2>
    <div class="popular__grid">
        <div class="popular__card">
            <img src="img/hotel1.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Residencia du Basco</h4>
                    <h3>TOP 1</h3>
                </div>
                <p>📍Payin 1 Street Barangay Chanarian, Basco, Luzon 3900 Philippines</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="img/hotel2.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Bernardo's Lantia Hotel</h4>
                    <h3>TOP 2</h3>
                </div>
                <p>📍2-4PAYIN Brgy. Chanarian Batanes, Basco, Luzon 3900 Philippines</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="img/hotel3.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Florabells Iraya Hotel</h4>
                    <h3>TOP 3</h3>
                </div>
                <p>📍Castillejos St. Cor. La Fuente St. Basco, Batanes, 3900 Basco, Philippines</p>
            </div>
        </div>
    </div>
</section>

<style>
.section__container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Ensure the entire section is centered */
    padding: 2rem;
    width: 100%; /* Make sure it spans the full width */
    box-sizing: border-box; /* Prevent content from overflowing */
}

.section__header {
    font-size: 2rem;
    color: #007BFF;
    margin-bottom: 1.5rem;
    text-align: center;
}

.popular__grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(310px, 1fr)); /* Flexibly create columns */
    gap: 4.5rem;
    margin-top: 1rem;
    max-width: 1200px; /* Limit the grid's max width */
    width: 100%;
    padding: 0 1rem; /* Add some horizontal padding to prevent content from touching the edges */
    box-sizing: border-box;
}

.popular__card {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s;
    position: relative;
    width: 100%;
}

.popular__card:hover {
    transform: translateY(-5px);
}

.popular__card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.popular__content {
    padding: 1rem;
    text-align: center;
    background-color: #ffffff;
}

.popular__content h4 {
    font-size: 1.7rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.popular__content p {
    color: #666;
    font-size: 1rem;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .popular__card {
        width: 100%; /* Ensure the cards take full width on medium screens */
    }

    .popular__grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* Adjust column width for medium screens */
    }
}

@media (max-width: 768px) {
    .section__header {
        font-size: 1.5rem;
    }

    .popular__content h4 {
        font-size: 1.3rem;
    }

    .popular__content p {
        font-size: 0.9rem;
    }

    .popular__card {
        width: 90%; /* Slightly reduce card width on smaller screens */
    }

    .popular__grid {
        grid-template-columns: 1fr; /* Single column layout for smaller screens */
    }
}

@media (max-width: 480px) {
    .section__header {
        font-size: 1.25rem;
    }

    .popular__card {
        width: 100%; /* Full-width cards on very small screens */
    }

    .popular__content h4 {
        font-size: 1.2rem;
    }

    .popular__content p {
        font-size: 0.8rem;
    }
}
</style>
<!-- For end Hotel -->




        <!-- For end Hotel -->


    <button onclick="window.location.href='citytours.php'">Back to Tourist Spots</button>

     <!-- for review -->

    
     <div class="container">
    	<h1 class="mt-5 mb-5">Review & Rating </h1>
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>



<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div> 

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.3em;
    Line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    Line-height: 1em;
}
.star-light
{
    color: #e9ecef;
}

    </style>

<script>

$(document).ready(function(){

	var rating_data = 0;
    load_rating_data();
    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"basco_db.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }
	});
//copy!
    function load_rating_data()
    {
        $.ajax({
            url:"basco_db.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
</body>

</html>