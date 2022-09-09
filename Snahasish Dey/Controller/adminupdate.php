<?php 
   
   require_once('../Model/adminmodel.php');
   
   
    
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

	$ID = $_REQUEST['ID'];
	
	$admindetails = ['ID'=>$ID, 'Name'=>$Name, 'Gender'=>$Gender, 'Email'=>$Email, 'DOB'=>$DOB, 'Blood_Group'=>$Blood_Group, 'Degree'=>$Degree, 'Occupation'=>$Occupation, 'User_Name'=>$User_Name, 'Password'=>$Password, 'Confirm_Password'=>$Confirm_Password ];

	$status = editadmindetails($admindetails);

			if($status)
			{
				header('location: ../View/adminhome.php');	
			}
			else
			{
				header('location: ../View/login.html?ID='.$ID);
			}





	

?>