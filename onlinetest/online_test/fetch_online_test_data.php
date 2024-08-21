<?php session_start();
include('db_connect/online_test_json_angular_db_connect.php');
//$sql = "SELECT question, qtype, optone, opttwo, optthree, optfour FROM sample_online_test_data";
//$sql = "SELECT qi.question_name, qi.question_type, ai.answers FROM question_info_v_two qi, answer_info_v_two ai WHERE qi.pk_question_id = ai.fk_question_id AND qi.fk_org_id = ai.fk_org_id AND qi.fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$_SESSION[login_admin_user_email]') AND ai.fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$_SESSION[login_admin_user_email]')";

$sql = "SELECT qi.pk_question_id, qi.question_name, qi.question_type, GROUP_CONCAT(CONCAT(ai.pk_answer_id, '::::: ', ai.answers) SEPARATOR ', ') AS options  
FROM question_info_v_two qi
JOIN answer_info_v_two ai ON qi.pk_question_id = ai.fk_question_id AND qi.fk_org_id = ai.fk_org_id
WHERE qi.question_status = 'A' AND ai.answer_status = 'A' AND qi.fk_class_id='649346f34e3ba' AND qi.fk_subject_id='649347091aeee' AND qi.fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = 'admin@cloudschool.com')
GROUP BY qi.pk_question_id";


//echo $sql;
//echo $sql;

$result = mysqli_query($conn, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result))
{
    $json_array[] = $row;
}
//echo json_encode($json_array);
    echo "<script>location.href='start_test.php'</script>";
?>