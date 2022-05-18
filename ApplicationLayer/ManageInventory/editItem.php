<?php

$db = mysqli_connect("localhost","root","","myDatabase");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$ItemID = $_GET['ItemID']; // get id through query string

$qry = mysqli_query($db,"select ItemID, itemName, qtorder, qtreceived, unitPrice, location, dateOrder, dateArrived, companyName, 
companyAddress, senderName, truckPlateNo from inventory where ItemID='$ItemID'"); // select query

$row = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
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
	
    $edit = mysqli_query($db,"update inventory set ItemID='$ItemID', itemName='$itemName', qtorder='$qtorder', qtreceived='$qtreceived', unitPrice='$unitPrice', 
	location='$location', dateOrder='$dateOrder', dateArrived='$dateArrived', companyName='$companyName', 
	companyAddress='$companyAddress', senderName='$senderName', truckPlateNo='$truckPlateNo' where ItemID='$ItemID'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:In_Item.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<title>IVMS | Edit Item</title>
<style>

/* Header */
.header {
  text-align: center;
  background: #508585;
  color: white;
  font-size: 26px;
  font-family: cooper black;
  width:1733px;
  height:120px;
  padding: 2px 25px 7px;
}

/* Column(kotak putih) */
.column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;
		  float: left;
		  width:1733px;
		  padding: 0px 25px 7px;
		  height: 1065px;
		}
		
/* Table */
table{
	width: 65%;
    margin:auto;
}
td{
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 10px;
	text-align: left;
	width: 40%;
}

.col{
	width: 40%;
	position: right;

}

.userin{
	width: 55%;
	height: 33px;
}

/* Save Button */
.button{
	display: inline-block;
	text-align: center;
	padding: 13px 45px 13px;
	border:none;
	background-color: #508585;
	color: white;
	font-size: 15px;
	border-radius: 15px;
}

.button:hover {
  background-color: #ddd;
  color: black;
}

/* Navigation Bar */
ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  font-family: cooper black;
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
		
body{ background-color: #7EDADB }

.center {
  margin-left: auto;
  margin-right: auto;
}

/* Footer */
.footer{
        position: absolute;
		background-color: #508585;
		height: 50px;
		width:1733px;
		padding: 2px 25px 7px;
		top: 900px;
        left: 7px;
	}

	
</style>
</head>
<body>
<!--HEADER-->
	<div class="header">
  <h1>INVENTORY MANAGEMENT SYSTEM</h1>
</div>

<!--NAVIGATION BAR-->
<ul>
  <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageStaffInformation/myInfo.php">STAFF</a></li>
  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
	</ul>

<!--COLUMN 1-->
<div class="column1">
<!--EDIT ITEM DATA-->
	<form action="" method="POST">
    <table>
    	<br><br><br><tr>
    		<td colspan="3"><b>Item ID: </b>
			<input class="userin" style="margin-left:80px;" type="text" name="ItemID" value="<?php echo $row['ItemID']; ?>" readonly></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Item Name: </b>
			<input class="userin" style="margin-left:60px;" type="text" name="itemName" value="<?php echo $row['itemName']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Quantity Order: </b>
			<input class="userin" style="margin-left:30px;" type="text" name="qtorder" value="<?php echo $row['qtorder']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Quantity Received: </b>
			<input class="userin" style="margin-left:13px;" type="text" name="qtreceived" value="<?php echo $row['qtreceived']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Unit Price(RM): </b>
			<input class="userin" style="margin-left:33px;" type="text" name="unitPrice" value="<?php echo $row['unitPrice']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Location: </b>
			<input class="userin" style="margin-left:80px;" type="text" name="location" value="<?php echo $row['location']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Date Ordered: </b>
			<input class="userin" style="margin-left:45px;" type="date" name="dateOrder" value="<?php echo $row['dateOrder']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Date Arrived: </b>
			<input class="userin" style="margin-left:50px;" type="date" name="dateArrived" value="<?php echo $row['dateArrived']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Company Name: </b>
			<input class="userin" style="margin-left:30px;" type="text" name="companyName" value="<?php echo $row['companyName']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Company Address: </b> 
			<input class="userin" style="margin-left:15px;" type="text" name="companyAddress" value="<?php echo $row['companyAddress']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Sender Name: </b><input class="userin" style="margin-left:50px;" name="senderName" value="<?php echo $row['senderName']; ?>" required></td>
    	</tr>
		<tr>
    		<td colspan="3"><b>Truck Plate No: </b><input class="userin" style="margin-left:40px;" name="truckPlateNo" value="<?php echo $row['truckPlateNo']; ?>" required></td>
    	</tr>
    	<tr><td><input class="button" style="margin-left:380px;" type="submit" name="update" value="Save" ></td></tr>
    </table>
	</form>
</div>

<!--FOOTER-->
<div style="margin-top:380px;" class="footer">
  <p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
  </div>

	
</body>
</html>