<?php 
require_once('../config/dbconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
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
    <link rel="icon"  href="../images/logo.jpg">
	<link rel="stylesheet" href="../CSS/index.css">
	<link rel="stylesheet" href="../CSS/admin.css">
    <title>My Live Farming| Farmers</title>
</head>
<body>
<nav class=" bg navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation">
	<a class="navbar-brand" href="../index.php"><img class=" d-inline-block align-center rounded-circle" src="../images/logo.jpg" alt="logo" width="117px" height="80px" title="Logo"><span class="mr-5" style="font-family:'Reggae One', cursive;"> My <span class="font-weight-bold">LIVE</span> Farming</span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link" href="../index.php"> Home </a></li>
			<li ><a class="nav-link active" href="farmer_table.php">Farmers</a></li>
			<li ><a class="nav-link" href="complaint.php">View Complains</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item"><a class="nav-link links" style="background-color: #b23b3b;color: white!important;border-radius: 10px;" href="adminpage.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
		</ul>
	</div>	
</nav>

<h2 class="text-center font-weight-bold font py-4"><u>Farmers Data</u></h2>
<div class="container">
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Full Name</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Pincode</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$a=1;
				$stmt=$db->prepare("SELECT * FROM farmers");
				$stmt->execute();
				$farmers = $stmt->fetchAll();
				foreach ($farmers as $farmers){
				    ?>
				    <tr>
				    	<td>
				    	<?php 
				    	   echo $farmers['id'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['fullname'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['mobile'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['address'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['city'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['state'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['pincode'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $farmers['date'];
				    	?>
				    	</td>
				    </tr>
				<?php 	
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
					
					