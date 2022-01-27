<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Home</title>
	<link rel="icon"  href="images/logo.jpg">
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://unpkg.com/phosphor-icons"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#divgallery").hide();
		$("#gallery").click(function(){
			$("#divgallery").slideToggle("slow");
		});
	});
	$(document).ready(function(){
		$("#navbardrop").click(function(){
			$("#dropdownitem").animate({
				height:'toggle'});
		});
	});
	$(document).ready(function(){
		$("#myCarousel").carousel("cycle");
	  });
	</script>
	<style>
		
	</style>
</head>
<body>
<!----------------------------------------------Top Bar--------------------------------------------->
<div class="top-bar p-2">
	<div class="col-6-md text-right">
		<p class="txtfont pr-2"><i class="ph-envelope-simple"></i><a href="" class="links"> admin@mylivefarming.com</a></p>
	</div>		
</div>
<!-----------------------------------------------NavBar--------------------------------------------->
<nav class=" bg navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation">
	<a class="navbar-brand" href="index.php">
		<img class=" d-inline-block align-center rounded-circle logo mr-2" src="images/logo.jpg" alt="logo" title="Logo">
		<span class="brand-title font-weight-bold" style="font-family: 'Fjalla One', sans-serif;"> My Live Farming</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link active" href="index.php"> Home </a></li>
			<li ><a class="nav-link" href="navbar/events.php">Events</a></li>
			<li ><a class="nav-link" href="navbar/blog.php">Blog</a></li>
			<li ><a class="nav-link" href="#contactus">Contact us</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle links " href="#" id="navbardrop" data-toggle="dropdown"><i class="ph-sign-in-bold"></i> Login</a>
				<div class="dropdown-menu" id="dropdownitem">
					<a class="dropdown-item " href="admin/Admin_login.php"><i class="ph-user-circle-gear"></i> Admin Login</a>
					<a class="dropdown-item " href="user/user.php"><i class="ph-users-three"></i> User Login</a>
					<a class="dropdown-item " href="farmer/farmer_login.php"><i class="ph-leaf"></i> Farmer Login</a>
				</div>
			<li class="nav-item"><a class="nav-link links" href="navbar/Register.php"><i class="ph-user-plus-bold"></i> Register</a></li>
		</ul>
	</div>	
</nav>
<!-------------------------------------------------Corosel--------------------------------------------------->
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4550">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active" style="background-image: url('images/carousel-images/wheat-slide1.webp');">
			<div class="container carousel-text " >
				<h1 class="font"><span class="light-text">BEST </span><span class="bg px-2 py-2 rounded">HARVEST</span></h1>
				<p>With every deed you are sowing a seed, though you may not see it</p>
				<a href="user_signup.php" class="btn btn-outline-success text-light">Sign up today</a>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('images/carousel-images/corn-slide2.webp');">
			<div class="container carousel-text">
				<h1 class="font"><span class="light-text">SAVE OUR </span><span class="bg px-2 py-2 rounded">SOIL</span></h1>
				<p>Agricultural and urban soil erosion are major sources of sedimentation and contamination of water supplies. To improve wildlife habitat.<br>Soil conservation practices such as providing buffer strips and windbreaks, or replacing soil organic matter, greatly enhance the quality of the environment for wildlife of all kinds.</p>
				<a href="user_signup.php" class="btn btn-outline-success text-light">Sign up today</a>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('images/carousel-images/vegetables-slide3.webp');">
			<div class="container carousel-text">
				<h1>Join us in spreading Good Food habit</h1>
				<p>we take directly from farmers to users which is fresh and organic</p>
				<a href="user_signup.php" class="btn btn-outline-success text-light">Sign up today</a>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('images/carousel-images/field-slide4.webp');">
			<div class="container carousel-text">
				<h1 class="font" ><span class="text-light">Help</span> Farmers</h1>
				<p>Making an enormous push toward sustainable production helps farmers.</p>
				<a href="user_signup.php" class="btn btn-outline-success text-light">Sign up today</a>
			</div>
		</div>
	</div>
	<a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
		<span class="sr-only">Privious</span>
		<span class="ph-caret-left-bold" style="font-size: 30px" aria-hidden="true"></span>
	</a>
	<a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
		<span class="sr-only">Next</span>
		<span class="ph-caret-right-bold" style="font-size: 30px" aria-hidden="true"></span>
	</a>
</div>
<!--------------------------- ABOUT--------------------------- -->
<div class="container">
	<div class="border-top border-success w-25 mx-auto my-3"></div>
	<h3 class="text-center nav-item">Step into the World of Organics!</h3>
	<div class="border-top border-success w-25 mx-auto my-3"></div>
	<h1 class="text-center nav-item bg py-3">Let the First Step be Firmly Anchored!</h1>
