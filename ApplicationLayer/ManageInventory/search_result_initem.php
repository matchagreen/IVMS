<?php
require_once '../../BusinessServiceLayer/controller/itemController.php';

$inventory = new itemController();	

if(isset($_POST['Add']))
{
    $inventory->add();
}

?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>IVMS | In-Item</title>
<style>

/* Header */
.header {
  text-align: center;
  background: #508585;
  color: white;
  font-size: 26px;
  font-family: cooper black;
  width:118%;
  height:120px;
  padding-top: 7px;
}

/* Column(kotak putih) */
.column1 {
		  background-color: white;
		  margin-left: 0px; margin-right: 5px; margin-top: 10px;
		  float: left;
		  width:118%;

		  height: 1000px;
		}
		
/* Delete Input */		
.col{
	width: 40%;
	position: center;

}

.userin{
	width: 30%;
	height: 33px;
}
		
/* Table */
.table, th,td{
  border: 1px solid black;
  border-collapse: collapse;
  margin-top: 35px;
  font-size: 14px;
}

th, td {
  padding: 5px;
  text-align: center;
}


th {
  background-color: black;
  color: white;
}

/* Navigation Bar */
ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
      width:118%;
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
		
body{ background-color: #7EDADB;
  margin: 0;
 }
 button{
  text-decoration: none;
 }

/* Green Button */
.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 15px;
  cursor: pointer;
  display: inline-block;
  margin-top: 40px;
}

.success:hover {
  background-color: #b4d463;
  color: white;
}

.active, .btn:hover {
  background-color: #04AA6D;
  color: white;
}

/* Footer */
.footer{
        position: absolute;
		background-color: #508585;
		height: 50px;
		width:1732px;
		padding: 2px 25px 7px;
		top: 1075px;
        left: 7px;
	}
	
/* Dropdown Button */
.dropdown {
  position: relative;
  display: inline-block;
}
	
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  height: 40px;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 9%;
  height: 40px;
  padding: 10px;
  background: #508585;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #7edadb;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.searchbox{
  padding-top: 30px;
}

.buttonfilter{
  background-color: #F5F5F5;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.tb{
  border: 0;
  border-color: red;
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
  <li><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
  </ul>

<!--COLUMN 1-->
<div class="column1">
  <div>
  <center>
    <br><br><br>

    <form action="search_result_initem.php" method="POST">
                <div class="search-bar">
                    <input type="text" name="output" placeholder="Search Item">
                    <button type="submit" name="search">Search</button><br><br>

    <button class="btn active"><a href="In_Item.php" style="text-decoration: none;">In-Item</a></button>
          <button class="btn success"><a href="Out_Item.php" style="text-decoration: none;">Out-Item</a></button>
          <button class="btn success"><a href="add_Item.php" style="text-decoration: none;">Add Item</a></button>
  </center>
</div>
<!--DISPLAY-->  
  <table class="table1">
  <tr>
    <th>ITEM ID</th>
    <th>ITEM NAME</th>
    <th>QUANTITY ORDER</th>
	<th>QUANTITY RECEIVED</th>
	<th>UNIT PRICE (RM)</th>
	<th>TOTAL PRICE (RM)</th>
    <th>LOCATION</th>
	<th>DATE ORDER</th>
    <th>DATE ARRIVED</th>
	<th>COMPANY NAME</th>
	<th>COMPANY ADDRESS</th>
    <th>SENDER NAME</th>
	<th>TRUCK PLATE NO</th>
	<th colspan=2>ACTION</th>
  </tr> 
</div>

<?php
                        $query = $_POST["output"];
                        $retrieve = mysqli_query($connection, "SELECT ItemID, itemName, qtorder, qtreceived, unitPrice, qtreceived * unitPrice as total, location, dateOrder, 
                        dateArrived, companyName, companyAddress, senderName, truckPlateNo FROM inventory
                        WHERE inventory.itemName LIKE '%".$query."%'") or die(mysqli_error($connection));
                    
                        
                        if(mysqli_num_rows($retrieve) > 0){ // if one or more rows are returned do following
                            while($row = mysqli_fetch_array($retrieve)){
                                echo "<tr>";
                                    echo "<td>".$row['ItemID']."</td>";
                                    echo "<td>".$row['itemName']."</td>";
                                    echo "<td>".$row['qtorder']."</td>";
                                    echo "<td>".$row['qtreceived']."</td>";
                                    echo "<td>".$row['unitPrice']."</td>";
                                    echo "<td>".$row['total']."</td>";
                                    echo "<td>".$row['location']."</td>";
                                    echo "<td>".$row['dateOrder']."</td>";
                                    echo "<td>".$row['dateArrived']."</td>";
                                    echo "<td>".$row['companyName']."</td>";
                                    echo "<td>".$row['companyAddress']."</td>";
                                    echo "<td>".$row['senderName']."</td>";
                                    echo "<td>".$row['truckPlateNo']."</td>";
                                    echo "</td>";
                                    echo "<td>";
                                        echo '<a href="editItem.php?ItemID='.$row['ItemID'].'">Edit</a>';
                                        echo "</td>";
                                    echo "<td>";
                                        echo '<a href="delete_Item.php?ItemID='.$row['ItemID'].'">Delete</a>';
                                        echo "</td>";
                                echo "</tr>";
                            }
                        }
                        else{ // if there is no matching rows 
                            echo "No results found";
                        }
                        ?>
               </table>

<div> 
<!--FOOTER-->
  <div style="margin-top:140px;" class="footer">
  <p style="color:white;margin-top:25px;">2021 &#169; BING'S CORP</p>
  </div>
</div>
</body>