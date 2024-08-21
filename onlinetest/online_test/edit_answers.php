<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
    include('db_connect/online_test_json_angular_db_connect.php');
    if(isset($_POST['submit']))
    {
        $modified_answer = $_POST['modified_answer'];
        $answer_id = $_POST['answer_id'];

        //echo $modified_answer;
        //echo $answer_id;
        $sql = "UPDATE answer_info_v_two SET answers='$modified_answer' WHERE pk_answer_id = '$answer_id'";
        if($conn->query($sql) === TRUE)
        {
            echo "<script>alert('Answer modified successfully!')</script>";
            echo "<h1>Re-directing...Please wait...!</h1>";
            echo "<script>location.href='display_questions.php'</script>";
        }
    }

}
else {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script> alert('Please Login..!')</script>";
    echo "<script> location.href='index.html'</script>";
}

?>