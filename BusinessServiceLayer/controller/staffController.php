<?php
require_once '../../BusinessServiceLayer/model/staffModel.php';

class staffController{

	//add staff information
	function add(){

		$add = new staffModel();

		//get post records
		$name = $_POST['name'];
		$id = $_POST['id'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$officeTel = $_POST['officeTel'];
		$officeFax = $_POST['officeFax'];
		$groupsList = $_POST['groupsList'];

		$add = new staffModel();
		$req = $add->addStaff($name,$id,$phone,$address,$email, $officeTel, $officeFax, $groupsList);
	}
	//delete staff information
	function delete(){

		$delete = new staffModel();

		$id = $_POST['id'];

		$delete = new staffModel();
		$req = $delete->deleteStaff($id);
	}
	//view staff information
	function view(){
		
  		$view = new staffModel();

		$id = $_POST['id'];

		$view = new staffModel();
		$req = $view->viewStaff($id);
    }

    //view admin information
    function viewMyInfo(){
	   	$viewMyInfo = new staffModel();

		$id = 'A1000';

		$viewMyInfo = new staffModel();
		$req = $viewMyInfo->viewMyInfo($id);
    }
    //edit staff information
    function edit(){
		
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
		$req = $edit->editStaff($name,$id,$phone,$address,$email, $officeTel, $officeFax, $groupsList);
    }

}