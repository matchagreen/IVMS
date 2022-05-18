<?php
require_once '../../BusinessServiceLayer/model/AuditReportModel.php';


class auditcontroller{

//To add data of audit report from AuditReportModel class.
function add(){
	
$audit = new auditmodel();
	
$auditID = $_POST["audit_report_id"];
$reportID = $_POST["report_id"];
$description = $_POST["description"];
$date = $_POST["reportdate"];
$status = $_POST['status'];


$audit= new auditmodel();
$req = $audit->addaudit($auditID, $reportID, $description, $date, $status);

}

//To retrieve all audit report information from AuditReportModel class.
function viewAll(){
        //To retrieve all good information from goodModel class.
        $audit = new auditmodel();
        return $view->view();
    }

//To delete selected audit report information from AuditReportModel class by getting the Audit_ID.
    function delete(){
        //To get good_id and delete from goodModel class.
        $audit = new auditmodel();
        $auditID = $_POST["audit_report_id"];
        if($audit->deleteaudit($auditID)){
            header('Location:auditlist.php');
        }
    }

//To edit selected audit report information from AuditReportModel class by getting the Audit_ID.
    function edit(){
        $audit = new auditmodel();

        $auditID = $_POST['audit_report_id'];
        $reportID = $_POST['report_id'];
        $description = $_POST['description'];
        $date = $_POST['reportdate'];
        $status = $_POST['status'];

        $audit = new auditmodel();
        $req = $audit->editaudit($auditID,$reportID,$description,$date,$status) ;

    }

}
