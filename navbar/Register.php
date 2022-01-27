<?php
require_once('../config/dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Register</title>
	<link rel="icon"  href="../images/logo.jpg">
	<link rel="stylesheet" href="../CSS/index.css">
	<link rel="stylesheet" href="../CSS/register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
	
	<script type="text/javascript">
	$(document).ready(function(){
		$("#form").hide();
		
		$("#form-button").click(function(){
			$("#form").slideToggle("slow");
		});
	});
	$(document).ready(function(){
		$("#navbardrop").click(function(){
			$("#dropdownitem").slideToggle();
		});
	});

	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();
			if (valid) {
			var fullname 	= 	$('#fullname').val();
			var  password 	= 	$('#password').val();
			var mobile 		= 	$('#mobile').val();
			var category 	= 	$('#category').val();
			var address 	= 	$('#address').val();
			var city 		= 	$('#city').val();
			var state 		= 	$('#state').val();
			var pincode 	= 	$('#pincode').val();	
				e.preventDefault();
				$.ajax({
					type : 'POST',
					url: '../config/process.php',
					data:{fullname:fullname,password:password,mobile:mobile,category:category,address:address,city:city,state:state,pincode:pincode},
					success:function(data){
						Swal.fire({
							'title':'Success',
							'text':data,
							'icon':'success'
						})

					},
					error:function(data){
						Swal.fire({
							'title':'Error!',
							'text':'Error! Check or Contact ADMIN.. ',
							'icon':'error'
						})
					}
				});
				
			}else{
	
			}
		});					
	});
	</script>
</head>
<body>
<?php include '../config/header.php'; ?>
<!---------------------------- Register options -------------------->
<div class="container my-4"><h1 class="font text-center">Choose your Registration</h1></div>
<div class="container text-center shadow-lg pb-3">
	<div class="card-group mb-2">
  		<div class="card mr-3">
    		<img class="card-img-top img-fluid zoom" src="../images/register/user.webp" alt="Card image cap" style="height: 201px;">
    	<div class="card-body">
      		<h5 class="card-title font text-center bg py-2"><i class="ph-users-three-bold"></i> User Register</h5>
      		<p class="card-text font text-left my-4">Help the farmers in harvesting the crops.<br>you can buy vegetables, fruits directly from the farmers.If possible you can plough the land by their permission and harvest your crop<br>If you want
      		to be in this category, Choose <span style="color: green;"><u>User</u></span> option in the form</p>
    	</div>
  		</div>
  		<div class="card mr-3">
    		<img class="card-img-top" src="../images/register/farmer_register.webp" alt="Card image cap">
    	<div class="card-body">
      		<h5 class="card-title font text-center bg py-2"><i class="ph-leaf-bold"></i> Farmer Register</h5>
      		<p class="card-text font text-left my-4">You directly sell your crops/vegetables/fruits by simply posting an advertising your crop in this website without any intermediate availability or supplier will contact you if he needs it<br>
      		If you want to be in this category choose <span style="color: green;"><u>Farmer</u></span> option in the form</span> </p>
    	</div>
  		</div>
  		<div class="card">
    		<img class="card-img-top" src="../images/register/supplier.webp" alt="Card image cap">
    	<div class="card-body">
      		<h5 class="card-title font text-center bg py-2"><i class="ph-truck-bold"></i> Supplier Register</h5>
      		<p class="card-text font text-left my-4"> You don't have any field or any land still you can sell or buy the vegetables from the farmers and sell them in the market by <span style="color: green;"><u>requesting</u></span> from the farmers in this website<br>
      		If you want to be in this category choose <span style="color: green;"><u>Supplier</u></span> option in the form</span> </p>
    	</div>
  		</div>
	</div>
<button type="button" class="btn btn-outline-success font" id="form-button">Click Here</button>
</div>

<!--------------------- Form ----------------------------->	
<div class="container">
    <form id="form" class="py-4 px-4 mb-4 shadow-lg" method="post" action="Register.php">
    	<div class="form-row">
        	<div class="form-group col-md-6">
          		<label for="fullname">Full Name:</label>
          		<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your Fullname" required="required">
        	</div>
        	<div class="form-group col-md-6">
          		<label for="password">Password:</label>
          		<input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required="required">
        	</div>
        	<div class="form-group col-md-6">
          		<label for="password">Mobile:</label>
          		<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number" maxlength="10" required="required">
        	</div>
        	<div class="form-group col-md-6">
          		<label for="category">Choose your catagory:</label>
          			<select id="category" name=category class="form-control" required="required">
          				<option>User</option>
          				<option>Farmer</option>
          				<option>Suplier</option>
          			</select>
        	</div>
      	</div>
      	<div class="form-group">
        	<label for="address">Address:</label>
        	<textarea class="form-control" id="address" name="address" rows="4" cols="" placeholder="123, Example Street...."></textarea>
        </div>
      	<div class="form-row">
        	<div class="form-group col-md-6">
          		<label for="city">City:</label>
          		<input type="text" class="form-control" id="city" name="city">
        	</div>
        	<div class="form-group col-md-4">
          		<label for="state">State</label>
          		<input type="text" class="form-control" id="state" name="state">
        	</div>
        	<div class="form-group col-md-2">
          		<label for="pincode">Pincode:</label>
          		<input type="text" class="form-control" id="pincode" name="pincode" maxlength="6">
        	</div>
        </div>
        <div class="form-row">
      		<div class="form-grop col-md-12 text-center">
      			<button type="submit" class="btn btn-outline-success my-4" id="register" name="create">Register</button>
      		</div>
      	</div>
    </form>
</div>
<?php include '../config/footer.php'; ?>
</body>
</html>