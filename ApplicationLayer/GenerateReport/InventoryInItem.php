<!DOCTYPE html>
<html>
<style type="text/css">
	<style>
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
/*guna untuk header*/
.header{
		/*font*/
		color:white;  font-family:Stencil; font-size: 26px; text-align: center;
		/*display*/
		background-color: #508585;
		height: 120px;
		padding: 2px 25px 7px;
	}
	/*guna untuk footer*/
.footer{
        position: absolute;
		background-color: #508585;
		height: 50px;
		width:1290px;
		padding: 2px 25px 7px;
		top: 1000px;
        left: 7px;
	}
	/*untuk setiap button yg ada*/
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
  	/*background nav bar utk generate report*/
.column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;
		  float: left;
		  width:1290px;
		  padding: 10px 25px 7px;
		  height: 50px;
		}
		/*guna untuk nav bar dalam generate report*/
		.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 15px;
  cursor: pointer;
  display: inline-block;
}
/*guna untuk nav bar dalam generate report*/
.success:hover {
  background-color: #508585;
  color: white;
}
/*guna untuk nav bar dalam generate report*/
.active, .btn:hover {
  background-color: #508585;
  color: white;
}
</style>
<head>
	<form action="" method="post">
	<title>Generate Report</title>
	<div class="header" >
	<h1 >INVENTORY MANAGEMENT SYSTEM</h1>
	</div>
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

	<br>
	
		<form action="" method="post">
		<div class="column1">
      <div>
        <center>
          <button class="btn success"><a href="GenerateReport.php">Report Form</a></button>
          <button class="btn active">Inventory List</button>
          <button class="btn success"><a href="ViewReportHistory.php">Report History</a></button>
          </center>
          <br><br>
      </div>
    </div>
	<table>
				</tr>
				<br><br>
				<br><h2 style="text-align: center;">INVENTORY IN-ITEM</h2>
				<th>ITEM ID</th>
				<th>ITEM NAME</th>
				<th>QUANTITY ORDER</th>
				<th>QUANTITY RECEIVED</th>
				<th>UNIT PRICE (RM)</th>
				<th>TOTAL PRICE (RM)</th>
				<th>DATE ORDER</th>
				<th>DATE ARRIVED</th>
				<th>COMPANY NAME</th>
			</tr>
			<?php 

$connection = mysqli_connect("localhost","root","","myDatabase");

if(!$connection)
{
	echo "Database connection failed...";
}
			$retrive = mysqli_query($connection, "SELECT ItemID, itemName, qtorder, qtreceived, unitPrice, qtreceived * unitPrice as total, dateOrder, 
                        dateArrived, companyName FROM inventory ORDER BY dateArrived DESC");
?>
			<?php
                while($row = mysqli_fetch_array($retrive))
                {
            ?>
                    <tr>
                    <td><?= $row['ItemID'];?></td>
                    <td><?= $row['itemName'];?></td>
					<td><?= $row['qtorder'];?></td>
                    <td><?= $row['qtreceived'];?></td>
					<td><?= $row['unitPrice'];?></td>
                    <td><?= $row['total'];?></td>
                    <td><?= $row['dateOrder'];?></td>
					<td><?= $row['dateArrived'];?></td>
                    <td><?= $row['companyName'];?></td>
                    </tr>
                <?php
                }
            
                ?>
            </table>
            
            <?php 

$connection = mysqli_connect("localhost","root","","myDatabase");

if(!$connection)
{
	echo "Database connection failed...";
}
			$retrive = mysqli_query($connection, "SELECT SUM(qtreceived * unitPrice) as TotalGrandPrice FROM inventory");
?>
			<?php
                while($row = mysqli_fetch_array($retrive))
                {
            ?>
            <table>
            <tr>
				<th colspan="4" style="text-align:center; padding-right: 462px">TOTAL GRAND PRICE(RM):</th>
            	<td colspan="5" style="text-align:right; padding-right: 90px"><?= $row['TotalGrandPrice'];?></td>
        	</tr>
  
                <?php
                }
            
                ?>
            </table>
        </form>
</div>
</form>
</div>
<div class="footer">
<p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
</div>
</body>
</html>


