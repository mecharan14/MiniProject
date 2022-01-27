<?php
	session_start();

	if(!isset($_SESSION['farmerlogin'])){
		header("Location:farmer_login.php");
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION);
		header("Location:farmer_login.php");
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
			<li ><a class="nav-link active" href="farmer_page.php"> Home </a></li>
			<li ><a class="nav-link" href="../store/post_ad.php"><i class="ph-storefront-bold"></i> Post your Ad</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item"><a style="background-color:#b23b3b;color: white!important;border-radius: 10px;" class="nav-link links" href="../admin/adminpage.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
		</ul>
	</div>	
</nav>
<h1 class="text-center py-4 shadow-lg font">Welcome <?php echo ($_SESSION['farmerlogin']);?></h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1588423851962-29a61047cb11?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80" alt="First slide">
    </div>
  </div>
</div>
<div class="container my-4">
	<div class="row">
		<div class="col-md-6 text-center">
			<h2 class="my-4">"Weather"<span class="light-text">Tracking</span></h2>
			<p class="text-left">Although we still make jokes about our local meteorologists, the truth is that computerized weather modeling is becoming increasingly sophisticated. There are online weather services that focus exclusively on agriculture, and farmers can access these services on dedicated onboard and handheld farm technology but also via mobile apps that run on just about any consumer smartphone. This technology can give farmers enough advanced notice of frost, hail and other weather that they can take precautions to protect the crops or at least mitigate losses to a significant degree.</p>
		</div>
		<div class="col-md-6">
			<figure>
				<img alt="" src="https://images.unsplash.com/photo-1583591749989-0d1e8c5bbf42?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="w-100 rounded">
			<figcaption>
			</figcaption>
			</figure>
		</div>
	</div>
</div>
</body>

