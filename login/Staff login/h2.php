<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<title>IVMS | Home Page</title>
<style>

/* Header */
.header {
  text-align: center;
  background: #508585;
  color: white;
  font-size: 26px;
  font-family: cooper black;
  width:1733px;
  height:120px;
  padding: 2px 25px 7px;
}

/* Column(kotak putih) */
.column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;
		  float: left;
		  width:1733px;
		  padding: 0px 25px 7px;
		  height: 630px;
		}
		
/* Table */
table{
	width: 65%;
    margin:auto;
}
td{
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 10px;
	text-align: left;
	width: 40%;
}

.col{
	width: 40%;
	position: right;

}

.userin{
	width: 55%;
	height: 33px;
}

/* Save Button */
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
		width:1733px;
		padding: 2px 25px 7px;
		top: 840px;
        left: 7px;
	}

</style>
</head>

<body>

<div class="header">
  <h1>INVENTORY MANAGEMENT SYSTEM</h1>
</div>

<ul>
	  
	 <Li><a class="activeNav" href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
	  <li><a href="http://localhost/IVMS/ApplicationLayer/BookItem/BookItem.php">BOOKING</a></li>
	  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
	</ul>

		
		<div class="column1">
		<br style="line-height:0.5px;">
		
		
		<center><img src="front.jpeg" height="300" width="700" style="margin-top: 50px;"></center><br>
        <p style="text-indent:50px;margin-left:130px;margin-right:130px;    letter-spacing:2px;"><span style="color:blue;font-weight:bold">UMP Inventory Management System (IVMS)</span> is a web-based application to manage inventory of Computing Faculty in UMP. The system call IVMS aims to efficiently book item order for staff and admin also can manage the booking item systematically. <span style="color:blue;">Staff can book item at Booking menu and admin can manage staff information at Staff menu, manage inventory at Inventory menu, manage item order list at Item Order List menu, manage report at Report menu and manage audit at Audit.</span></p>

</div>

	

<!-- 3. FOOTER-->
</div>
<div class="footer"></div>
<!-- SAMPAI SINI -->
</body>
</html>


