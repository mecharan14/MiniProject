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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
			<li ><a class="nav-link" href="farmer_table.php">Farmers</a></li>
			<li ><a class="nav-link active" href="complaint.php">View Complains</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item"><a class="nav-link links" style="background-color: #b23b3b;color: white!important;border-radius: 10px;" href="adminpage.php?logout=true"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
		</ul>
	</div>	
</nav>

<h2 class="text-center font-weight-bold font py-4"><u>Messages</u></h2>
<div class="container">
	<div class="row">
		<table class="table table-hover shadow-lg">
			<thead>
				<tr>
					<th>Email</th>
					<th>Message Type</th>
					<th>Message</th>
					<th>Date</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$a=1;
				$stmt=$db->prepare("SELECT * FROM complaint");
				$stmt->execute();
				$complaint = $stmt->fetchAll();
				foreach ($complaint as $complaint){
				    ?>
				    <tr>
				    	<td>
				    	<?php 
				    	   echo $complaint['email'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $complaint['message_type'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $complaint['message'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $complaint['date'];
				    	?>
				    	</td>
				    	<td>
				    	<?php 
				    	   echo $complaint['status'];
				    	?>
				    	</td>
				    </tr>
				<?php 	
				}
				?>
				</tbody>
			</table>
		</div>
		<div class="my-4">
			<h4 class="text-center font" id="msg"> Updating Status of Messages</h4>
			<form class="border border-success py-4 px-4" action="complaint.php" method="post">
  				<div class="form-group">
   					<label for="email">Email address</label>
    				<input type="email" class="form-control" name="email" id="email" placeholder="Enter email address to be solved">
  				</div>
  				<div class="row mt-3">
  				<div class="form-group text-right col-md-6">
  					<input type="submit" name="solve" id="solve" class="btn btn-outline-success" value="solve">
  				</div>
  				<div class="form-group text-left col-md-6">
  					<input type="submit" name="delete" id="delete" class="btn btn-outline-danger" value="Delete Solved">
  				</div>
  				</div>
			</form>
		</div>
		<?php 
			$connect = mysqli_connect("localhost", "root", "", "agriculture");
			if(isset($_POST["solve"])){
				$email = $_POST['email'];
				$query = "UPDATE complaint SET status='solved' WHERE email='$email'";
				if(mysqli_query($connect, $query)){
					echo '<script>swal({
  						title: "Solved",
  						text: "You solved the issue right...",
  						icon: "success",
  						button: "close",
					});</script>';
				}
			}elseif (isset($_POST['delete'])) {
				$delquery = "DELETE FROM complaint WHERE status='solved'";
				if(mysqli_query($connect, $delquery)){
					echo '<script>swal({
  						title: "Deleted successfully",
  						text: "You have successfully Deleted....",
  						icon: "error",
  						button: "close",
					});</script>';
				}
			}
		?>
	</div>
</body>
</html