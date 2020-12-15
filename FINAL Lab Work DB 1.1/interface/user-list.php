<?php

	require_once('../models/usersService.php');

	$allusers = getAlluser();


?>





<?php


if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "user_inserted"){

			echo "username inserted successfully";
		}

		/*if($_GET['msg'] == "null_username"){
			echo "Username field is empty...";
		}
		if($_GET['msg'] == "null_password"){
			echo "Password field is empty...";
		}*/
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>user list</title>
</head>
<body>
   <a href="home.php">Back</a> |
	<a href="../php/log_out.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
			<td>ACTION</td>
		</tr>

	<?php for($i=0; $i< count($allusers); $i++){ ?>

			<tr>
				<td><?=$allusers[$i]['id']?></td>
				<td><?=$allusers[$i]['user_name']?></td>
				<td><?=$allusers[$i]['password']?></td>
				<td><?=$allusers[$i]['email']?></td>
				<td><?=$allusers[$i]['type']?></td>
				<td>
					<a href="edit_user.php?id=<?=$allusers[$i]['id']?>">EDIT</a> | 
					<a href="delete_user.php?id=<?=$allusers[$i]['id']?>">DELETE</a>
				</td>
			</tr>
	<?php } ?>

	</table>

</body>
</html>