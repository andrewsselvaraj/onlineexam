<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$organization_id=$_POST['organization_id'];
$new_user_name = $_POST['new_user_name'];
$new_user_email = $_POST['new_user_email'];
$new_user_password = $_POST['new_user_password'];
$new_user_role = $_POST['new_user_role'];



$user_uid = uniqid();

$sql = "INSERT INTO user_info (pk_user_id, user_org_id, user_name, user_email, user_password, user_role, user_updated_by) VALUES ('$user_uid', '$organization_id', '$new_user_name', '$new_user_email', '$new_user_password', '$new_user_role', '$_SESSION[login_admin_user_email]')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('User added Successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_user.php'</script>";
}
else {
    echo "<script>alert('Data failed to update')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_user.php'</script>";
    //echo $conn->error;
}

}
}
else {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script> alert('Please Login..!')</script>";
    echo "<script> location.href='index.html'</script>";
}
?>