
<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Home</title>
	<link rel="icon"  href="../images/logo.jpg">
	<link rel="stylesheet" href="../CSS/store.css">
	<link rel="stylesheet" href="../CSS/register.css">
	<link rel="stylesheet" href="../CSS/index.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
	<script type="text/javascript">
	</script>
</head>
<body>
<!----------------------------------------------Top Bar--------------------------------------------->
<div class="top-bar py-4">
	<div class="col-6-md text-right">
		<p class="txtfont pr-4"><i class="far fa-envelope"></i><a href="" class="top-link"> admin@mylivefarming</a></p>
	</div>		
</div>
<nav class=" bg navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation">
	<a class="navbar-brand" href="../index.php"><img class=" d-inline-block align-center rounded-circle" src="../images/logo.jpg" alt="logo" width="117px" height="80px" title="Logo"><span class="mr-5" style="font-family:'Reggae One', cursive;"> My <span class="font-weight-bold">LIVE</span> Farming</span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link" href="../farmer/farmer_page.php"> Home </a></li>
			<li ><a class="nav-link active" href="../store/post_ad.php"><i class="fas fa-store"></i> Post your Ad</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item"><a style="background-color:#b23b3b;color: white!important;border-radius: 10px;" class="nav-link links" href="../admin/adminpage.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
		</ul>
	</div>	
</nav>
<h2 class="text-center py-4 font">Sell your Products Here</h2>
<div class="border-top border-success w-25 mx-auto mb-3"></div>
<?php
$connect = mysqli_connect("localhost", "root", "", "agriculture");
if(isset($_POST["post_ad"]))
{
    $product_name = $_POST["product_name"];
    $file = addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]));
    $product_description = $_POST["product_description"];
    $category = $_POST["category"];
    $farmername = $_POST["farmer_name"];
    $price = $_POST["price"];
    $query = "INSERT INTO products(product_name,product_image,product_description,category,farmer_name,price) VALUES ('$product_name','$file','$product_description','$category','$farmername','$price')";
    if(mysqli_query($connect, $query))
    {
        echo ' <div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> You have successfully entered your Data..</div>';
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Not Entered..!</strong>There was problem contact Admin</div>';
    }
}
?>  
<div class="container">
	<form id="form" class="py-4 px-4 mb-4 shadow-lg" method="post" action="post_ad.php" enctype="multipart/form-data">
    	<div class="form-row">
        	<div class="form-group col-md-6">
          		<label for="product_name">Product Name:</label>
          		<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required="required">
        	</div>
        	<div class="form-group col-md-6">
          		<label for="product_image">Upload the Product Image: <small>below 200kb</small></label>
          		<input type="file" class="form-control" id="product_image" name="product_image" placeholder="choose image" required="required" accept=".png,.jpg">
        	</div>
        	<div class="form-group col-md-6">
          		<label for="product_description">Product Description:</label>
          		<input type="text" class="form-control" id="product_description" name="product_description" placeholder="Description about the product" required="required">
        	</div>
        	<div class="form-group col-md-6">
          		<label for="category">Choose your catagory:</label>
          			<select id="category" name=category class="form-control" required="required">
          				<option>fruit</option>
          				<option>vegetables</option>
          			</select>
        	</div>
      	</div>
      	<div class="form-group">
        	<label for="farmer_name">Farmer Name:</label>
        	<input type="text" class="form-control" id="farmer_name" name="farmer_name" placeholder="Farmer's Name" required="required">
        </div>
        <div class="form-group">
        	<label for="price">Price:</label>
        	<input type="number" class="form-control" id="price" name="price" placeholder="Price of the product" required="required">
        </div>
        <div class="form-row">
      		<div class="form-grop col-md-12 text-center">
      			<button type="submit" class="btn btn-outline-success my-4 px-4" id="post_ad" name="post_ad">Post</button>
      		</div>
      	</div>
    </form>
</div>