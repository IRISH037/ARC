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


    <title>Northern Blossom Flower Farm</title>
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
            text-align: left ;
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
        .blue {
    width: 82%;
    padding: 20px;
    background-color: #ffffff;
    border: 2px solid #0096c7;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    position: relative;
    left: 132px;
}

.location {
    position: relative;
    top: 50px;
}

    </style>
</head>
<body>
    <h1>Northern Blossom Flower Farm</h1>
    <div class="blue">
    <p> The Northern Blossom Flower Farm is located in Atok, Benguet. It is becoming a top tourist attraction in the region particularly for its rose cabbages plantation and several other varieties of colorful flowers. 
        Aside from a majestic floral carpet running along the mountains, the flower farm is also a good point to get a view of the country’s highest peak, Mt. Pulag.
        Northern Blossom Flower Farm’s proprietor Lany Gan also runs a flower shop in Dangwa Flower Market, Manila, the primary source of flowers and foliage in the metro especially among florists and wedding and event organizers.</p>
   </div>
        <div class="gallery">
        <img src="img/blossom.jpg" alt="Image 1">
        <img src="img/blossommm.jpg" alt="Image 2">
        <img src="img/blossomm.jpg" alt="Image 3">
        <!-- Add more images as needed -->
    </div>
    <div class="location">
        <element class="strong">
        <h2>Location & Contacts</h2>
        <p><strong>Address:</strong> Halsema Highway, Atok, Benguet, Philippines</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
        <p><strong>Email:</strong> info@blossom.com</p>
        <div id="map">
        </element>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3633.8673119631612!2d120.7640303784484!3d16.625387543237558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391b6480cfc189b%3A0xd29665e5181bdf18!2sNorthern%20Blossom%20Flower%20Farm!5e1!3m2!1sen!2sph!4v1728374494488!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <strong>Cafe Yagam</strong><br>
            Address: Along the Halsema Highway, Atok, Benguet.<br>
        </div>
        <div class="eatery">
            <strong>Dahilayan Forest Park Restaurant</strong><br>
            Address: Dahilayan, Manolo Fortich, Bukidnon, Philippines<br>
        </div>
        <div class="eatery">
            <strong>Good Taste Restaurant</strong><br>
            Address: Along the Halsema Highway<br>
        </div>
        <!-- Add more eateries as needed -->
    </div>

<!-- For Hotel -->

<section class="section__container popular__container">
    <h2 class="section__header">Nearby Hotels</h2>
    <div class="popular__grid">
        <div class="popular__card">
            <img src="img/hotel25.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Pinecone Lodge & Restaurant</h4>
                    <h3>TOP 1</h3>
                </div>
                <p>📍Abatan Road. Gurel, Kabayan, Luzon 2606 Philippines</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="img/hotel26.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>The Plaza Lodge Baguio</h4>
                    <h3>TOP 2</h3>
                </div>
                <p>📍32 South Drive, Baguio, Luzon 2600 Philippines</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="img/hotel27.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Sotogrande Hotel Baguio</h4>
                    <h3>TOP 3</h3>
                </div>
                <p>📍Interior Lot 92M from Leonard Wood Road Cabinet Hill Teacher’s Camp, Baguio, Luzon 2600 Philippines</p>
            </div>
        </div>
    </div>
</section>

<style>

.section__container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center the entire section */
    padding: 2rem;
}

.section__header {
    font-size: 2rem;
    color: #007BFF;
    margin-bottom: 1.5rem;
    text-align: center; /* Center the header text */
}

.popular__grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Increased minimum width for wider boxes */
    gap: 1.5rem;
    margin-top: 2rem;
    max-width: 1200px; /* Set a max width for the grid */
    width: 100%; /* Ensure it uses the full width */
    justify-items: center; /* Center cards horizontally */
}

.popular__card {
    width: 100%; /* Ensure cards take full width of grid cell */
    max-width: 350px; /* Optional: Max width for cards */
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s;
}

/* Adjust other styles as needed, no changes necessary for hover and content styles */


.popular__card:hover {
    transform: translateY(-5px);
}

.popular__card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.popular__content {
    padding: 1rem;
    text-align: center; /* Center the text within each card */
    background-color: #ffffff;
}

.popular__content h4 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.popular__content p {
    color: #666;
    font-size: 0.9rem;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .section__header {
        font-size: 1.75rem; /* Slightly smaller header */
    }

    .popular__grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Smaller cards on medium screens */
    }

    .popular__content h4 {
        font-size: 1.4rem; /* Adjusted for medium screens */
    }

    .popular__content p {
        font-size: 0.85rem; /* Adjusted for medium screens */
    }
}

@media (max-width: 480px) {
    .section__header {
        font-size: 1.5rem; /* Further reduction for small screens */
    }

    .popular__grid {
        grid-template-columns: 1fr; /* Single column layout for small screens */
    }

    .popular__content h4 {
        font-size: 1.2rem; /* Adjusted for small screens */
    }

    .popular__content p {
        font-size: 0.75rem; /* Adjusted for small screens */
    }
}
</style>

        <!-- For end Hotel -->

    <button onclick="window.location.href='Populartour.php'">Back to Tourist Spots</button>

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
</body>
</html>

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
                url:"blossom_db.php",
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
            url:"blossom_db.php",
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