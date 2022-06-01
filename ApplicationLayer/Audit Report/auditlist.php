<?php
require_once '../../BusinessServiceLayer/controller/AuditReportController.php';

$audit = new auditcontroller();	

?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `auditreport` WHERE CONCAT(`Audit_id`, `report_id`, `Audit_name`, `Audit_date`,`Audit_result`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `auditreport`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "mydatabase");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/allExcludeLogin.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<title>IVMS | Audit Report List</title>
	<style>
	body {
  margin: 0;
}

		table{
		width: 40%;
		margin-left: auto;
        margin-right: auto;
        margin-top: -140px;
        margin-bottom: 20px;

	}
	td{
		text-align: center;
		padding-top: 10px;
		padding-bottom: 10px;
	}

		.size{
			width:50%; 
			height: 100px
		}
		.footer{
			height:87px;
		}
		.activeNav {
		  background-color: #7EDADB;
		}

		.auditmenu a{
			width: 10%;
			height: 40px;
		}
		.editbtn{
			text-decoration: none;
		}
		
	</style>
	<!-- 1. HEADER-->
	<div class="header" >
	<h1>AUDIT REPORT</h1>
	</div>
	<!-- SAMPAI SINI OK-->
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
<h2><center><br><br><br>&nbsp AUDIT REPORT</center></h2>

<!--AUDIT MENU-->
<div class="auditmenu">
    <a class="button" href="auditreport.php">Add Report</a><br>
    <a class="button" href="auditlist.php" style="background-color: grey;">View Report</a><br>
    <a class="button"  href="deleteauditreport.php">Delete Report</a>
</div>
<!--SAMPAI SINI-->

<!--FORM-->
<!--TO RETRIEVE DATA-->
<form action="" method="post">
<input type="text" name="valueToSearch" placeholder="Value To Search" ><br>
<input type="submit" name="search" value="Filter"><br>
</form>
	<table>
		<tr>
				<td style="text-align: center; background-color: black; color:white;">Audit ID</td>
				<td style="text-align: center;background-color: black; color:white;border: none;">Report ID</td>
				<td style="text-align: center;background-color: black; color:white;">Description</td>
				<td style="text-align: center; width: 100px;background-color: black; color:white;">Date</td>
				<td style="text-align: center;background-color: black; color:white;">Status</td>
				<td style="text-align: center;background-color: black; color:white;">Edit</td>
		</tr>
			<?php while($row =mysqli_fetch_array($search_result)):?>
				<tr>
                    <td><?php echo $row['Audit_id'];?></td>
                    <td><?php echo $row['report_id'];?></td>
                    <td><?php echo $row['Audit_name'];?></td>
                    <td><?php echo $row['Audit_date'];?></td>
					<td><?php echo $row['Audit_result'];?></td>
					<td><a class="editbtn" href="editauditreport.php?Audit_id=<?php echo $row["Audit_id"]; ?>">Edit</a></td>
                </tr>
				<?php endwhile;?>
			</table>
			
<!--FORM-->

<!-- 3. FOOTER-->
</div>
<div class="footer"></div>
<!-- SAMPAI SINI -->
</script>
</body>
</html>
