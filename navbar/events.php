<!DOCTYPE html>
<html>
<head>
	<title>My Live Farming | Home</title>
	<link rel="icon"  href="../images/logo.jpg">
	
	<link rel="stylesheet" type="text/css" href="../CSS/gallery.css">
	<link rel="stylesheet" href="../CSS/index.css">
	<link rel="stylesheet" href="../CSS/register.css">
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
	<script type="text/javascript">
	$(document).ready(function(){
		$("#navbardrop").click(function(){
			$("#dropdownitem").animate({
				height:'toggle'});
		});
	});
	</script>
</head>
<body>
<?php include '../config/header.php'; ?>
<!-- Gallery Content -->
<div class="container gallery-container py-4">
    <h1 class="text-center font">Events Gallery</h1>
	<div class="border-top border-success w-25 mx-auto my-3"></div>
    <p class="page-description text-center">Interaction with the farmers and their teaching about website</p>
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">         
                        <img src="https://images.theconversation.com/files/142140/original/image-20161018-16191-1m8zgw0.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" alt="Books" class="w-100">
                    <div class="caption">
                        <h3 class="font">Mordern Farming</h3>
                        <p>New Mordern methods have been taught</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">                    
                        <img src="https://mk0mexiconewsdam2uje.kinstacdn.com/wp-content/uploads/2019/04/tobacco.jpg" class="w-100" alt="Bridge">

                    <div class="caption">
                        <h3 class="font">Helped the Farmers</h3>
                        <p>A Team went to the Farmer's fiels and helped them </p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6 col-md-4">
                <div class="thumbnail">                   
                        <img src="https://www.theindiaforum.in/sites/default/files/field/image/2019/10/01/Ramkumar%20Radhakrishnan%2C%20Wikimedia-1569929663.jpeg" class="w-100" alt="Tunnel">
                    <div class="caption">
                        <h3 class="font">Interaction with the farmer</h3>
                        <p>Well Organized Interaction conducted by our team</p>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    
                        <img src="https://images.unsplash.com/photo-1599372477648-bc918851435b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="w-100" alt="Coast">
                   
                    <div class="caption">
                        <h3 class="font">Village Events</h3>
                        <p>Village events in collecting products</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                   
                        <img class="w-100" src="https://qph.fs.quoracdn.net/main-qimg-2f54757f1132302f9bb1f7000f8e35b1" alt="Rails">
                   
                    <div class="caption">
                        <h3 class="font">Teaching Farmers</h3>
                        <p>Teaching Farmers new method</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    
                        <img src="https://i.ytimg.com/vi/W3P9deLFkk8/maxresdefault.jpg" class="w-100" alt="Traffic">
                    <div class="caption">
                        <h3 class="font">Indian Agriculture</h3>
                        <p>Proud to be Indian Farmer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php include '../config/footer.php';  ?>

</body>
</html>