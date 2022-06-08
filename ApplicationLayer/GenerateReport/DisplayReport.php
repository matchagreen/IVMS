<!DOCTYPE html>
<html>
<style type="text/css">
body{
    background-color:#7EDADB;
}
table { /*guna untuk table*/
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border: 1px solid black;
  width: 100%;}
  td{
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 8px;
  	background-color: white;
}
  	th {
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 8px;
  	background:black;
	color: white;
  
}

ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333;
		  font-family: cooper black;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 20px;
		  text-decoration: none;
		}

		li a:hover:not(.active) {
		  background-color: #B6D5D5;
		}

		.activeNav {
		  background-color: #7EDADB;
		}
        .footer{
        position: absolute;
    background-color: #508585;
    height: 50px;
    padding: 2px 25px 7px;
    width:100%;
        bottom:0;
        left:0;
  }
  .column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;

		  width:100%;
		  padding: 10px 25px 7px;
		  height: 50px;
		}
    /*Guna utk button dekat nav bar utk generate report*/
		.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 15px;
  cursor: pointer;
  display: inline-block;
}
/*Guna utk button dekat nav bar utk generate report*/
.success:hover {
  background-color: #508585;
  color: white;
}
/*Guna utk button dekat nav bar utk generate report*/
.active, .btn:hover {
  background-color: #508585;
  color: white;
}
    .body-container{
        width:70%;
        margin:auto;
       
    }
    .header{
        text-align:center;
    }
    .back-container{
      padding-top:5%;
      text-align:center;
    }
</style>
<head>
	<title>Generate Report</title>
	<div class="header" >
	<h1 >INVENTORY MANAGEMENT SYSTEM</h1>
	</div></head>
	<body>
<ul>
  <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageStaffInformation/myInfo.php">STAFF</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
  </ul>
<div class="column1">
      <div>
        <center>
          <button class="btn active">Report Form</button>
          <button class="btn success"><a href="InventoryInItem.php">Inventory List</a></button>
          <button class="btn success"><a href="ViewReportHistory.php">Report History</a></button>
          </center>
          <br><br>
      </div>
    </div>
   
<div class="body-container">
<?php 
extract($_POST);
?>
<div class="header"><h1><?php echo $report_title; ?>(<?php echo $reportstartdate; ?> To <?php echo $reportenddate; ?>)</h1></div>
<table>
    <tr>
<th>Booking ID</th>
<th>Item ID</th>
<th>ID</th>
<th>Item Quantity</th>
<th>Date Booking</th>
<th>Booking Time</th>
<th>Pick Up Date</th>
</tr>
<?php 
$connection = mysqli_connect("localhost","root","","myDatabase");
$result = mysqli_query($connection, "SELECT * FROM booking WHERE DateBooking between '$reportstartdate' AND '$reportenddate'");


            while($row = mysqli_fetch_array($result))
                {
            ?>
                    <tr>
                    <td><?php echo $row['BookingID'];?></td>
                    <td><?php echo $row['ItemID'];?></td>
					<td><?php echo $row['id'];?></td>
                    <td><?php echo $row['ItemQuantity'];?></td>
					<td><?php echo $row['DateBooking'];?></td>
                    <td><?php echo $row['BookingTime'];?></td>
                    <td><?php echo $row['PickUpDate'];?></td>
                    </tr>
                <?php
                }
                
                ?>
            </table>
            <div class="back-container">
            <a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">Back</a>
          </div>
            <div class="footer">
<p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
</div>
</div>