<?php
require_once '../../BusinessServiceLayer/controller/AuditReportController.php';

$audit = new auditcontroller();

if(isset($_POST['delete']))
{
    $audit->delete();
}

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../css/allExcludeLogin.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>IVMS | Audit Report List</title>
    <style>
    body {
  margin: 0;
}

        table{
        width: 40%;
        margin-left: auto;
        margin-right: auto;
        margin-top: -140px;
        margin-bottom: 20px;

    }
    td{
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }


        .size{
            width:50%; 
            height: 100px
        }
        .footer{
            height:87px;
        }
        .activeNav {
          background-color: #7EDADB;
        }

        .auditmenu a{
            width: 10%;
            height: 40px;
        }

        .userin{
            width: 50%;
            height: 33px;
        }

        .delbtn{
            height: 40px;width: 10%;border: none;
        }

        
    </style>
    <!-- 1. HEADER-->
    <div class="header" >
    <h1>AUDIT REPORT</h1>
    </div>
    <!-- SAMPAI SINI -->
</head>
<body>
    <!-- 2. NAVIGATION BAR-->
    <ul>

  <li><a href="http://localhost/ivms/login/Admin%20login/h.php">HOME</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageStaffInformation/myInfo.php">STAFF</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageInventory/In_Item.php">INVENTORY</a></li>
  <li><a href="http://localhost/IVMS/ApplicationLayer/ManageItemOrderList/Item%20Order%20List%20Home.php">ITEM ORDER LIST</a></li>
  <li style="float:right"><a href="http://localhost/ivms/login/">LOGOUT</a></li>
  <li style="float:right"><a class="activeNav" href="http://localhost/IVMS/ApplicationLayer/Audit%20Report/auditlist.php">AUDIT</a></li>
  <li style="float:right"><a href="http://localhost/IVMS/ApplicationLayer/GenerateReport/GenerateReport.php">REPORT</a></li>
</ul>
    <!--SAMPAI SINI-->
    
    <br><br>
<div style="background-color:white; padding-bottom: 8%; margin-left:0px; margin-right:0px; margin-top: 25px"  >
<h2><center><br><br><br>&nbsp DELETE AUDIT REPORT</center></h2>

<!--AUDIT MENU-->
<div class="auditmenu">
    <a class="button" href="auditreport.php">Add Report</a><br>
    <a class="button" href="auditlist.php">View Report</a><br>
    <a class="button"  href="deleteauditreport.php" style="background-color: grey;">Delete Report</a>
</div>
<!--SAMPAI SINI-->

<!--FORM-->
<!--to get audit id -->
<form action="" method="post">
    
    <table>
        <tr>
                <td><center>Enter the Audit ID :</center></td>
            </tr>
            <tr>
                <td><input class="userin" type="text" name="audit_report_id"><input type="submit" name="delete" value="Delete" class="delbtn" ></td>
                <td></td>
                
        </tr>
    </table>
</form>
<!--FORM END-->


<!-- 3. FOOTER-->
</div>
<div class="footer"></div>
<!-- SAMPAI SINI -->
</script>
</body>
</html>