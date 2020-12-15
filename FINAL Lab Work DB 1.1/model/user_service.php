<?php

require_once('database.php');

function insertUser($user){


$conn = getConnection();


$uname = $user['uname'];
$password = $user['password'];
$email = $user['email'];
$type = $user['type'];

$sql = "INSERT INTO user_table  VALUES ('', '$uname', '$password', '$email', '$type')";



/*$result = mysqli_query($conn, $sql);*/


if(mysqli_query($conn, $sql)){

			return true; 

		}else{

			return "";

		}

}


function getAlluser(){


	$conn = getConnection();
	$sql = "select * from user_table";

		$result = mysqli_query($conn, $sql);
		$allusers = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($allusers, $row);
		}

		return $allusers;

}




?>