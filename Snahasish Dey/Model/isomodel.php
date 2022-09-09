<?php 

require_once('database.php');


//show data table

function isoview()
{
  $conn = getConnection();
  $sql = "select * from isodetails ";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function isoviewbyID($ID)
{
  $conn = getConnection();
  $sql = "select * from isodetails where ID = {$ID}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}




//delete

function deleteisodetails($ID)
{
    $conn = getConnection();
    $sql = "delete from isodetails where ID={$ID}";

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