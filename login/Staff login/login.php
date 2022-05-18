<?php 
session_start(); 
include "connection.php";

if (isset($_POST['Staff_Username']) && isset($_POST['Staff_Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Staff_Username = validate($_POST['Staff_Username']);
	$Staff_Password = validate($_POST['Staff_Password']);

	if (empty($Staff_Username)) {
		header("Location: indx.php?error=User Name is required");
	    exit();
	}else if(empty($Staff_Password)){
        header("Location: indx.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        #$Staff_Password = md5($Staff_Password);

		$sql = "SELECT * FROM stafflogin WHERE Staff_Username='$Staff_Username' AND Staff_Password='$Staff_Password' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Staff_Username'] === $Staff_Username && $row['Staff_Password'] === $Staff_Password) {
            	$_SESSION['Staff_Username'] = $row['Staff_Username'];
            	$_SESSION['Staff_Name'] = $row['Staff_Name'];
            	$_SESSION['Staff_ID'] = $row['Staff_ID'];
            	header("Location:http://localhost/ivms/login/Staff%20login/h2.php");
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