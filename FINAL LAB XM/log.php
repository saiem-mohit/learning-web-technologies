<?php
	session_start();
	require_once('header.php');
	require_once('userService.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: login.php?error=null_value');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);

			if($status){
				$_SESSION['username'] = $username;
				header('location: home.php');
			}else{
				header('location: login.php?error=invalid_user');
			}
		}
	}



?>