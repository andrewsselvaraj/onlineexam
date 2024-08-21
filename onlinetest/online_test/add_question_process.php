<?php session_start();
if(isset($_SESSION['login_admin_user_email']))
{
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$organization_id=$_POST['organization_id'];
$class_id=$_POST['class_id'];
$subject_id=$_POST['subject_id'];

$question=$_POST['question'];
$qtype = $_POST['qtype'];
$ans_one = $_POST['ans_one'];
$ans_two = $_POST['ans_two'];
$ans_three = $_POST['ans_three'];
$ans_four = $_POST['ans_four'];
$correct_answer = $_POST['correct_answer'];

$question_uid = uniqid();

$sql = "INSERT INTO question_info (pk_question_id, fk_org_id, fk_class_id, fk_subject_id, question_name, question_type, optone, opttwo, optthree, optfour, correct_answer) VALUES ('$question_uid', '$organization_id', '$class_id', '$subject_id', '$question', '$qtype', '$ans_one', '$ans_two', '$ans_three', '$ans_four', '$correct_answer')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('Question added successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_question.php'</script>";
}
else {
    echo "<script>alert('Data failed to update')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='add_question.php'</script>";
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