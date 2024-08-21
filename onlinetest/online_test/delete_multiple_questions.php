<?php
error_reporting(0);
ini_set('display_errors', 0);
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
    $arr_question_id = $_POST['arr_question_id'];
    $selected_question_id_count = count($arr_question_id);
    if($arr_question_id == NULL)
    {
        echo "<script>alert('Please check atleast one check box to proceed')</script>";
        echo "<h1>Re-directing...Please wait...!</h1>";
        echo "<script>location.href='display_questions.php'</script>";
    }
    for($i=0; $i<$selected_question_id_count; $i++)
    {
        $sql = "UPDATE question_info_v_two SET question_status = 'DEL' WHERE pk_question_id = '$arr_question_id[$i]'"; 
        if($conn->query($sql) === TRUE)
        {
            echo ".";
        }
    }
    echo "<script>alert('Questions deleted successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='display_questions.php'</script>";
}
//Inactive questions:
if(isset($_POST['submit_inactive']))
{
    $arr_question_id = $_POST['arr_question_id'];
    $selected_question_id_count = count($arr_question_id);
    if($selected_question_id_count == 0)
    {
        echo "<script>alert('Please check atleast one check box to proceed')</script>";
        echo "<h1>Re-directing...Please wait...!</h1>";
        echo "<script>location.href='display_questions.php'</script>";
    }
    for($i=0; $i<$selected_question_id_count; $i++)
    {
        $sql = "UPDATE question_info_v_two SET question_status = 'I' WHERE pk_question_id = '$arr_question_id[$i]'"; 
        if($conn->query($sql) === TRUE)
        {
            echo ".";
        }
    }
    echo "<script>alert('Questions Inactivated successfully!')</script>";
    echo "<h1>Re-directing...Please wait...!</h1>";
    echo "<script>location.href='display_questions.php'</script>";
}




?>