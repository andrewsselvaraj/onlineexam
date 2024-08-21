<?php session_start();
if(isset($_SESSION['login_admin_user_email']))
{
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$class_name=$_POST['class_name'];
$organization_id=$_POST['organization_id'];


$class_uid = uniqid();

$sql = "INSERT INTO class_info (pk_class_id, fk_org_id, class_name) VALUES('$class_uid', '$organization_id', '$class_name')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('Class added Successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_class.php'</script>";
}
else {
    echo "<script>alert('Data failed to update')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_class.php'</script>";
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