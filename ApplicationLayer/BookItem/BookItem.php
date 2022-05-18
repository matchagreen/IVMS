<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Item - Book Item</title>
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
/* header */
h1{
	color:white;  font-family:Stencil; font-size: 100px; text-align: center;
}
.header {
  text-align: center;
  background: #508585;
  color: white;
  font-size: 100px;
  width:1800px;
  height:200px;
  font-family: 'Poppins', sans-serif;
}

div {
  padding-top: 15px;
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
	font-size: 18px;
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

/* Item List */
.container{
	min-height: 100px;
	width: 200%;
	display: flex;
	justify-content:space-evenly;
	align-items: center;
	background-color: #efefef;
	flex-wrap:wrap;
}
.card{
	background-color: :#efefef;
	width: 300px;
	padding:15px;
}
.card .imgcontainer{
	width:100%;
	height:250px;
	border:1px dashed #ccc;
	overflow: hidden;
	position:relative;
}

.card .imgcontainer img{
	width: 100%;
}
.infoBox .ID{
	font-weight: 200;
	color:#444;
	font-family: 'Poppins', sans-serif;
}
.infoBox .title{
	font-weight: 500;
	color:#444;
	font-family: 'Poppins', sans-serif;
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
.active, .btn:hover {
  background-color:lightblue ;
  color: Black;
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
<!------------------ Header ------------>
	<div class="header">
		<h1>ITEM LIST<h1>
		</div>
<ul>
     <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
	  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/BookItem/BookItem.php">BOOKING</a></li>
	  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
	 
	</ul>
	</div>
	<!---------------- Button For Page Add and View ------->
	<br><br>
	<center><button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/AddBookForm.php">Add Booking</a></button>
          <button class="btn active"><a href="http://localhost/IVMS/ApplicationLayer/BookItem/ViewStatusBooking.php" target="_blank">View Booking </a></button></center>
         <br><br>

<!--------- View Item List ---------->
	<div class="container">
		<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/A4Paper.jpg" alt="" />
			</div>

			<div class="infoBox">
				<div class="ID">
					22647
				</div>
				<div class="title">
					Double A A4 Paper 80gsm 500sheets
				</div>

			</div>
			<!--card end -->
		</div>
			

			<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/BlackMarker.jpg" alt="" />
			</div>

			<div class="infoBox">
				<div class="ID">
					13435
				</div>
				<div class="title">
					Black Marker Pen (whiteboard) 500A
				</div>

			</div>
			<!--card end -->
		</div>

			<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/BlackPen.jpg" alt="" />
			</div>
			<div class="infoBox">
				<div class="ID">
					35466
				</div>
				<div class="title">
					Pilot Black Pen 0.5mm 
				</div>

			</div>
			<!--card end -->
		</div>

			<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/BlueMarker.jpg" alt="" />
			</div>

			<div class="infoBox">
				<div class="ID">
					35656
				</div>
				<div class="title">
					Blue Marker Pen (whiteboard) 500A
				</div>
			</div>
			<!--card end -->
		</div>
		<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/BluePen.jpg" alt="" />
			</div>

			<div class="infoBox">
				<div class="ID">
					56222
				</div>
				<div class="title">
					Pilot Blue Pen 0.5mm
				</div>
			</div>
			<!--card end -->
		</div>

			<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/RedMarker.jpg" alt="" />
			</div>

			<div class="infoBox">
				<div class="ID">
					58266
				</div>
				<div class="title">
					Red Marker Pen (whiteboard) 500A
				</div>
			</div>
			<!--card end -->
		</div>
		
			<!-- card start -->
		<div class="card">
			<div class="imgcontainer">
				<img src="http://localhost/IVMS/image/RedPen.jpg" alt="" />
			</div>

			<div class="infoBox">
				<div class="ID">
					49622
				</div>
				<div class="title">
					Pilot Red Pen 0.5mm
				</div>

			</div>
			<!--card end -->
		</div>
	</div>
	</div>

</body>
</html>
	