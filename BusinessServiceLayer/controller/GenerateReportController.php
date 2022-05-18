<?php
require_once '../../BusinessServiceLayer/model/GenerateReportModel.php';

class GenerateReportController{
    
function add(){

	$add = new GenerateReportModel();
// get the post records
	$report_id = $_POST['report_id'];
	$admin_id = $_POST['admin_id'];
	$reportdate = $_POST['reportdate'];

	$add = new GenerateReportModel();
	$req = $add->addreport($report_id,$admin_id,$reportdate);
}

function viewInventory(){
        //To retrieve all good information from goodModel class.
        $viewInventory = new GenerateReportModel();
        return $viewInventory->viewInventory();
    }
function view(){
	$view = new GenerateReportController();
	$report_id = new $_POST['report_id'];
	$view = new GenerateReportModel();
	$req  = $view -> view($report_id);
}
}
?>