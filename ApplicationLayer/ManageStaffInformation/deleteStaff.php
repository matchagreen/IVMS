<?php
	require_once '../../BusinessServiceLayer/controller/staffController.php';	

	$staff = new staffController();
	
	//Call delete function
	if(isset($_POST['delete']))
	{
  		$staff->delete();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<title>IVMS | UpdateStaffInformation</title>
	
	<!-- HEADER-->
	<div class="header" >
	<h1 >INVENTORY MANAGEMENT SYSTEM</h1>
	</div>
	<!-- SAMPAI SINI -->
</head>
<body>
	<!-- NAVIGATION BAR-->
<ul>
	   <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/ManageStaffInformation/myInfo.php">STAFF</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
	</ul>
<!--COLUMN1, COLUMN2, COLUMN3-->
	<div>
		<div class="column1" style="padding-left: 20px">
	    <h2>MY INFORMATION</h2>
	    <p>
	    	<table  class="center" width="100%" >
	    		
	    		<tr><td align="center"><i class="fa fa-edit"></i> <input class="button" type="button" name="viewMyInfo" onclick="document.location='myInfo.php'" value="View/Edit My Information  "></td></tr>
	</table>
</p>
	  </div>
	  <div class="column2">
	    <h2>NEW STAFF INFORMATION</h2>
	    <p>
	    	<table  class="center" width="100%" >
	    		
	    	<tr><td align="center"><i class="fa fa-user-plus"></i>
	    		<input class="button" type="button" onclick="document.location='addStaff.php'" value=" Add New Staff Information "></td></tr></table>
	    </p>
	  </div>
	  <div class="column3" >
	    <h2>CURRENT STAFF INFORMATION</h2>
	    <p>
	    	<table  class="center" width="100%" >
	    		
	    		<tr>
	    			<td align="center">
	    				<i class="fa fa-trash"></i>&nbsp
	    		   		<input class="button" type="button" onclick="document.location='deleteStaff.php'" value="    Delete Staff Information     "></td></tr>
	    		<tr>
	    			<td align="center">
	    		   		<i class="fa fa-edit"></i>
	    		   		<input class="button" type="button" onclick="document.location='viewStaff.php'" value     ="  View/Edit Staff Information  "></td></tr>
	    	</table>
	    </p>
	  </div>
<div>
	<br><br><br><br><br><br><br><br><br><br>
<div style="background-color:white; padding-bottom: 10%; margin :5px; margin-top: 25px">
	<h2 style="text-align: center; padding-top: 25px">DELETE STAFF INFORMATION</h2>
<div >
	<center>
<!--Form to enter staff id to delete-->
<form action="" method="post">
		ID Number : <input style="width: 50%" type="text" name="id" placeholder="enter staff ID">
	
	<input class="button" type="submit" name="delete" value="  Delete  ">
	<table><tr>
	<td colspan="3" style="text-align: center">
	<i class="fa fa-back">&nbsp</i><input class="button" type="button" name="back" onclick="document.location='myInfo.php'" value="  Back  ">
	</td>
	</tr></table>
</form>
</center>
</div>
<!-- 3. FOOTER-->
</div>
<div class="footer">
	<p style="color:white;margin-top:25px;">2021 &#169;BING'S CORP</p>
</div>

</body>
</html>


