<?php
require_once '../../BusinessServiceLayer/controller/BookController.php';

$add = new controller(); //CHECK

if(isset($_POST['Submit'])){
   
    $add->add();
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Item - Book Form</title>
	<link rel="stylesheet"  type="text/css" href="BookItem.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;

}

/* Navigation Bar */
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
/* header */
h1{
	color:white;  font-family:Stencil; font-size: 100px; text-align: center;
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
.center {
  margin-left: auto;
  margin-right: auto;
}
.backgroundbox {
 	background-color: white;
	margin-left: 200px; margin-right: 200px; margin-top: 20px;
	float: center;
	width:950px;
	padding: 25px 25px 25px;
	height: 1200px;
}

.none {border-style: none;
  	background-color: none;
}
	
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

/* Booking Form */
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border: 1px solid black;
  width: 100%;}
  tr{
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 8px;
  	background-color: white;}
  	td {
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 8px;
  	background:lightgray;
		color: black;
}
form{
	display:grid;
	grid-row-gap: 20px;
}
form p{
	font-weight: 600;
}
.form-field{
	display:flex;
	justify-content:space-evenly;
}
input,select{
	pad:0px 15px;
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

/* footer */
.footer{
        position: absolute;
		background-color: #508585;
		height: 50px;
		width:1669px;
		padding: 2px 25px 7px;
		top: 720px;
        left: 7px;
}

</style>
<body>
<!--------Header------->
	<div class="header">
		<h1>BOOKING<h1>
		</div>
<ul>
      <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
	  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/BookItem/BookItem.php">BOOKING</a></li>
	  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
	 
	</ul>
	</div>
<!---------Add Booking Form------->
<div class="backgroundbox">
	<!------Button For View Item List & View Booking------->
	<center>
			<button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/BookItem.php">View Item</button>
			<button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/AddBookForm.php">Add Booking</button>
      <button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/ViewStatusBooking.php" target="_blank">View Booking </a></button>
  </center>
		  <br><br>
<center><fieldset>
<h2 style="text-align: center;">BOOKING FORM</h2>
<br>
<table>
	<form name="frmCntact" method="post" action="">
	<tr>
		<p>
		<td>
		<label for="BookingID">Booking ID:</label>
		&emsp;
		&emsp;
		&emsp;
		</td>
		<td>
		<input type="text" name="BookingID" id="BookingID">
		</td>
		</p>
	</tr>

	<tr>
		<p>
		<td>
		<label for="id">Staff ID:</label>
		&emsp;
		&emsp;
		&emsp;
		</td>
		<td>
		<input type="text" name="id" id="id">
		<td>
		</p>
	</tr>

	<tr>
		<p>
		<td>
		<label for="ItemID">Item ID:</label>
		&emsp;
		</td>
		<td>
		<input type="text" name="ItemID" id="ItemID">
		<td>
		</p>
	</tr>

<tr>
	<p>
	<td>
	<label for=ItemQuantity>Item Quantity:</label>
	&emsp;
	&emsp;
	&emsp;
	</td>
	<td>
	<input type="number" name="ItemQuantity" id="ItemQuantity" value="1">
	<td>
	</p>
</tr>

<tr>
	<p>
	<td>
	<label for=DateBooking>Booking Date:</label>
	&emsp;
	&emsp;
	&emsp;
	</td>
	<td>
	<input type="date" name="DateBooking" id="DateBooking">
	</td>
	</p>
</tr>

<tr>
	<p>
	<td>
	<label for=BookingTime>Booking Time:</label>
	&emsp;
	&emsp;
	&emsp;
	</td>
	<td>
	<input type="time" name="BookingTime" id="BookingTime">
	</td>
	</p>
</tr>

<tr>
	<p>
	<td>
	<label for=PickUpDate>Pickup Date:</label>
	&emsp;
	&emsp;
	&emsp;
	</td>
	<td>
	<input type="date" name="PickUpDate" id="PickUpDate">
	</td>
	</p>
</tr>
</table>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit" method="post">
</p>
</form>
</fieldset>
</center>

</div>
</body>
</html>