</div>
<section>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-lg-6">
				<div class="home-about-alt">
					<h5>About My Live Farming</h5>
					<h2>"Providing Food"<br><span class="light-text">Energy to the World</span></h2>
					<p><strong>Growing community by inspiring healthy is our commitment with farmers, the abundant living on the field.</strong></p>
					<p>People at My Live Farming Team are helping farmers to emerging markets maximize their profits. We use agronomic machine learning, remote sensing, and mobile phones to deliver. My Live Farming has met the demands of a growing world.</p>
					<div class="counter-inner-box">
						<div class="media">
							<img alt="" src="images/farmer-box.svg" class="mr-3">
						</div>
						<div class="media-body">
							<div class="media-body">
								<div class="counter" data-count="32">32</div><p style="font-weight:600;">Happy Farmers</p>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-mt-lg">
				<figure class="home-about-img-alt">
					<img class="planting-img w-100" alt="" src="images/planting.webp">
				</figure>
				<p style="font-weight: 600; text-align: center;">For More Benefits and features <span style="color: green;">Register</span> with us</p>
			</div>
		</div>
	</div>
</section>

<!-- Parallex starts Here(pspk) -->
<div class="popup-parallax" style="background-image: url('images/parallax-img.webp');">
	<div class="parallax-content">
		<a class="popup-youtube" href="https://www.youtube.com/watch?v=-_tvJtUHnmU">
        	<div class="pulse text-success"><i class="fas fa-play-circle fa-3x"></i></div>
		</a>
		<h2>Providing the finest products <br> <span class="light-text">to the best feed suppliers.</span></h2>
		<div class="border-top border-success w-25 mx-auto my-3"></div>
			<p>Helping farmers to emerging markets maximize their profits. <br>We use agronomic machine learning,remote sensing, and mobile phones.</p>
         <div class="parallax-btn">
            <a href="Register.php" class="btn btn-success">Register Us</a>
         </div>
	</div>
</div>
<!-- 2division box starts Here(pspk) -->
<div class="container mt-5 mb-5"> 
	<div class="row"> 
 		<div class="col-lg-6"> 
			<div class="masonry-left-layer aos-init aos-animate" data-aos="fade-up">
            	<div class="ml-caption">
                	<h3>Grow <span class="light-text">Naturally</span></h3>
                    <p>Conducting surveillance in these areas in response to avian influenza being detected in local poultry and emu farms to stop its spread.</p>
                </div>
                <figure class="ml-img">
                	<img class="w-100 rounded"  src="images/vegetables2.webp" alt="">
                </figure>
             </div>
        </div> 
        <div class="col-lg-6 col-mt-lg">
        	<div class="masonry-right-layer aos-init aos-animate" data-aos="fade-down">
            	<figure class="ml-img">
                	<img class="w-100 rounded" src="images/vegetables1.webp" alt="">
                </figure>
                <div class="ml-caption">
                	<h3>Field is <span class="light-text">Futures</span></h3>
                    <p>We host a series of webinars to assist landholders with animal nutrition, farm water and soil management in Central and East Gippsland.</p>
                </div>
            </div> 
		</div> 
     </div> 
 </div>
 <section>
 <div class="container mb-2">
 	<div class="row text-center">
 		<div class="col-sm-4">
 			<figure>
	 			<img src="https://cdn.shopify.com/s/files/1/2133/1999/t/23/assets/100_organic.png?v=1597382137" alt="100% Organic" class="img-responsive">
	 			<figcaption class="text-center-justify ml-4 font py-2">100% Organic</figcaption>
	 		</figure>
 		</div>
 		<div class="col-sm-4">
 			<figure>
 				<img src="https://cdn.shopify.com/s/files/1/2133/1999/t/23/assets/Pesticide_free.png?v=1597382107" alt="Pesticide Free" class="img-responsive">
 				<figcaption class="text-center-justify ml-4 font py-2">Pesticide Free</figcaption>
 			</figure>
 		</div>
 		<div class="col-sm-4">
			<figure>
 				<img src="https://cdn.shopify.com/s/files/1/2133/1999/t/23/assets/sustainable.png?v=1597382123" alt="Sustainable" class="img-responsive">
 				<figcaption class="text-center-justify ml-4 font py-2">Sustainable</figcaption>
 			</figure>
 		</div>
 	</div>
 </div>
 </section>       

<!-- Gallery -->
<div class="container my-5"> 
	<!-- <div class="border-top border-success w-25 mx-auto my-3"></div> -->
	<div id="gallery" class="text-center"><h2>Our Gallery <i id="gallery" class=" pl-3 ph-caret-double-down-bold btn btn-outline-dark rounded btn-lg"></i></h2></div>
	<!-- <div class="border-top border-success w-25 mx-auto my-3"></div> -->
</div>
<center>
<div id="divgallery" class="row galleryswipe" style="max-width: 98vw">
<!--Grid column-->
	<div class="col-lg-4 col-md-12 mb-4">
		<img src="images/gallery/corn.webp" loading="lazy" class="img-fluid mb-4 rounded" alt="">
        <img src="images/gallery/farming.webp" loading="lazy" class="img-fluid mb-4 rounded" alt="">
     </div>
     <div class="col-lg-4 col-md-6 mb-4">
        <img src="images/gallery/oranges.webp" loading="lazy" class="img-fluid mb-4 rounded" alt="">
        <img src="images/gallery/planting.webp" loading="lazy" class="img-fluid mb-4 rounded" alt="">
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <img src="images/gallery/onion.webp" loading="lazy" class="img-fluid mb-4 rounded" alt="">
        <img src="images/gallery/plants.webp" loading="lazy" class="img-fluid mb-4 rounded" alt="">
      </div>
