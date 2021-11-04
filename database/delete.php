<?php
$pid = $_GET['id'];
include('dbconnect.php');

$query = "DELETE FROM details WHERE player_id = '$pid'";
if(mysqli_query($conn,$query))
{
    header("Location:index.php");
}
else{
    echo "Error in delete";
}