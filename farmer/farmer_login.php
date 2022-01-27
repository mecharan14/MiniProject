<?php
	session_start();

	if(isset($_SESSION['farmerlogin'])){
		header("Location:farmer_page.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Farmer-Login</title>
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
	
	<style type="text/css">
	
		.active-sub{
			background-color: #82b440;
		}
		.font{
			font-family: 'Comfortaa', cursive;
		}
	</style>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$("#navbardrop").click(function(){
			$("#dropdownitem").animate({
				height:'toggle'});
		});
	});
	$(document).ready(function(){
		$("#myCarousel").carousel("cycle");
	  });

	$(function(){
		$('#farmer_login').click(function(e){
			var valid = this.form.checkValidity();

			if(valid){
				var fullname	= $('#fullname').val();
				var id 			= $('#id').val();
				var password 	= $('#password').val();
			}
			e.preventDefault();
			$.ajax({
				type: 'POST',
				url: 'jsfarmerlogin.php',
				data: {fullname:fullname,id:id,password:password},
				success: function(data){
					if ($.trim(data)==="1") {
						setTimeout(' window.location.href="farmer_page.php"',2000);
					}
				},
				error:function(data){
					alert('there are errors');
				}
			});
		});
	});
	</script>
</head>
<body>
<?php include '../config/header.php';  ?>
<!---------------------------- Admin Form-------------------- -->
<div class="container my-4"><h1 class="font text-center">Farmer Login</h1></div><div class="border-top border-success w-25 mx-auto my-3"></div>
<div class="container mb-4 shadow-lg">
	<form method="post" class="p-4">
	  <div class="form-group">
	    <label for="fullname">Full name:</label>
	    <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="emailHelp" placeholder="Enter name" required="required">
	    <small class="text-muted"> use: suresh </small>
	  </div>
	  <div class="form-group">
	    <label for="id">Farmer ID:</label>
	    <input type="number" class="form-control" name="id"  id="id" placeholder="Enter ID Number" required="required">
	    <small class="text-muted"> use ID : 4 </small>
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required="required">
	    <small class="text-muted"> password: suresh007 </small>
	  </div>
	  <div class="form-group">
		  <input type="button" name="button" id="farmer_login" class="form-control btn btn-outline-success" value="Login" >
		  </div>
	</form>
</div>
<?php include '../config/footer.php';  ?>
</body>
</html>




