<?php
  require_once '../../BusinessServiceLayer/controller/GenerateReportController.php'; 


  $GenerateReport = new GenerateReportController();

  if(isset($_POST['Report History']))
  {
      $GenerateReport->view();
  }
?>

<!DOCTYPE html>
<html>
<style type="text/css">
	<style>
  /*untuk table*/
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
/*untuk header*/
.header{
		/*font*/
		color:white;  font-family:Stencil; font-size: 26px; text-align: center;
		/*display*/
		background-color: #508585;
		height: 120px;
		padding: 2px 25px 7px;
	}
  /*untuk footer*/
.footer{
        position: absolute;
    background-color: #508585;
    height: 50px;
    width:1290px;
    padding: 2px 25px 7px;
    top: 650px;
        left: 7px;
  }
  /*untuk semua jenis button*/
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
/*untuk background nav bar*/
.column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;
		  float: left;
		  width:1290px;
		  padding: 10px 25px 7px;
		  height: 50px;
		}
    /*untuk nav bar dalam report*/
		.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 15px;
  cursor: pointer;
  display: inline-block;
}
/*untuk nav bar dalam report*/
.success:hover {
  background-color: #508585;
  color: white;
}
/*untuk nav bar dalam report*/
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
<div class="column1">
      <div>
        <center>
          <button class="btn success"><a href="GenerateReport.php">Report Form</a></button>
          <button class="btn success"><a href="InventoryInItem.php">Inventory List</a></button>
          <button class="btn active">Report History</button>
          </center>
          <br><br>
      </div>
    </div>
    <table class="center">
      </tr>
        <br><br>
        <br><h2 style="text-align: center;">REPORT HISTORY</h2>
        <th>REPORT ID</th>
        <th>ADMIN ID</th>
        <th>REPORT DATE</th>
      </tr>

  <?php
      $conn = mysqli_connect("localhost", "root", "", "myDatabase");
      if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
      }
      $sql = "SELECT * from GenerateReport";
      $result=$conn-> query($sql);

      if ($result-> num_rows >0) {
        while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["report_id"]."</td><td>".$row["admin_id"]."</td><td>". $row["reportdate"]."</td><tr>";
        }
        echo "</table>";
      }
      else{
        echo "0 result";
      }

      ?>
      </div>
            </table>


</form>
</div>
<div class="footer">
<p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
</div>
</body>

</html>
