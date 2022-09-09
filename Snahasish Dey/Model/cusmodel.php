<?php 

require_once('database.php');


//show data table

function cusview()
{
  $conn = getConnection();
  $sql = "select * from cusdetails ";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function cusviewbyNID($NID)
{
  $conn = getConnection();
  $sql = "select * from cusdetails where NID = {$NID}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}


//Edit or Update

function editcusdetails($cusdetails)
{
	$conn = getConnection();
	$sql = "update cusdetails set NID='{$cusdetails['NID']}', Name='{$cusdetails['Name']}', Gender='{$cusdetails['Gender']}', Email='{$cusdetails['Email']}', DOB='{$cusdetails['DOB']}', Blood_Group='{$cusdetails['Blood_Group']}', Degree='{$cusdetails['Degree']}', Occupation='{$cusdetails['Occupation']}', User_Name ='{$cusdetails['User_Name']}', Password='{$cusdetails['Password']}',  Confirm_Password ='{$cusdetails['Confirm_Password']}' where  NID ={$cusdetails['NID']}";

    
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

function deletecusdetails($NID)
{
    $conn = getConnection();
    $sql = "delete from cusdetails where NID={$NID}";

    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//Block

function blockcusdetails($NID)
{
    $conn = getConnection();
    $sql = "delete from cusdetails where NID={$NID}";

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