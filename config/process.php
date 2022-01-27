<?php
require_once('dbconnect.php');

?>

<?php
 
		if(isset($_POST)){
		    $fullname = $_POST['fullname'];
		    $password = $_POST['password'];
		    $mobile   = $_POST['mobile'];
		    $category = $_POST['category'];
		    $address  = $_POST['address'];
		    $city     = $_POST['city'];
		    $state    = $_POST['state'];
		    $pincode  = $_POST['pincode'];
		    
		 
		    $sql = "INSERT INTO users (fullname,password,mobile,category,address,city,state,pincode) VALUES(?,?,?,?,?,?,?,?)";
		    $stmtinsert = $db->prepare($sql);
		    $result=$stmtinsert->execute([$fullname,$password,$mobile,$category,$address,$city,$state,$pincode]);
		    if($result){
		    	echo "Successfull Entered";
		    }
		    else{
		    	echo "Some Error";
		    }
		}else{
			echo "No Data Entered..";
		}

?>