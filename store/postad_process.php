<?php
require_once('../dbconnect.php');

?>

<?php
 
		if(isset($_POST)){
		    $product_name             = $_POST['product_name'];
		    $product_image            = $_POST['product_image'];
		    $product_description      = $_POST['product_description'];
		    $category                 = $_POST['category'];
		    $farmer_name              = $_POST['farmer_name'];
		    $price                    = $_POST['price'];
		    		    
		    $sql = "INSERT INTO products (product_name,product_image,product_description,category,farmer_name,price) VALUES(?,?,?,?,?,?)";
		    $stmtinsert = $db->prepare($sql);
		    $result=$stmtinsert->execute([$product_name,$product_image,$product_description,$category,$farmer_name,$price]);
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