<?php 

require_once('../Model/adminmodel.php');

    $ID = $_REQUEST['ID'];
	$Name = $_REQUEST['Name'];
	$Gender = $_REQUEST['Gender'];
	$Email = $_REQUEST['Email'];
	$DOB = $_REQUEST['DOB'];
	$Blood_Group = $_REQUEST['Blood_Group'];
	$Degree = $_REQUEST['Degree'];
	$Occupation = $_REQUEST['Occupation'];
	$User_Name = $_REQUEST['User_Name'];
	$Password = $_REQUEST['Password']; 
	$Confirm_Password = $_REQUEST['Password'];

	

	if ( $Name == null || $Gender == null || $Email == null  || $DOB == null  || $Blood_Group == null || $Degree == null  ||  $Occupation == null ||  $User_Name == null || $Password == null || $Confirm_Password == null)
	 {
		echo "invalid User_Name/Password/Confirm_Password/Others <br>";
	 }
	 
	else
	   {   
	    $status = Signup($Name, $Gender, $Email, $DOB, $Blood_Group, $Degree, $Occupation, $User_Name, $Password, $Confirm_Password);

	    if($status)
	    { 
					header('location: ../View/login.html');
	    }
	    else
	    {
		echo "invalid user!";
	    }
	   }

?>