<!DOCTYPE>
<html>
	<head>
		<title>IVMS</title>
	</head>
	
	<style>
	 body
	 {
	 	text-align: center;
		/*display*/
		background-color: #508585;
		height: 120px;
		padding: 2px 25px 7px;
		background-image:url(front.jpeg);
		background-repeat: no-repeat;
		background-attachment: fixed;  
		background-size: cover;
	}
	h1
			{
				background-color: #508585;
				color:white;  font-family:Stencil;
				font-family:Stencil; font-size: 32px; 
				text-align:center;
				margin-left: 10px;
				margin-right: 10px;
			}
	h2
	{
		text-align:center;
		color:black;
		font-size:30px;
		margin-top:35px;
		font-family: Myriad Pro Light	
				
	}
	.main 
			{   
				height: 300px;
		        width:700px;
		        margin-left: 25%;
		        background-color: white;
		        margin-top:10%;
		        border-radius: 20px
			}		
	.button2 {
            background-color: #508585;
			  border: none;
			  color: white;
            padding: 10px 15px;
			margin: 3px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            cursor: pointer;
	        border-collapse: collapse;
	        font-family: Myriad Pro Light;
}
</style>

<body>	


      <div class="main">
			<br>
            <form name="frmContact" method="" action="">

			<img style="margin-right:10px; text-align: center" src="UMP LOGO.png" width="100" height="60"><br>
            <h1>WELCOME TO UMP INVENTORY MANAGEMENT SYSTEM</h1>
		
			
			     <h2 style="margin-top:10px">
				<input class="button2"  type="button" value="Admin" onclick="location.href='http://localhost/ivms/login/Admin%20login/indx.php'">
				<input class="button2" type="button" value="Staff" onclick="location.href='http://localhost/ivms/login/Staff%20login/indx.php'">
				</form>	
				
		
		 </div>
		 </body>