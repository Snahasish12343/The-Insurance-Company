<?php

    require_once('../Model/isomodel.php');
     

    $ID = $_REQUEST['ID'];


    $status = deleteisodetails($ID);

			if($status)
			{
				header('location: ../View/adminhome.php');	
			}
			else
			{
				header('location: ../View/login.html?ID='.$ID);
			}

 ?>