<?php

      require_once('../Controller/header.php');

?>


<html>
<head>
	<title>Admin home page</title>
	<link  rel="stylesheet" type="text/css" href="../Asset/style3.css">
</head>
<body >
    <div class = "adminhome">
		<h1> Welcome Admin!</h1> <br> <br> <br>

		<a  href="isouserlist.php"> Insurance Officer User List </a> <br> 
		<a  href="addInsurance.php"> Add Insurance </a> <br> 
		<a  href="insurancelist.php"> Insurance List </a> <br>
		<a  href="fileupload.php"> File Upload </a> <br> 
		<a  href="Cususerlist.php"> View Customer Profile </a> <br>
		<a  href="verifyCprofile.php"> Remove Customer</a> <br>
		<a  href="verifyCprofile.php"> Block Cutomer </a> <br>  
		<a  href="isouserlist.php"> View Insurance Officer </a> <br>
		<a  href="isouserlist.php"> Remove Insurance Officer</a> <br>
		<a  href="adminuserlist.php"> Admin List </a> <br> 
		<a  href="../Controller/logout.php"> logout </a> 
			
		</div>
</body>
</html>

