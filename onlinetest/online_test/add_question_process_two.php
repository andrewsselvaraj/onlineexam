<?php session_start();
include('db_connect/online_test_json_angular_db_connect.php');

if(isset($_POST['submit']))
   {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = isset($_POST['ans']) ? $_POST['ans'] : array();
    $checkboxes = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();


    //print_r($checkbox_val);
    
    $organization_id = $_POST['organization_id'];
    $class_id = $_POST['class_id'];
    $subject_id = $_POST['subject_id'];
    $question = $_POST['question'];
    $qtype = $_POST['qtype'];
    $chapter_name = $_POST['chapter_name'];
   
    $question_uid = uniqid();

    if($chapter_name == "")
    {
        $sql = "INSERT INTO question_info_v_two (pk_question_id, fk_org_id, fk_class_id, fk_subject_id, question_name, question_type, question_updated_by) VALUES ('$question_uid', '$organization_id', '$class_id', '$subject_id', '$question', '$qtype', '$_SESSION[login_admin_user_email]')";
    }
    else {
        $sql = "INSERT INTO question_info_v_two (pk_question_id, fk_org_id, fk_class_id, fk_subject_id, chapter_name, question_name, question_type, question_updated_by) VALUES ('$question_uid', '$organization_id', '$class_id', '$subject_id', '$chapter_name', '$question', '$qtype', '$_SESSION[login_admin_user_email]')";
    }
    
    //echo $sql;
    if($conn->query($sql) === TRUE)
    {
        echo "Question added successfully";
    }
    else {
        echo "Error";
        echo $conn->error;
        echo "ques";
    }


   
    
    if (!empty($answers)) {
        foreach ($answers as $key => $answer) {
            $answer_uid = uniqid();
            $isChecked = isset($checkboxes[$key]) && $checkboxes[$key] === 'Yes' ? 'Yes' : 'No';
            
            $sql2 = "INSERT INTO answer_info_v_two (pk_answer_id, fk_org_id, fk_class_id, fk_subject_id, fk_question_id, answers, correct_answer, answer_updated_by) VALUES ('$answer_uid', '$organization_id', '$class_id', '$subject_id', '$question_uid', '$answer', '$isChecked', '$_SESSION[login_admin_user_email]')";
            //echo $sql2;
               
            if($conn->query($sql2) === TRUE)
            {
                echo "Answer added successfully";
            }
            else {
                echo "Error";
                echo $conn->error;
            }
             
        }
        echo "<script>alert('Question & Answers were added Successfully!')</script>";
        echo "<h1>Re-directing...Please wait...!</h1>";
        echo "<script>location.href='add_question.php'</script>";
    } else {
        echo "<script>alert('Data failed to update')</script>";
        echo "<h1>Re-directing...Please wait...!</h1>";
        echo "<script>location.href='add_question.php'</script>";
    }
}
   }
    ?>