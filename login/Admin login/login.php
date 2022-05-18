<?php 
session_start(); 
include "connection.php";

if (isset($_POST['Admin_Username']) && isset($_POST['Admin_Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Admin_Username = validate($_POST['Admin_Username']);
	$Admin_Password = validate($_POST['Admin_Password']);

	if (empty($Admin_Username)) {
		header("Location: indx.php?error=User Name is required");
	    exit();
	}else if(empty($Admin_Password)){
        header("Location: indx.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        #$Admin_Password = md5($Admin_Password);

		$sql = "SELECT * FROM admin WHERE Admin_Username='$Admin_Username' AND Admin_Password='$Admin_Password' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Admin_Username'] === $Admin_Username && $row['Admin_Password'] === $Admin_Password) {
            	$_SESSION['Admin_Username'] = $row['Admin_Username'];
            	$_SESSION['Admin_Name'] = $row['Admin_Name'];
            	$_SESSION['Admin_ID'] = $row['Admin_ID'];
            	header("Location:http://localhost/ivms/login/Admin%20login/h.php");
		        exit();
            }else{
				header("Location: indx.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: indx.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: indx.php");
	exit();
}