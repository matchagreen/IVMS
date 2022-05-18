<?php
require_once '../../BusinessServiceLayer/controller/itemorderlistController.php';

$addorderstatus = new itemorderlistController();

if(isset($_POST['Submit'])){
   
    $addorderstatus->addorderstatus();
	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD ORDER STATUS</title>
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border: 1px solid black;
  width: 100%;}
  td{
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 8px;
  	background-color: white;}
  	th {
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 8px;
  	background:black;
	color: white;}
  	/*NAVIGATION BAR*/
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
body{ background-color: #7EDADB; }
.header{
		/*font*/
		color:white;  font-family:Stencil; font-size: 26px; text-align: center;
		/*display*/
		background-color: #508585;
		height: 120px;
		padding: 2px 25px 7px;
	}
/* Footer */
.footer{
        position: absolute;
		background-color: #508585;
		height: 50px;
		width:1810px;
		padding: 2px 25px 7px;
		top: 780px;
        left: 2px;
	}
.button {
  background-color: #508585;
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  font-family: Myriad Pro Light;
  margin: 4px 2px;
  cursor: pointer;
}
/*UNTUK TAJUK MODULE*/
h2{font-family: Myriad Pro Light;}
.center {
  margin-left: auto;
  margin-right: auto;
}
.backgroundbox {
 		  background-color: white;
		  margin-left: 200px; margin-right: 200px; margin-top: 20px;
		  float: center
		  width:250px;
		  padding: 25px 25px 25px;
		  height: 600px;}

  .none {border-style: none;
  	background-color: none;}
	
  .btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 15px;
  cursor: pointer;
  display: inline-block;
}

.success:hover {
  background-color: #b4d463;
  color: white;
}

.active, .btn:hover {
  background-color: #04AA6D;
  color: white;
}


</style>
<body>
<div class="header">
  <h1>INVENTORY MANAGEMENT SYSTEM</h1>
</div>
	<!--NAVIGATION BAR -->
<ul>
      <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageStaffInformation/myInfo.php">STAFF</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
  </ul>
 
  	<!-- /*THE WHITE BOX*/-->
	<!-- /*THE OPTION FOR METHOD*/-->
 
 <div class="backgroundbox">

  <div>
  <center>
  <a href="retrieve booking.php" target="_blank">Retrieve Booking Data</a>
  &nbsp;
  &nbsp;
  &nbsp;
  <button class="btn active">Add Order Status</button>
  &nbsp;
  &nbsp;
  &nbsp;
  <a href="view order status.php" target="_blank">View Order Status</a>
  &nbsp;
  &nbsp;
  &nbsp;
  <a href="delete order status.php" target="_blank">Delete Order Status</a> 
		  
  </center>
  <br><br><br>

 
 <!-- /*ADD ORDER STATUS PROCESS*/-->
<fieldset>
<legend>ADD ORDER STATUS</legend>
<form name="frmContact" method="post" action="">
<p>
<label for="ListID">LIST ID:</label>
&emsp;
&emsp;
&emsp;

<input type="text" name="ListID" id="ListID">
</p>
<br>
<p>
<label for="id">STAFF ID:</label>
&emsp;
&emsp;
&emsp;

<input type="text" name="id" id="id">
</p>
<br>
<p>
<label for="OrderStatus">ORDER STATUS:</label>
&emsp;
<input type="text" name="OrderStatus" id="OrderStatus">
</p>
<br>

<br>
<p>
<label for="Comment">COMMENT:</label>
&emsp;
&emsp;
&emsp;
<input type="Comment" name="Comment" id="Comment">
</p
<p>&nbsp;</p>
<p>
<input class="button" type="submit" name="Submit" id="Submit" value="ADD ORDER STATUS">
</p>
</form>
</fieldset>

 <div>
  <div style="margin-top:100px;" class="footer">
  <p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
  </div>
</body>
</html>