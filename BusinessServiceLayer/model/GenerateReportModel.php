<?php
require_once '../../libs/database.php';

class GenerateReportModel {
 	
	function addreport($report_id, $admin_id, $reportdate) {
	
	$sql = "BEGIN;
		INSERT INTO generatereport (report_id, admin_id, reportdate)
		VALUES(:report_id, :admin_id, :reportdate);
		COMMIT";
	$args = [
		':report_id'=>$report_id,
		':admin_id'=>$admin_id, 
		':reportdate'=>$reportdate];

		DB::run($sql, $args);
		$message = "New report form has been added ";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}


		function viewInventory(){
        //To retrieve all good information from good table and send them to goodController class.
        $sql = "select $ItemID, $itemName, $qtorder, $qtreceived, $unitPrice, ($qtreceived * $unitPrice), $location, $dateOrder, 
                        $dateArrived, $companyName, $companyAddress, $senderName, $truckPlateNo from inventory ORDER BY $dateArrived DESC";
        return DB::run($sql);
        
    }

		function viewReportHistory($report_id)
		{
			$sql = "SELECT * FROM generatereport WHERE report_id=$'id'";

			DB::run($sql);
        	header('ViewReportHistory.php');

		}

	}


?>
		
		