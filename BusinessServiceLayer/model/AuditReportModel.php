<?php
require_once '../../libs/database.php';

class auditmodel {
 	
	function addaudit($auditID, $reportID, $description, $date, $status) {
	
	$sql = "BEGIN;
		INSERT INTO `auditreport` (Audit_id, report_id, Audit_name, Audit_date, Audit_result)
		VALUES(:audit_report_id, :report_id, :description, :reportdate, :status);
		COMMIT";
	$args = [
		':audit_report_id'=>$auditID,
		':report_id'=> $reportID,
		':description'=> $description,
		':reportdate'=>$date,
		':status' =>$status
		];
		
		DB::run($sql, $args);
		}
		
		function view(){
        //To retrieve all good information from good table and send them to goodController class.
        $sql = "select * from `auditreport`";
        return DB::run($sql);
    }
    function deleteaudit($auditID){
       $sql = "delete from`auditreport` WHERE Audit_id=:audit_report_id;";
	    $args = [':audit_report_id'=>$auditID];

	        return DB::run($sql, $args);
    }

    function editaudit($auditID,$reportID,$description,$date,$status){
    	$sql = "BEGIN;
    	        update auditreport set Audit_id='$auditID', report_id='$reportID', Audit_name='$description', Audit_date='$date', Audit_result='$status' WHERE report_id='$reportID';
    	        COMMIT";

		return DB::run($sql);
		
		if(DB::run($sql))
	    	{
	    		echo '<script type="text/javascript"> alert("Data Updated") </script>';
	    	}
	    	else
	    	{
	    		echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
	    	}

    }


    
}