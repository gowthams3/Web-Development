<?php
include('dbconnect.php');
$id = $_POST['p_id'];
$name = $_POST['p_name'];
$jerseyNo = $_POST['p_jersey_no'];
$role = $_POST['p_role'];

$query = "INSERT INTO details(player_id,player_name,player_jersey_no,player_role) VALUES('$id','$name','$jerseyNo','$role')";
if(mysqli_query($conn,$query))
{
    header("Location:index.php");
}
else
{
    echo "Error Occured".mysqli_error($conn);
}
mysqli_close($conn);
?>