<?php
require_once '../../BusinessServiceLayer/model/itemModel.php';

class itemController{
	
function add(){
$add = new itemModel();
// get the post records
$ItemID = $_POST['ItemID'];
$itemName = $_POST['itemName'];
$qtorder = $_POST['qtorder'];
$qtreceived = $_POST['qtreceived'];
$unitPrice = $_POST['unitPrice'];
$location = $_POST['location'];
$dateOrder = $_POST['dateOrder'];
$dateArrived = $_POST['dateArrived'];
$companyName = $_POST['companyName'];
$companyAddress = $_POST['companyAddress'];
$senderName = $_POST['senderName'];
$truckPlateNo = $_POST['truckPlateNo'];

$add = new itemModel();
$req = $add->addItem($ItemID,$itemName,$qtorder,$qtreceived,$unitPrice,$location,$dateOrder,$dateArrived,$companyName,$companyAddress,
                     $senderName,$truckPlateNo);
}

function view(){
        //To retrieve all good information from goodModel class.
        $view = new itemModel();
        return $view->view();
    }
	
function viewOut(){
        //To retrieve all good information from goodModel class.
        $viewOut = new itemModel();
        return $viewOut->viewOut();
    }
	
function delete(){
        //To get good_id and delete from goodModel class.
        $delete = new itemModel();
        $ItemID = $_POST['ItemID'];
        if($req = $delete->deleteItem($ItemID)){
            echo "Success Delete!";
        }
    }
	
}

?>