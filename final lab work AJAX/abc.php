<?php
	require_once('db.php');
	$Name = $POST_['pName'];
	$Email = $POST_['pEmail'];
	$Gender = $POST_['pGender'];
	$Dob = $POST_['pDob'];
   	$Blood= $POST_['pBlood'];
	$Deg = $POST_['pDeg'];

	$conn = getConnection();
		$sql = "insert into person values(name = '$Name', email = '$Email', gender = '$Gender', dob = '$Dob', bloodgroup = '$Blood', degree = '$Deg')";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}