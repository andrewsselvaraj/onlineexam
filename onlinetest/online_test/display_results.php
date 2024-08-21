<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{

	include('db_connect/online_test_json_angular_db_connect.php');
?>
	<html lang="en">
  
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Exam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  
  <!-- =======================================================
  * Template Name: Vesperr - v4.9.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head> 
  
  <body>
        <style>
            #example1 {
  border: 1px solid;
  padding: 20px;
  
  background: white;
  
}
            #shadow_box_grey {
            
                border: 1px solid;
                padding: 20px;
                box-shadow: 15px 10px 18px gray;
                background: white;
            }
            body {
     /* background-color: #f7f7f7;
      background-image: url('images/blue_bg.jpg');
      */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
            #footer {
                background-color: ghostwhite;
            }

            table {
            
              border-collapse: collapse;
            border: 2px solid #eceef1;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
           
width: 100% ;
}
th, td {

text-align: center;
padding: 8px;
} 

.navbar .getstarted, .navbar .getstarted:focus {
  background: #e64a4a;
    }

tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
       
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">Online Exam</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
               
        <li><a class="getstarted scrollto" href="logout_process.php">Logout</a></li>
        </ul>
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




		  <div class="container">
      <br /><br /><br /><br />
<h6>Logged in as: <b><font color="maroon"><?php echo $_SESSION['login_admin_user_email']; ?></font></b></h6>
<h6>Role: <b><font color="green"><?php echo $_SESSION['login_user_role']; ?></font></b></h6>
<hr>
<h2><u>Results</u></h2>
<center><a href="calculate_mark.php"><button class="btn btn-warning">Show Marks</button></a></center> <br />

		  <?php

    $exam_session_uid_var_2 = $_SESSION['exam_session_uid_for_calculating_mark'];
	$sql =  "SELECT qi.question_name, ai.answers, ai.correct_answer FROM exam_info ei, answer_info_v_two ai, question_info_v_two qi WHERE ei.exam_session_id = '$exam_session_uid_var_2' AND ei.fk_question_id = qi.pk_question_id AND ei.fk_user_selected_answer_id = ai.pk_answer_id";
	?>
  <div style="overflow-x:auto;">
	  <table border='1' cellspacing='10' cellpadding='20p'>
    <th>Question Name</th><th>Your Answer</th><th>Correct Answer</th>
	<?php
	
	if($result=$conn->query($sql))
    {
    if($result->num_rows)
    {
    while($row=$result->fetch_object())
    {
		echo "<tr><td>$row->question_name</td><td>$row->answers</td><td>";
		if($row->correct_answer == "Yes")
		{
			echo "<font color='green'><b>$row->correct_answer</b></font>";
		}
		else {
			echo "<font color='red'><b>$row->correct_answer</b></font>";
		}
			
			echo "</td></tr>";
	}
	}
	}
	?>
	</table>
</div>

</div>

<br /><br />
        <div class="fixed-bottom" id="footer">
            <center>Efreelearn | All rights reserved</center>
            </div>

		
 <!-- ======= Services Section ======= 
<section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>User Guide</h2>
          <p>Below is the quick guide for users</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Services Section -->
 
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Cloud Masters Program makes you proficient in designing, planning, and scaling cloud implementation.  , AWS Architectural Principles, Migrating Applications on Cloud and DevOps.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Cloud Computing</li>
              <li><i class="ri-check-double-line"></i> Cloud deployment and service models</li>
              <li><i class="ri-check-double-line"></i>AWS Regions, Availability Zones, and Edge Locations</li>
              <li><i class="ri-check-double-line"></i>AWS Services</li>
              <li><i class="ri-check-double-line"></i>Ways to access AWS Services: AWS CLI, AWS SDK, AWS Management Console</li>
              <li><i class="ri-check-double-line"></i>Hands-On</li>
             </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              With internet-based computing, exchange of information has been facilitated with universal access of the computing resources also allowing enterprises to store and process huge data in data centers provided by third-party.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

 
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