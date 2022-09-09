<?php 

require_once('database.php');

//for Signup

function Signup($Name,$Gender,$Email,$DOB,$Blood_Group,$Degree,$Occupation,$User_Name,$Password,$Confirm_Password)
{
    $conn = getConnection();
	$sql = "insert into admindetails values('', '{$Name}', '{$Gender}', '{$Email}', '{$DOB}', '{$Blood_Group}', '{$Degree}', '{$Occupation}', '{$User_Name}', '{$Password}', '{$Confirm_Password}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//for login

function login($User_Name, $Password)
{
	 $conn = getConnection();
	$sql = "select * from admindetails where User_Name = '{$User_Name}' and Password = '{$Password}' ";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);



	if($count > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}



//show data table

function adminview()
{
  $conn = getConnection();
  $sql = "select * from admindetails ";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function adminviewbyID($ID)
{
  $conn = getConnection();
  $sql = "select * from admindetails where ID = {$ID}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}


//Edit or Update

function editadmindetails($admindetails)
{
	$conn = getConnection();
	$sql = "update admindetails set  ID='{$admindetails['ID']}', Name='{$admindetails['Name']}', Gender='{$admindetails['Gender']}', Email='{$admindetails['Email']}', DOB='{$admindetails['DOB']}', Blood_Group='{$admindetails['Blood_Group']}', Degree='{$admindetails['Degree']}', Occupation='{$admindetails['Occupation']}', User_Name ='{$admindetails['User_Name']}', Password='{$admindetails['Password']}',  Confirm_Password ='{$admindetails['Confirm_Password']}' where  ID ={$admindetails['ID']}";
	

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//delete

function deleteadmindetails($ID)
{
    $conn = getConnection();
    $sql = "delete from admindetails where ID={$ID}";

    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


?>