</div>
	</center>

<!-- Get in touch -->
<!-- <div class="border-top border-success w-25 mx-auto my-3"></div>
<h2 class="text-center my-4" id=contactus>Contact <span class="light-text">Us</span></h2> -->
<?php
	$connect = mysqli_connect("localhost", "root", "", "agriculture");

	if(isset($_POST["submit"])){
		$email 			= $_POST["email"];
		$message_type 	= $_POST["message_type"];
		$message 		= $_POST["message"];

		$query = "INSERT INTO complaint(email,message_type,message) VALUES ('$email','$message_type','$message')";
		if(mysqli_query($connect, $query)){
        echo '<script>swal({
  						title: "Message Sent to Admin!",
  						text: "You have successfully sent your message",
  						icon: "success",
  						button: "close",
					});</script>';
    	}else{
      		echo '<script>swal({
  						title: "There was some Problem",
  						text: "Check or Contact admin",
  						icon: "error",
  						button: "close",
					});</script>';
    		}
	}
?>

<!-- <div class="border-top border-success w-25 mx-auto my-3"></div> -->
	<div style="background-image: url('./images/contact-bg.webp'); background-repeat: no-repeat;background-size: cover;" class="w-100 bg-img my-4">
		<form class="container w-50 bg py-2 rounded shadow-lg" action="#contactus" method="post">
		<h3 class="text-center text-light" id=contactus>Contact Us</32>
	  		<div class="form-group mt-3">
	    		<label class="sr-only" for="email">Email address</label>
	    		<input type="email" class="form-control" id="email" name="email" placeholder="Email address" required="required">
	  		</div>
	  		<div class="form-group">
	    		<label class="sr-only" for="message-type">Message Type:</label>
	    		<select class="form-control" id="message_type" name="message_type" required="required">
		      		<option>Select Message Type</option>
		      		<option>Query</option>
		      		<option>Complaint</option>
		      		<option>Message</option>
		      		<option>Suggestion</option>
		    	</select>
	  		</div>
	  		<div class="form-group">
	    		<label class="sr-only" for="message">Message:</label>
	    		<textarea class="form-control" id="message" name="message" rows="3" placeholder="Type your Message Here..." required="required"></textarea>
	  		</div>
			<center><button type="submit" class="btn btn-light mb-2" name="submit" id="submit"><i class="ph-paper-plane-tilt-bold"></i> Send</button></center>
		</form>
	</div>
<!-- Footer Page -->  
<footer class="page-footer bg-dark mt-4">
	<div class="">
		<div class="container">
			<div class="row py-4 d-flex align-items-center">
			
				<div class="col-md-12 text-center">
					<a href="#" class="footer-soc"><i class="ph-facebook-logo-bold text-light mr-4"></i></a>
					<a href="#" class="footer-soc"><i class="ph-twitter-logo-bold text-light mr-4"></i></a>
					<a href="#" class="footer-soc"><i class="ph-linkedin-logo-bold text-light mr-4"></i></a>
					<a href="#" class="footer-soc"><i class="ph-instagram-logo-bold text-light mr-4"></i></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container text-center text-md-left mt-5">
		<div class="row">
			<div class="col-md-4 col-sm-4 text-center text-light">
				<h6> Quick links</h6>
				<hr class="bg mb-4 mt-0-d-inline-block mx-auto" style="width:85px; height: 2px;">
				<ul class="list-unstyled">
					<li class="my-2"><a class="links" href="index.php">Home</a></li>
					<li class="my-2"><a class="links" href="navbar/Register.php">Join us</a></li>
					<li class="my-2"><a class="links" href="navbar/events.php">Events</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 text-center text-light">
				<h6>Navigation </h6>
				<hr class="bg mb-4 mt-0-d-inline-block mx-auto" style="width:85px; height: 2px;">
				<ul class="list-unstyled">
					<li class="my-2"><a class="links" href="navbar/blog.php">Blogs</a></li>
					<li class="my-2"><a class="links" href="#aboutus">About us</a></li>
					<li class="my-2"><a class="links" href="navbar/events.php">Gallery</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 text-center text-light">
				<h6>Contact Us</h6>
				<hr class="bg mb-4 mt-0-d-inline-block mx-auto" style="width:85px; height: 2px;">
				<ul class="list-unstyled">
					<li class="my-2"><i class="fas fa-phone-alt bg-dark mr-2"></i> <a class="links" href="#"> 	7894561230</a></li>
					<li class="my-2"><i class="fas fa-envelope bg-dark mr-2"></i><a class="links" href="#">infogathering@mylivefarming.com</a></li>
					<li class="my-2"><i class="fas fa-map-marked-alt bg-dark mr-2"></i><a class="links" href="#">Hyderabad</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="border-top border-success w-25 mx-auto my-3"></div>
		<h5 class="text-center pb-4 text-light font">Farmers: <span class="light-text">We feed the world</span></h5>
	</div>
</footer>

</body>
</html>