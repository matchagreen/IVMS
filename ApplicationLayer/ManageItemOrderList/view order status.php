
<?php
require_once '../../BusinessServiceLayer/controller/itemorderlistController.php';

$vieworderstatus = new itemorderlistController();	

?>


<!DOCTYPE html>
<html>
<style type="text/css">
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
<head>
	<title>View Status</title>
	<div class="header" >
	<h1 >INVENTORY MANAGEMENT SYSTEM</h1>
	</div>
	<body>
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
		  
  
	<br>
	<div class="backgroundbox">
	 <center>   <a href="retrieve booking.php" target="_blank">Retrieve Booking Data</a>
  &nbsp;
  &nbsp;
  &nbsp;
  <a href="add order status.php" target="_blank">Add Order Status</a>
  &nbsp;
  &nbsp;
  &nbsp;
  <button class="btn active">View Order Status</button>
  &nbsp;
  &nbsp;
  &nbsp;
  <a href="delete order status.php" target="_blank">Delete Order Status</a> 

  </center>
		  <br><br>
		  <!-- /*TABLE TO DISPLAY ORDER STATUS DETAILS*/-->
			<center><table>
			<tr class="center">
				<tr>
			
				</tr>
				<h1 style="text-align: center;">View Order Status List</h1>
				<br><br>
				<th>LIST ID</th>
				<th>STAFF ID</th>
				<th>ORDER STATUS</th>
				<th>COMMENT</th>
				
			</tr>
			<!-- /*CALLING DATA FROM DATABASE*/-->
			<?php
                while($row = mysqli_fetch_array($retrive))
                {
                    ?>
                    <tr>
                    <td><?= $row['ListID'];?></td>
                    <td><?= $row['id'];?></td>
					<td><?= $row['OrderStatus'];?></td>
                    <td><?= $row['Comment'];?></td>
                    </tr>
                <?php
                }
            
                ?>
		</table></center>	
	</div>
  <div style="margin-top:100px;" class="footer">
  <p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
  </div>		
</head>
</html>

