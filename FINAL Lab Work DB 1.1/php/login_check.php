<?php
	
	require_once('../models/database.php');

	if(isset($_POST['submit'])){

		
		$uname 	= $_POST['uname'];
		$password 	= $_POST['password'];

		
		if(empty($uname)){
			
			header('location: ../interface/login.php?msg=empty_username');

		}else if(empty($password)){
			
			header('location: ../interface/login.php?msg=empty_password');

		}else{

			$conn = getConnection();
			$sql = "select * from user_table where user_name='$uname' and password='$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){

				/*setcookie('isValid', 'true', time()+3600, '/');*/

				header('location: ../interface/profile_page_home.php');

			}else{

				header('location: ../interface/login.php?msg=invalid_user');
			
			}

		}
	}else{
		header('location: login.php');
	}
?>