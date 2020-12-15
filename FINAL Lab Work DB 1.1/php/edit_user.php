<?php

session_start();

?>





<?php

require_once('../models/database.php');


$uname = "";
$password = "";
$email = "";
$type = "";



$uid = $_SESSION["update_uid"];



if ($_SERVER["REQUEST_METHOD"] == "POST") {

     
    /* $_SESSION["form_uname"] = $_REQUEST["uname"];
     $_SESSION["form_pass"] = $_REQUEST["password"];
     $_SESSION["form_email"] = $_REQUEST["email"];
     $_SESSION["form_type"] = $_REQUEST["type"];*/







       if (empty($_REQUEST["uname"])) {

          $uname_err = "Id Required";

          $_SESSION["update_uname_error"] = $uname_err;


         }else{

              $uname = test_input($_REQUEST["uname"]);
         } 
  

    if (empty($_REQUEST["password"])) {

          $password_err = "password Required";

          $_SESSION["update_password_error"] = $password_err;


         }else{

              $password = test_input($_REQUEST["password"]);
         } 

     
     if (empty($_REQUEST["email"])) {

          $email_err = "email Required";

          $_SESSION["update_email_error"] = $email_err;


         }else{

              $email = test_input($_REQUEST["email"]);
         } 


    if (empty($_REQUEST["type"])) {

          $type_err = "type Required";

          $_SESSION["update_type_error"] = $type_err;


         }else{

              $type = test_input($_REQUEST["type"]);
         } 


 $conn = getConnection();

$sql = "UPDATE user_table SET user_name = '$uname', password = '$password', email = '$email' ,type = '$type' WHERE id = '$uid'";

if (strlen($uname_err) == 0 && strlen($password_err) == 0 && strlen($email_err) == 0 && strlen($type_err) == 0) {

  
  if (mysqli_query($conn, $sql)) {


  	/*-unset($_SESSION["form_uname"]);*/
    unset($_SESSION["update_uname_error"]);
    /*-unset($_SESSION["form_pass"]);*/

    unset($_SESSION["update_password_error"]);
    /*-unset($_SESSION["form_email"]);*/
    unset($_SESSION["update_email_error"]);

    /*-unset($_SESSION["form_type"]);*/

    unset($_SESSION["update_type_error"]);


  header('location:../interface/edit_user.php');

} else {

  header('location:../interface/edit_user.php');

}

	

}else{

  header('location:../interface/edit_user.php');
}






	}



	function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  
  } 

?>