<?php
session_start();
require_once('../config/dbconnect.php');

$email= $_POST['email'];
$password= $_POST['password'];

$sql = "SELECT * FROM admin WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);

if ($result) {
	$email = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if ($stmtselect->rowCount()>0) {
		$_SESSION['adminlogin'] = $email;
		echo "1";
		# code...
	}else{
		echo "There were no user for that";
	}
}else{
	echo "There were Errors";
}
