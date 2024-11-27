<?php session_start();
if(isset($_SESSION['login_admin_user_email']))
{
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$class_id=$_POST['class_id'];
$organization_id=$_POST['organization_id'];
$subject_name=$_POST['subject_name'];


$subject_uid = uniqid();

$sql = "INSERT INTO subject_info (pk_subject_id, fk_org_id, fk_class_id, subject_name) VALUES('$subject_uid', '$organization_id', '$class_id', '$subject_name')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('Subject added Successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_subject.php'</script>";
}
else {
    echo "<script>alert('Data failed to update')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_subject.php'</script>";
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