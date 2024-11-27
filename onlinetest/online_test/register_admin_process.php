<?php
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$admin_name=$_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];


$admin_uid = uniqid();

$sql = "INSERT INTO admin_info (pk_admin_id, admin_name, admin_email, admin_password, admin_role) VALUES('$admin_uid', '$admin_name', '$admin_email', '$admin_password','Super Admin')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('Registration successful! You can login now!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='admin_login.php'</script>";
}
else {
    echo "<script>alert('Data failed to update')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='register_admin.php'</script>";
    //echo $conn->error;
}

}
?>