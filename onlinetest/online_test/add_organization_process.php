<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$org_name=$_POST['org_name'];
$org_email = $_POST['org_email'];
$org_password = $_POST['org_password'];


$org_uid = uniqid();

$sql = "INSERT INTO org_info (pk_org_id, org_name, org_email, org_password, org_updated_by) VALUES('$org_uid', '$org_name', '$org_email', '$org_password','$_SESSION[login_admin_user_email]')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('Organization Registered Successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_organization.php'</script>";
}
else {
    echo "<script>alert('Data failed to update')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_organization.php'</script>";
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