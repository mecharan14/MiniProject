<?php 
require_once('../config/dbconnect.php');
session_start();
if(!isset($_SESSION['userlogin'])){
    header("Location:user.php");
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location:user.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Post Ad</title>
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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/phosphor-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
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
	</script>
</head>
<body>
<!----------------------------------------------Top Bar--------------------------------------------->
<div class="top-bar p-2">
	<div class="col-6-md text-right">
		<p class="txtfont pr-2"><i class="ph-envelope-simple"></i><a href="" class="links"> admin@mylivefarming.com</a></p>
	</div>		
</div>


<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation" style="background-color:  #2ECC71;
	color: black;">
	<a class="navbar-brand" href="../index.php"><img class=" d-inline-block align-center rounded-circle" src="../images/logo.jpg" alt="logo" width="117px" height="80px" title="Logo">
	<span class="brand-title font-weight-bold" style="font-family: 'Fjalla One', sans-serif;"> My Live Farming</span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link mx-4" href="../index.php"> Home </a></li>
			<li ><a class="nav-link mx-3" href="../user/userpage.php">User Home</a></li>
			<li ><a class="nav-link mx-4 active" href="store.php"><i class="ph-storefront-bold"></i> Store</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item"><a style="background-color:#b23b3b;color: white!important;border-radius: 10px;" class="nav-link links" href="../admin/adminpage.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
		</ul>
	</div>	
</nav>
<!-----------------------------------------------NavBar--------------------------------------------->
<div class="container py-3">
  <h2 class="text-center" style=" font-family: 'Comfortaa', cursive;">Welcome to the Store</h2>
  <div class="border-top border-success w-25 mx-auto my-3"></div>
  <p>We deliver to 25 cities across India and maintain excellent delivery times, ensuring that all your products from groceries to snacks branded foods reach you in time. Slotted Delivery: Pick the most convenient delivery slot to have your grocery delivered. From early morning delivery for early birds, to late-night delivery for people who work the late shift, bigbasket caters to every schedule.</p>

  <ul class="nav nav-tabs shadow-lg py-3" >
    <li><a style="text-decoration: none;color: #82b440;font-family: 'Comfortaa', cursive;" class="mx-4" data-toggle="tab" href="#offers">Today's Offer</a></li>
    <li><a style="text-decoration: none;color: #82b440;font-family: 'Comfortaa', cursive;" class="mx-4" data-toggle="tab" href="#vegetables">Vegetables</a></li>
    <li><a style="text-decoration: none;color: #82b440;font-family: 'Comfortaa', cursive;" class="mx-4" data-toggle="tab" href="#fruits">Fruits</a></li>
  </ul>
  <div class="tab-content">
    <div id="vegetables" class="tab-pane fade my-4">
      <h3 class="text-center my-4" style="font-family: 'Comfortaa', cursive;">Vegetables</h3>
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://previews.123rf.com/images/govindji/govindji1604/govindji160400065/56296490-fresh-lady-fingers-or-okra-in-white-background.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Ladies-Finger<br><small>500g</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Kumarsai<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 45</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://st.depositphotos.com/1689882/3930/i/950/depositphotos_39303925-stock-photo-potatoes-isolated-on-white-background.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font mb-2">
      				<h4 class="text-center">Potatoes<br><small>1Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Ragavah<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 30</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://images.unsplash.com/photo-1534940519139-f860fb3c6e38?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1047&q=80" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Tomatos<br><small>1Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> NagaBabu<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 20</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      	
      	</div>
      	<div class="row">
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://images.unsplash.com/photo-1615485291234-9d694218aeb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Broccoli<br><small>1pc(Approx[250g-500g])</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> KiranKumar<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 38</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://thumbs.dreamstime.com/b/red-green-yellow-bell-pepper-white-background-three-35580907.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font mb-2">
      				<h4 class="text-center">Capsicum<br><small>Red-Green-Blue (Approx[420g])</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Poshamma<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 95</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://www.natural-organic-living.com/wp-content/uploads/2017/01/Eggplant.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Brinjol<br><small>1Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> NagaBabu<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 38</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      	
      	</div>
      </div>
   </div>
   <div id="offers" class="tab-pane fade my-4">
   	<h3 class="text-center font my-4">Today's Offer</h3>
      	<div class="border-top border-success w-25 mx-auto my-3"></div>
      	<div class="row">
      		<table class="table table-hover shadow-lg py-4 px-4">
      		<colgroup>
       			<col span="1" style="width: 15%;">
       			<col span="1" style="width: 45%;height: auto">
      			<col span="1" style="width: 40%;">
    </colgroup>
			<thead>
				<tr>
					<th>Name</th>
					<th>Image</th>
					<th>Description</th>
					<th>Category</th>
					<th>Farmer Name</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$a=1;
				$stmt=$db->prepare("SELECT * FROM products");
				$stmt->execute();
				$products = $stmt->fetchAll();
				foreach ($products as $products){
				    ?>
				    <tr>
				    	<td>
				    	<?php 
				    	   echo '<p class="text-center my-4 pt-4 font-weight-bold">'.$products['product_name'].'</p>';
				    	?>
				    	</td>
				    	<td><?php 
				    	   echo '<img src="data:image/jpeg;base64,'.base64_encode($products['product_image'] ).'" class="rounded w-100" />';  
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo '<p class="text-center my-4 pt-4 font-weight-bold">'.$products['product_description'].'</p>';
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo '<p class="text-center my-4 pt-4 font-weight-bold">'.$products['category'].'</p>';
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	echo '<p class="text-center my-4 pt-4 font-weight-bold">'.$products['farmer_name'].'</p>';
				    	?>
				    	</td>
				    	<td>
				    	<p class="text-success">
				    	<i style="font-size:15px" class="fa">&#xf156;</i>
				    	<?php 
				    	   echo $products['price'];
				    	?>
				    	</p>
				    	</td>
				    	<td><button class="btn btn-outline-success"> Buy</button></td>
				    </tr>
				<?php 	
				}
				?>
				</tbody>
			</table>
      	</div>
   </div>
    <div id="fruits" class="tab-pane fade">
      <h3 class="text-center my-4" style="font-family: 'Comfortaa', cursive;">Fruits</h3>
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://st2.depositphotos.com/1689882/10883/i/950/depositphotos_108830756-stock-photo-oranges-isolated-on-white-background.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Oranges<br><small>1 Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Suribabu<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 135</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://image.freepik.com/free-photo/kiwi-fruit-isolated-white-background_29402-582.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font mb-2">
      				<h4 class="text-center">Kiwi<br><small>6 Pcs (Approx 400g-500g)</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Mallesh<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 89</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://s1.1zoom.me/big0/408/Apples_Closeup_White_background_Red_Three_3_535366_1280x873.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Apple<br><small>1Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> VarunBabu<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 265</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      	
      	</div>
      	<div class="row">
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://i.pinimg.com/originals/b5/bb/d6/b5bbd677400a11d45440377052fe1d0b.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Grapes<br><small>Sonaka Seedless per Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Rathan<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 59</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://static4.depositphotos.com/1020804/360/i/950/depositphotos_3602720-stock-photo-pomegranate-on-a-white-background.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font mb-2">
      				<h4 class="text-center">Pomegranate Kesar<br><small>per Kg</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> Poshamma<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 219</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      		<div class="col-md-4">
      			<figure>
      				<img name= alt="" src="https://i.pinimg.com/originals/b8/39/3c/b8393ccd0f271772cc7d4796857637a9.jpg" class="w-100 img-thumbnail">
      				<figcaption class="txt-style font">
      				<h4 class="text-center">Banana<br><small>6 Pcs(Approx 800g-110g)</small></h4>
      				<p><span class="font-weight-bold">Farmer: </span> NagaBabu<br>
      				<span class="font-weight-bold">Amount: </span><span class="text-success"><i style="font-size:14px" class="fa">&#xf156;</i> 29</span></p>
      				<center><button class="btn btn-outline-success">Buy</button></center>
      				</figcaption>
      			</figure>
      		</div>
      	
      	</div>
    </div>
  </div>
</div>
</div>

</body>
</html>
