<?php
$conn=new mysqli('localhost','root','root','onlinetest');
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