<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
    include('db_connect/online_test_json_angular_db_connect.php');
    if(isset($_POST['submit']))
    {
        $modified_question = $_POST['modified_question'];

        

        $sql = "UPDATE question_info_v_two SET question_name = '$modified_question' WHERE pk_question_id = '$_SESSION[ques_id_for_update]'";
        if($conn->query($sql) === TRUE)
        {
            echo "<script>alert('Question modified successfully!')</script>";
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