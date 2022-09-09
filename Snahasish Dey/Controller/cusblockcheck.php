<?php

    require_once('../Model/cusmodel.php');
     

    $NID = $_REQUEST['NID'];


    $status = blockcusdetails($NID);

			if($status)
			{
				header('location: ../View/adminhome.php');	
			}
			else
			{
				header('location: ../View/login.html?ID='.$ID);
			}

 ?>