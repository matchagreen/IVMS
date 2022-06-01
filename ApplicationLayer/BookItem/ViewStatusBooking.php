<?php
require_once '../../BusinessServiceLayer/controller/BookController.php';

$view = new controller();	

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
h1{
	color:white;  font-family:Stencil; font-size: 70px; text-align: center;
}
.header{
		/*font*/
		color:white;  font-family:Stencil; font-size: 26px; text-align: center;
		/*display*/
		background-color: #508585;
		height: 120px;
		padding: 2px 25px 7px;
	}
.footer{
		/*display*/
		background-color: #508585;
		height: 120px;
		padding: 2px 25px 7px;
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
		  height: 900px;}

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
  background-color:lightblue ;
  color: white;
}
.btn{
	background:10px 15px;
	color:black;
	padding:10px 20px;
	border:none;
	font-size:18px;
	border-radius:100px;
	-webkit-border-radius:100px;
	-moz-border-radius:100px;
	-ms-border-radius:100px;
	-o-border-radius:100px;
	box-shadow:7px 10px 12px rgba(0, 0, 0, .1);
	cursor: pointer;
	transition:all .3s;
	-webkit-transform:all .3s;
	-moz-transform:all .3s;
	-ms-transform:all .3s;
	-o-transform:all .3s;
}
.btn:hover{
	transform:scale(1.03);
	-webkit-transform:scale(1.03);
	-moz-transform:scale(1.03);
	-ms-transform:scale(1.03);
	-o-transform:scale(1.03);
	box-shadow:10px 12px 15px rgba(0, 0, 0, .3);
}


</style>
<head>
	<title>Generate Report</title>
	<div class="header" >
	<h1 >BOOKING VIEW</h1>
	</div>
	<body>
		<ul>
<ul>
     <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
	  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/BookItem/BookItem.php">BOOKING</a></li>
	  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
	 
	</ul>

  
		  
  </center>
	<br>
	<div class="backgroundbox">
<!-----Button For Add Booking & View Item List----->
	<center>
		<button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/BookItem.php">View Item</button>
		<button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/AddBookForm.php">Add Booking</a></button>
    <button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/ViewStatusBooking.php">View Booking </a></button>
  </center>
		  <br><br>
			<center><table>
			<tr class="center">
				<tr>
			
				</tr>
				<h2 style="text-align: center;">Booking status</h2>
				<br><br>
				<th>BookingID</th>
				<th>Item ID</th>
				<th>ID</th>
				<th>Item Quantity</th>
				<th>Date Booking</th>
				<th>Booking Time</th>
				<th>Pickup Date</th>
				<th>Functions</th>
				
			</tr>
			<?php 

$connection = mysqli_connect("localhost","root","","mydatabase");

if(!$connection)
{
	echo "Database connection faild...";
}

$retrive = mysqli_query($connection, "SELECT * FROM booking ");
$row= mysqli_fetch_array($retrive);

?>
			<?php
                while($row = mysqli_fetch_array($retrive))
                {
                    ?>
                    <tr>
                    <td><?= $row['BookingID'];?></td>
                    <td><?= $row['ItemID'];?></td>
					<td><?= $row['id'];?></td>
                    <td><?= $row['ItemQuantity'];?></td>
                    <td><?= $row['DateBooking'];?></td>
                    <td><?= $row['BookingTime'];?></td>
                    <td><?= $row['PickUpDate'];?></td>
					<td> <a href ="updateBooking.php?update=<?php echo $row['BookingID'];?>" class="btn btn-info">Update</a> 
				    <a href ="deleteBooking.php?delete=<?php echo $row['BookingID'];?>" class="btn btn-danger">Delete</a> 
					</td>
                    </tr>
                <?php
                }
            
                ?>
		</table><center>	
			
</head>
</html>
