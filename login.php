<?php 

	$username = strtolower($_POST['user']);
	$password = strtolower($_POST['password']);
	
	if($username == "admin" && $password == "admin"){
		echo "success";
	}else{
		echo "error";
	}
?>