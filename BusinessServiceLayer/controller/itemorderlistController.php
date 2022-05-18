<?php
require_once '../../BusinessServiceLayer/model/itemorderlistModel.php';


class itemorderlistController{
	
function addorderstatus(){
	  //Add order status fucntion
$addorderstatus = new itemorderlistModel();
// $add->order_id = $_POST['order_id'];	
$ListID = $_POST['ListID'];
$id = $_POST['id'];
$OrderStatus = $_POST['OrderStatus'];
$Comment = $_POST['Comment'];

$addorderstatus = new itemorderlistModel();
$req = $addorderstatus->addorderstatus($ListID,$id,$OrderStatus,$Comment);

}


function vieworderstatus(){
        //To retrieve all order status information from itemorderlistmodel class.
        $vieworderstatus = new itemorderlistModel();
        return $vieworderstatus->vieworderstatus();
    }

function retrievebooking(){
        //To retrieve all order information from itemorderlistmodel class.
        $retrievebooking = new itemorderlistModel();
        return $retrievebooking->retrievebooking();
    }



function delete(){
		 //To get LIST and delete from itemorderlistmodel class.
		$delete = new itemorderlistModel();

		$ListID = $_POST['ListID'];

		$delete = new itemorderlistModel();
		$req = $delete->delete($ListID);
	}
}

