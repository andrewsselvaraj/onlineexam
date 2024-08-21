<?php session_start();
if(isset($_SESSION['login_admin_user_email']))
{
include('db_connect/online_test_json_angular_db_connect.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Online Test</title>

	<!-- Favicons -->
	<link href="#" rel="icon">
  <link href="#" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <style>
#shadow_box_grey {
            
			border: 0px solid;
			padding: 20px;
			box-shadow: 15px 10px 18px gray;
			background: white;
			width: 50%;
			
		}
		.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
}

</style>

</head>
<body>

	<?php

	$_SESSION['flag_value_test_completed'] = "Yes";
	//echo $_SESSION['flag_value_test_completed'];

//$sql = "SELECT count(*) as total_questions FROM exam_info WHERE exam_session_id = '$_SESSION[exam_session_uid_for_calculating_mark]'";
$sql = "SELECT count(*) as total_questions FROM question_info_v_two WHERE fk_org_id = '$_SESSION[organization_id_for_fetch_exam]' AND fk_class_id = '$_SESSION[class_id_for_fetch_exam]' AND fk_subject_id = '$_SESSION[subject_id_for_fetch_exam]'";
//echo $sql;
  if($result=$conn->query($sql))
 {
 
 if($result->num_rows)
 {
 while($row=$result->fetch_object())
 {

   
    $_SESSION['total_questions_for_mark_calculation'] = $row->total_questions;
    

 }
}
 }

 //echo $_SESSION['total_questions_for_mark_calculation'];

 $sql2 = "SELECT count(*) AS user_mark FROM exam_info ei, answer_info_v_two ai WHERE ei.exam_session_id = '$_SESSION[exam_session_uid_for_calculating_mark]' AND ei.fk_user_selected_answer_id = ai.pk_answer_id AND ai.correct_answer='Yes'";
 if($result=$conn->query($sql2))
 {
 
 if($result->num_rows)
 {
 while($row=$result->fetch_object())
 {

   
    $_SESSION['total_marks_for_mark_calculation'] = $row->user_mark;
    

 }
}
 }
 //echo $_SESSION['total_marks_for_mark_calculation'];
 //echo "<script>location.href='display_mark.php'</script>";

 /*
 if(isset($_SESSION['total_questions_for_mark_calculation']))
{
   if(isset($_SESSION['total_marks_for_mark_calculation']))
   {
      echo "<h1>Loading.. Please wait..!</h1>";
     echo "<script>location.href='display_mark.php'</script>";
   }
 
}
else {
   echo "<script>alert('Error in displaying your mark!)</script>";
   echo "<script>location.href='logout_process.php'</script>";
}

*/
?>




<div class="container">

<center>
<p><b>You have scored <font color="red"><?php echo $_SESSION['total_marks_for_mark_calculation']; ?></font> Mark(s) out of <?php echo $_SESSION['total_questions_for_mark_calculation']; ?> Marks</b></p> 
<br>
<a href="display_results.php">  <button class="btn btn-primary">Show Results</button> </a>
<a href="mark_report.php">  <button class="btn btn-primary">Total Marks</button> </a>
<a href="logout_process.php">  <button class="btn btn-danger">Exit</button> </a>
</center>

</div>


<?php include('includes/footer.php'); ?>
</body>

<script>
window.onload = function() {
  if (!localStorage.getItem('refreshed')) {
    localStorage.setItem('refreshed', 'true');

    setTimeout(function() {
      location.reload();
    }, 1000);
  }
};


</script>

<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>-->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<?php 
}
else {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script> alert('Please Login..!')</script>";
    echo "<script> location.href='index.html'</script>";
}
?>  