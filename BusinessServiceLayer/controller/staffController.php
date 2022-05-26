<?php
require_once '../../BusinessServiceLayer/model/staffModel.php';
if (!isset($_SESSION)) {
	session_start();
}
class staffController
{

	//add staff information
	function add()
	{

		function input_data($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$nameErr = $idErr = $groupsListErr = $officeFaxErr = $officeTelErr = $emailErr = $addressErr = $phoneErr = "";
		$name = $id = $groupsList = $officeFax = $officeTel = $email = $address = $phone = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {



			$add = new staffModel();
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = input_data($_POST["name"]);
				// check if name only contains letters and whitespace  
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
					$nameErr = "Only alphabets and white space are allowed";
				}
			}

			//get post records
			// $name = $_POST['name'];

			if (empty($_POST["id"])) {
				$idErr = "ID is required";
			} else {
				$id = input_data($_POST["id"]);
				// check if mobile no is well-formed  
				if (preg_match("[\W]", $id)) {
					$idErr = "No special characters are allowed.";
				}
			}

			if (empty($_POST["phone"])) {
				$phoneErr = "Phone Number is required";
			} else {
				$phone = input_data($_POST["phone"]);
				// check if mobile no is well-formed  
				if (!preg_match("/^[0-9]*$/", $phone)) {
					$phoneErr = "Only numeric values are allowed.";
				}
				//check mobile no length should not be less and greator than 10  
				if (strlen($phone) > 12) {
					$phoneErr = "Must not contain more than 12 digits.";
				}
			}

			$address = $_POST['address'];
			if (empty($_POST["address"])) {
				$addressErr = "Address is required";
			} else {
				$address = input_data($_POST["address"]);
				// check if mobile no is well-formed  
				if (!preg_match('/^[a-zA-Z0-9-., ]+$/', $address)) {
					$addressErr = "No special characters are allowed.";
				}
			}


			if (empty($_POST["email"])) {
				$emailErr = "Email is required.";
			} else {
				$email = input_data($_POST["email"]);
				// check that the e-mail address is well-formed  
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format";
				}
			}

			if (empty($_POST["officeTel"])) {
				$officeTelErr = "Office Telephone Number is required.";
			} else {
				$officeTel = input_data($_POST["officeTel"]);
				// check if mobile no is well-formed  
				if (!preg_match("/^[0-9]*$/", $officeTel)) {
					$officeTelErr = "Only numeric values are allowed.";
				}
				//check mobile no length should not be less and greator than 10  
				if (strlen($officeTel) > 12) {
					$officeTelErr = "Must not contain more than 12 digits.";
				}
			}

			$officeFax = $_POST['officeFax'];

			if (empty($_POST["officeFax"])) {
				$officeFaxErr = "Office fax is required.";
			} else {
				$officeTel = input_data($_POST["officeFax"]);
				// check if mobile no is well-formed  
				if (!preg_match("/^[0-9]*$/", $officeFax)) {
					$officeFaxErr = "Only numeric values are allowed.";
				}
				//check mobile no length should not be less and greator than 10  
				if (strlen($officeFax) > 12) {
					$officeFaxErr = "Must not contain more than 12 digits.";
				}
			}



			if (empty($_POST["groupsList"])) {
				$groupsListErr = "Group List is required";
			} else {
				$groupsList = input_data($_POST["groupsList"]);
				// check if mobile no is well-formed  
				if (!preg_match('/^[a-zA-Z0-9-., ]+$/', $groupsList)) {
					$groupsListErr = "No special characters are allowed.";
				}
			}

			if ($idErr == "" && $nameErr == "" && $groupsListErr == ""  && $officeFaxErr == ""  && $officeTelErr == ""  && $emailErr == ""  && $addressErr == ""  && $phoneErr == "") {
				$_SESSION['success'] = $name . " successfully added to the system!";
				$_SESSION['nameErr'] = '';
				$_SESSION['idErr'] = $idErr;
				$_SESSION['groupsListErr'] = '';
				$_SESSION['officeFaxErr'] = '';
				$_SESSION['officeTelErr'] = '';
				$_SESSION['emailErr'] = '';
				$_SESSION['addressErr'] = '';
				$_SESSION['phoneErr'] = '';

				$req = $add->addStaff($name, $id, $phone, $address, $email, $officeTel, $officeFax, $groupsList);
			} else {
				$_SESSION['success'] = "Please correct the errors.";
				$_SESSION['nameErr'] = $nameErr;
				$_SESSION['idErr'] = $idErr;
				$_SESSION['groupsListErr'] = $groupsListErr;
				$_SESSION['officeFaxErr'] = $officeFaxErr;
				$_SESSION['officeTelErr'] = $officeTelErr;
				$_SESSION['emailErr'] = $emailErr;
				$_SESSION['addressErr'] = $addressErr;
				$_SESSION['phoneErr'] = $phoneErr;
			}
		}
	}
	//delete staff information
	function delete()
	{

		$delete = new staffModel();

		$id = $_POST['id'];

		$delete = new staffModel();
		$req = $delete->deleteStaff($id);
	}
	//view staff information
	function view()
	{

		$view = new staffModel();

		$id = $_POST['id'];

		$view = new staffModel();
		$req = $view->viewStaff($id);
	}

	//view admin information
	function viewMyInfo()
	{
		$viewMyInfo = new staffModel();

		$id = 'A1000';

		$viewMyInfo = new staffModel();
		$req = $viewMyInfo->viewMyInfo($id);
	}
	//edit staff information
	function edit()
	{

		$edit = new staffModel();

		$name = $_POST['name'];
		$id = $_POST['id'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$officeTel = $_POST['officeTel'];
		$officeFax = $_POST['officeFax'];
		$groupsList = $_POST['groupsList'];


		$edit = new staffModel();
		$req = $edit->editStaff($name, $id, $phone, $address, $email, $officeTel, $officeFax, $groupsList);
	}
}
