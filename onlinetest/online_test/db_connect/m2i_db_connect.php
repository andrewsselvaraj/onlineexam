<?php
$conn=new mysqli('localhost','root','Admin@123#','m2its');
if($conn->connect_errno)
{
echo $conn->connect_error;
echo "Database not connected";
die();
}
else
{
//echo "Database connected";
}
?>