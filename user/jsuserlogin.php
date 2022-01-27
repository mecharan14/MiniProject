<?php
session_start();
require_once('../config/dbconnect.php');

$fullname= $_POST['fullname'];
$id= $_POST['id'];
$password= $_POST['password'];

$sql = "SELECT * FROM users WHERE fullname = ? AND id = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$fullname, $id,$password]);

if ($result) {
	$email = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if ($stmtselect->rowCount()>0) {
		$_SESSION['userlogin'] = $fullname;
		echo "1";
		# code...
	}else{
		echo "There were no user for that";
	}
}else{
	echo "There were Errors";
}
