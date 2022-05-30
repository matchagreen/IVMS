<?php
  require_once '../../BusinessServiceLayer/controller/GenerateReportController.php';  

  $add = new GenerateReportController();

  if(isset($_POST['Submit']))
  { 
      $add->add();
  }
?>
<!DOCTYPE html>
<html>
<style type="text/css">
  /*test github tee*/
	/*kotak putih kat tengah interface*/
	.box{
    height: 500px;
    width: 750px;
    margin: auto;
    background-color: white;
    margin-top: 35px;
    border-radius: 15px;
}
/*guna untuk table*/
table{
  width: 65%;
    margin-top: -50px;
    margin-left: auto;
    margin-right: auto;
}
td{
  padding-top: 15px;
  padding-bottom: 15px;
  padding-left: 10px;
  text-align: center;
  width: 40%;
}

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
body{ background-color: #7EDADB; 
margin: 0;}
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
    padding: 2px 25px 7px;
    width: 1290px;
    top: 650px;
        left: 7px;
  }
  /*utk button yg digunakan*/
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
          <button class="btn active">Report Form</button>
          <button class="btn success"><a href="InventoryInItem.php">Inventory List</a></button>
          <button class="btn success"><a href="ViewReportHistory.php">Report History</a></button>
          </center>
          <br><br>
      </div>
    </div>

    <br><br><br><br>
<div class="box">
  <form action="" method="post">
    <table>
          <tr><td></td></tr>
          <tr>
            <td colspan="3">
              <label>Report ID: </label>
              <input type="text" name="report_id"></td>
          </tr>
          <tr>
            <td colspan="3">
              <label>Admin ID: </label>
              <input type="text" name="admin_id"></td>
          </tr>
          <tr>
            <td colspan="3">
              <label>Date: </label>
              <input type="date" name="reportdate"></td>
          </tr>
          <tr>
      <br><br>
      <td colspan="3" style="text-align: center; padding-top: 10px;">
      <input class="button" type="submit" name="Submit" id="Submit" value="Submit">
      </td>
    </tr>
  </table>
</form>
</div>
<br><br>
<div class="footer">
<p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
</div>
</body>
</form>
</head>
</html>
