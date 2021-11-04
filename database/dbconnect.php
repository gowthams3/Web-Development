<?php
$host = "localhost";
$user = "sports";
$password = "sports";
$dbname = "sports";
$conn = mysqli_connect($host,$user,$password,$dbname);
if(!$conn)
{
    die("Database connection failed!!!");
}