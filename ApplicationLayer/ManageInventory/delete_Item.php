<?php
require_once '../../BusinessServiceLayer/controller/itemController.php';


$inventory = new itemController();

if(isset($_POST['Delete'])){
   
    $inventory->delete();
	header("location:In_Item.php");
} 	
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<title>Delete Item</title>
<style>

/* Header */
.header {
  text-align: center;
  background: #508585;
  color: white;
  font-size: 26px;
  font-family: cooper black;
  width:1755px;
  height:120px;
  padding: 2px 25px 7px;
}

/* Column(kotak putih) */
.column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;
		  float: left;
		  width:1753px;
		  padding: 0px 25px 7px;
		  height: 520px;
		}
		
/* Table */
table{
	width: 65%;
    margin-top:150px;
}
td{
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 10px;
	text-align: center;
	width: 40%;
}

.col{
	width: 40%;
	position: center;

}

.userin{
	width: 55%;
	height: 33px;
}

/* Delete Button */
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
		width:1753px;
		padding: 2px 25px 7px;
		top: 390px;
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
  <li><a class="activeNav"  href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
	</ul>

<!--COLUMN 1-->
 <div class="column1">
 <center>
 <form action="" method="post">
 <!--ENTER ID TO DELETE-->
 <table>
		<tr>
    		<td colspan="3" style="font-size:20px;"><b>Enter Item ID to Delete/Edit:</b><br>
			<input class="userin" type="text" name="ItemID" placeholder="Enter Item ID" required></td>
    	</tr>
    	<tr><td><input class="button" type="submit" name="Delete" value="Delete" &nbsp;></td></tr>
    </table>
	</form>
    </center>
</div>

<!--FOOTER-->
<div>
  <div style="margin-top:380px;" class="footer">
  <p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
  </div>
</div>
</body>