<?php
include('dbconnect.php');
$id = $_GET['playerid'];
$pname = $_GET['pname'];
$p_jersey_no = $_GET['p_jersey_no'];
$p_role = $_GET['p_role'];

$query = "UPDATE player SET 
    player_name='$pname',
    player_jersey_No='$p_jersey_no',
    player_role='$p_role' WHERE
    player_id='$id'";
    if(mysqli_query($conn,$query))
    {
        header("Location:index.php");
    }
    else
    {
        echo "Error in Query".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>