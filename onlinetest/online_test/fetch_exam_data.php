<?php session_start();
include('db_connect/online_test_json_angular_db_connect.php');

if(isset($_POST['submit']))
   {
	   
    $organization_id = $_POST['organization_id'];
    $class_id = $_POST['class_id'];
    $subject_id = $_POST['subject_id'];

    

    $_SESSION['organization_id_for_fetch_exam'] = $organization_id;
    $_SESSION['class_id_for_fetch_exam'] = $class_id;
    $_SESSION['subject_id_for_fetch_exam'] = $subject_id;
	
	$sql = "SELECT qi.pk_question_id, qi.question_name, qi.question_type, GROUP_CONCAT(CONCAT(ai.pk_answer_id, '::::: ', ai.answers) SEPARATOR ', ') AS options  
	FROM question_info_v_two qi
	JOIN answer_info_v_two ai ON qi.pk_question_id = ai.fk_question_id AND qi.fk_org_id = ai.fk_org_id  
	WHERE qi.question_status = 'A' AND ai.answer_status = 'A' AND qi.fk_class_id='$class_id' AND qi.fk_subject_id='$subject_id' AND qi.fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$organization_id')
	GROUP BY qi.pk_question_id";


	//echo $sql;
	//echo $sql;

	$result = mysqli_query($conn, $sql);
	$json_array = array();
	while($row = mysqli_fetch_assoc($result))
{
    $json_array[] = $row;
}

    echo "<script>location.href='start_test.php'</script>";
   }
?>