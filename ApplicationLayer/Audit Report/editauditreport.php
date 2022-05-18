<?php
	require_once '../../BusinessServiceLayer/controller/AuditReportController.php';	

	$audit = new AuditController();

	if(isset($_POST['edit']))
	{
  		$audit->edit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/allExcludeLogin.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<title>IVMS | Edit Audit Report</title>
	<style>
	body {
  margin: 0;
}

		table{
		text-align: left;
		width: 35%;
		margin-left: auto;
        margin-right: auto;
        margin-top: -170px;
	}

		input[type=text],[type=date],select[name=status]  {
		  width: 100%;
		  height: 33px;
		  margin: 8px 0px;
		  margin-left: 0px;
		  box-sizing: border-box;
		}

		input[type=file]{
		  width: 100%;
		  height: 33px;
		  margin: 8px 0px;
		  padding-top: 7px;
		  box-sizing: border-box;
		}

		th{
			width: 20%;
		}

		.size{width:100%; height: 100px}

		.button{
			width: 25%;
			height: 40px;
		}
		.footer{
			height:85px;
		}
		.activeNav {
		  background-color: #7EDADB;
		}

		.auditmenu a{
			width: 10%;
			height: 40px;
		}
		
	</style>
	<!-- 1. HEADER-->
	<div class="header" >
	<h1>AUDIT REPORT</h1>
	</div>
	<!-- SAMPAI SINI -->
</head>
<body>
	<!-- 2. NAVIGATION BAR-->
  <ul>

  <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageStaffInformation/myInfo.php">STAFF</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
</ul>
	<!--SAMPAI SINI-->
	
	<br><br>
<div style="background-color:white; padding-bottom: 8%; margin-left:0px; margin-right:0px; margin-top: 25px"  >
<h2><center><br><br><br>&nbsp EDIT AUDIT REPORT</center></h2>

<!--AUDIT MENU-->
<div class="auditmenu">
    <a class="button" href="auditreport.php">Add Report</a><br>
    <a class="button" href="auditlist.php">View Report</a><br>
    <a class="button"  href="deleteauditreport.php">Delete Report</a>
</div>
<!--SAMPAI SINI-->

<!--FORM-->
<!--TO EDIT DATA-->
<form action="" method="post" name="frmUser">
	<table>

		<tr>
			<th>Audit Report ID</th>
			<td width="100%"><input type="text" name="audit_report_id" placeholder="Audit Report ID"><td>
		</tr>
		<tr>
			<th>Report ID</th>
			<td width="100%"><input type="text" name="report_id" placeholder="Report ID"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td width="100%"><input type="text" name="description" placeholder="Report Description"></td>
		</tr>
		<tr>
			<th>Date</th>
			<td><input width="100%" type="date" name="reportdate"></td>
		</tr>
		<tr>
			<th>Report Status</th>
			<td>
				<select name="status">
					<option value="Unqualified opinion">Unqualified opinion</option>
					<option value="Qualified opinion">Qualified opinion</option>
					<option value="Adverse Opinion">Adverse Opinion</option>
					<option value="Disclaimer of opinion">Disclaimer of opinion</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center; padding-top: 10px;">
			<i class="fa fa-save" style="padding-right: 10px;"></i> <input class="button" type="submit" name="edit" value="Submit">
			</td>
		</tr>
	
		</form>
	</table>
<!--FORM-->


<!-- 3. FOOTER-->
</div>
<div class="footer"></div>
<!-- SAMPAI SINI -->

</body>
</html>