<?php
$dbServername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="eventlister";
$conn=mysqli_connect($dbServername,$dbusername,$dbpassword,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
