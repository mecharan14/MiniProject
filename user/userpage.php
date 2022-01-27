<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location:user.php");
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION);
		header("Location:user.php");
	 	# code...
	 } 

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Admin</title>
	<link rel="icon"  href="../images/logo.jpg">
	<link rel="stylesheet" href="../CSS/index.css">
	

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/phosphor-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>

<nav class=" bg navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation">
	<a class="navbar-brand" href="../index.php"><img class=" d-inline-block align-center rounded-circle" src="../images/logo.jpg" alt="logo" width="117px" height="80px" title="Logo">
	<span class="brand-title font-weight-bold" style="font-family: 'Fjalla One', sans-serif;"> My Live Farming</span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link" href="../index.php"> Home </a></li>
			<li ><a class="nav-link active" href="userpage.php">User Home</a></li>
			<li ><a class="nav-link" href="../store/store.php"><i class="ph-storefront-bold"></i> Store</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item"><a style="background-color:#b23b3b;color: white!important;border-radius: 10px;" class="nav-link links" href="../admin/adminpage.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
		</ul>
	</div>	
</nav>
<h1 class="text-center py-4 shadow-lg font">Welcome <?php echo ($_SESSION['userlogin']);?></h1>

<!-- corousel -->
<div id="myCarousel" class="carousel slide carousel-fade pb-4" data-ride="carousel" data-interval="4550">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active" style="background-image: url('../images/user_page/user_fruits.webp');">
			<div class="container carousel-text pt-4" style="background:linear-gradient(to right, #040404, #000000, #656565);border-radius: 25px;" >
				<h1 class="font"><span class="light-text">BEST </span><span class="bg px-2 py-2 rounded-right">Offers</span></h1>
				<p><span>OFFERS</span> only for new successfull referals and use below promocode<br>Get flat 30% discount on all products</p>
				<a href="user_signup.php" class="btn btn-outline-success text-light">Use Promocode:FREE30</a>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('../images/user_page/oranges.webp');">
			<div class="container carousel-text">
				<h1 class="font" >FRESH and <span class="bg px-2 py-2 rounded-right">HEALTHY</span></h1>
				<hr>
				<p class="font-weight-bold text-dark">We support organic and imported directly from our farmers</p>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('../images/user_page/agriculture.webp');">
			<div class="container carousel-text">
				<h1>WE use <span class="bg px-3 rounded">MODERN</span> methods</h1>
				<p class="font-weight-bold text-dark">we use mordern methods and technology in <span class="text-light shadow-lg">agriculture</span></p>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('../images/user_page/help_farmers.webp');">
			<div class="container carousel-text">
				<h1><span class="bg px-3 rounded">Help</span> Farmers</h1>
				<p class="font-weight-bold text-light">You can help farmers directly</p>
				<a href="user_signup.php" class="btn btn-success">click here</a>
			</div>
		</div>
	</div>
	<a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
		<span class="sr-only">Privious</span>
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	</a>
	<a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
		<span class="sr-only">Next</span>
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	</a>
</div>

<!-- OFFERS -->

<div class="container py-4">
	<h2 class="text-center font mb-3"><span class="light-text">Present</span> Offers</h2>
    <div class="card-group shadow-lg pb-4">
      <div class="card">
        <img class="card-img-top rounded img-responsive" src="../images/user_page/orange.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Orange per Kg</h5>
          <p class="card-text"><i style="font-size:24px" class="fa">&#xf156;</i> 80.00 <small><del><i style="font-size:15px" class="fa ml-2">&#xf156;</i> 89</del></small><br><span class="text-success"><small>you save <i style="font-size:15px" class="fa ml-2">&#xf156;</i> 9</small></span></p>
          <p class="card-footer"> <button class="btn btn-outline-secondary" href="#">Add to cart</button> <button class="btn btn-outline-success ml-4" href="#">Buy</button></p>
        </div>
      </div>
      <div class="card mx-3">
        <img class="card-img-top rounded img-responsive " src="../images/user_page/vegetables.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Vegetables</h5>
          <p class="card-text"><i style="font-size:24px" class="fa">&#xf156;</i> 500.00(min) <small>Shop for min 500 or more and get flat 20% off on first oder</small><br><span class="text-success"><small>you save 20% of your money</small></span></p>
          <p class="card-footer"><button class="btn btn-outline-secondary" href="#">Add to cart</button> <button class="btn btn-outline-success ml-4" href="#">Buy</button></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top shadow-lg" src="../images/user_page/help-farmer.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Helping Farmer</h5>
          <p class="card-text">Upon success full helping a farmer you will be getting free products <span class="text-success">worth upto <i style="font-size:16px" class="fa">&#xf156;</i>1000</span> </p>
          <p class="card-footer text-center"><button class="btn btn-outline-success ml-4" href="#">click here</button> </p>
        </div>
      </div>
    </div>    
</div>
<!-- Footer Page -->  
<footer class="page-footer bg-dark mt-4">
	<div class="">
		<div class="container">
			<div class="row py-4 d-flex align-items-center">
			
				<div class="col-md-12 text-center">
					<a href="#"><i class="fab fa-facebook-f text-light mr-4"></i></a>
					<a href="#"><i class="fab fa-twitter text-light mr-4"></i></a>
					<a href="#"><i class="fab fa-google-plus-g text-light mr-4"></i></a>
					<a href="#"><i class="fab fa-linkedin-in text-light mr-4"></i></a>
					<a href="#"><i class="fab fa-instagram text-light mr-4"></i></a>
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
					<li class="my-2"><a class="links"  href="#home">Home</a></li>
					<li class="my-2"><a class="links" href="register.html">Join us</a></li>
					<li class="my-2"><a class="links" href="events.html">events</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 text-center text-light">
				<h6>Navigation </h6>
				<hr class="bg mb-4 mt-0-d-inline-block mx-auto" style="width:85px; height: 2px;">
				<ul class="list-unstyled">
					<li class="my-2"><a class="links" href="blogs.html">blogs</a></li>
					<li class="my-2"><a class="links" href="#aboutus">about us</a></li>
					<li class="my-2"><a class="links" href="#gallery">Gallery</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 text-center text-light">
				<h6>Contact Us</h6>
				<hr class="bg mb-4 mt-0-d-inline-block mx-auto" style="width:85px; height: 2px;">
				<ul class="list-unstyled">
					<li class="my-2"><i class="fas fa-phone-alt bg-dark mr-2"></i> <a class="links" href="#"> 	9912345678</a></li>
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