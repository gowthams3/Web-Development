<?php
include('dbconnect.php');

$pid = $_POST['pid'];

$name = $_POST['pname'];

$jerseyNo = $_POST['p_jersey_no'];

$role = $_POST['p_role'];

$query = "INSERT INTO player(player_id, player_name, player_jersey_No, player_role) VALUES('$pid','$name','$jerseyNo','$role')";
if(mysqli_query($conn, $query))
{
    header("Location:index.php");
}
else
{
    echo "Insertion Failed".mysqli_error($conn);
}
mysqli_close($conn);
?>