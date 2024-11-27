<?php session_start();
include('db_connect/online_test_json_angular_db_connect.php'); 

// Get the selected options from the request body
$data = json_decode(file_get_contents('php://input'), true);
$exam_session_uid = uniqid();
$_SESSION['exam_session_uid_for_calculating_mark'] = $exam_session_uid;

// Iterate over the selected options and insert them into the database
foreach ($data as $selectedOption) {
    $question = $selectedOption['question'];
    $selected = $selectedOption['selected'];
    $question_id = $selectedOption['question_id'];
    $exam_pk_uid = uniqid();



    

    // Prepare the SQL statement
    //$sql = "INSERT INTO test_table_one (question, selected_option) VALUES ('$question_id', '$selected')";

    //$selected has the user selected answer ID

   $sql = "INSERT INTO exam_info (pk_exam_id, exam_session_id, fk_org_id, fk_class_id, fk_subject_id, fk_question_id, fk_user_selected_answer_id, exam_taken_by) VALUES ('$exam_pk_uid', '$exam_session_uid', '$_SESSION[organization_id_for_fetch_exam]', '$_SESSION[class_id_for_fetch_exam]', '$_SESSION[subject_id_for_fetch_exam]', '$question_id', '$selected', '$_SESSION[login_admin_user_email]')";

            //echo $sql;
            //echo "<br />";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error! ";
        echo $conn->error;
    }

  
}
?>