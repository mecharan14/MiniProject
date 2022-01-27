<!----------------------------------------------Top Bar--------------------------------------------->
<!-----------------------------------------------NavBar--------------------------------------------->
<nav class=" bg navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation">
	<a class="navbar-brand" href="../index.php"><img class=" d-inline-block align-center rounded-circle" src="../images/logo.jpg" alt="logo" width="117px" height="80px" title="Logo">
	<span class="brand-title font-weight-bold" style="font-family: 'Fjalla One', sans-serif;"> My Live Farming</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link" href="../index.php"> Home </a></li>
			<li ><a class="nav-link" href="../navbar/events.php">Events</a></li>
			<li ><a class="nav-link" href="../navbar/blog.php">Blog</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle links " href="#" id="navbardrop" data-toggle="dropdown"><i class="ph-sign-in-bold"></i> Login</a>
				<div class="dropdown-menu" id="dropdownitem">
					<a class="dropdown-item " href="../admin/Admin_login.php"><i class="ph-user-circle-gear"></i> Admin Login</a>
					<a class="dropdown-item " href="../user/user.php"><i class="ph-users-three"></i> User Login</a>
					<a class="dropdown-item " href="../farmer/farmer_login.php"><i class="ph-leaf"></i> Farmer Login</a>
				</div>
			<li class="nav-item"><a class="nav-link links" href="../navbar/Register.php"><i class="ph-user-plus-bold"></i> Register</a></li>
		</ul>
	</div>	
</nav>