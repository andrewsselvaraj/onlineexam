<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
    include('db_connect/online_test_json_angular_db_connect.php');
            $ques_id = $_GET['ques_id'];
            $ques_name = $_GET['ques_name'];
            $button_action = $_GET['btn_action'];



            if($button_action == "inactive")
            {
                $sql = "UPDATE question_info_v_two SET question_status = 'I' WHERE pk_question_id = '$ques_id'";
                if($conn->query($sql) === TRUE)
                {
                    echo "<script>alert('Question inactivated!')</script>";
                    echo "<h1>Re-directing...Please wait...!</h1>";
                    echo "<script>location.href='display_questions.php'</script>";
                }
            }
            else {
                $sql = "UPDATE question_info_v_two SET question_status = 'DEL' WHERE pk_question_id = '$ques_id'";
                if($conn->query($sql) === TRUE)
                {
                    echo "<script>alert('Question deleted successfully!')</script>";
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