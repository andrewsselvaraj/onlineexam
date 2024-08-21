<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
  if($_SESSION['login_user_role'] == "User")
  {
    echo "<script> location.href='take_exam.php'</script>";
  }
  else if ($_SESSION['login_user_role'] == "Data Entry Operator")
  {
    echo "<script> location.href='add_question.php'</script>";
  }
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


<style>
  #example1 {
  border: 1px solid;
  padding: 20px;
  border-radius: 10px;
  border: 2px solid #eceef1;
  background: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  
}
body {
       /* background-color: #f7f7f7;
       background-image: url('images/blue_bg.jpg'); */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .navbar .getstarted, .navbar .getstarted:focus {
  background: #e64a4a;
    }
  table, th, td {
	border: 3px groove;
	border-radius: 5px;
        border-collapse: separate;
	
    }
  th {
	background-color: skyblue;
	text-align: center;
   }
  td {
	text-align: center;
   }

</style>
<?php include('db_connect/online_test_json_angular_db_connect.php'); ?>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">Online Exam</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

<nav id="navbar" class="navbar">
        <ul>
                
                <?php
              if($_SESSION['login_user_role'] == "SUPER ADMIN")
              {
                ?>

              <li><a class="nav-link scrollto" href="add_organization.php">Add Organization</a></li>
              <li><a class="nav-link scrollto" aria-current="page" href="add_user.php">Add User</a></li>
              <li><a class="nav-link scrollto" aria-current="page" href="add_class.php">Add Class</a></li>
              <li><a class="nav-link scrollto" aria-current="page" href="add_subject.php">Add Subject</a></li>
              <li><a class="nav-link scrollto" href="add_question.php">Add Questions</a></li>
              <li><a class="nav-link scrollto" href="display_questions.php">Modify Questions</a></li>
					<li class="dropdown"><a class="nav-link scrollto active" href="#"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
						<li><a class="nav-link scrollto active" href="report.php">Total reports</a></li>
						<li><a href="user_report.php">User Reports</a></li>
						<li><a class="nav-link scrollto" href="mark_report.php">Mark reports</a></li>
						</ul>
					 </li>
              <li><a class="nav-link scrollto" aria-current="page" href="take_exam.php">Take exam</a></li>

                  <?php 
              }
              else if ($_SESSION['login_user_role'] == "Admin") {
                ?>
              <li><a class="nav-link scrollto" aria-current="page" href="add_user.php">Add User</a></li>
              <li><a class="nav-link scrollto" aria-current="page" href="add_class.php">Add Class</a></li>
              <li><a class="nav-link scrollto" aria-current="page" href="add_subject.php">Add Subject</a></li>
              <li><a class="nav-link scrollto" href="add_question.php">Add Questions</a></li>
              <li><a class="nav-link scrollto" href="display_questions.php">Modify Questions</a></li>
					<li class="dropdown active"><a class="nav-link scrollto active" href="#"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
						<li><a class="nav-link scrollto active" href="report.php">Total reports</a></li>
						<li><a href="user_report.php">User Reports</a></li>
						<li><a class="nav-link scrollto" href="mark_report.php">Mark reports</a></li>
						</ul>
					 </li>
              <li><a class="nav-link scrollto" aria-current="page" href="take_exam.php">Take exam</a></li> 
                  <?php

              }
              ?>

              <li><a class="getstarted scrollto" href="logout_process.php">Logout</a></li>
            
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!--
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Online Test</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                
            
                
                <li class="nav-item">
                        <a class="nav-link active" href="add_organization.php">Add Organization</a>
                      </li>
                      <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="add_user.php">Add User</a>
                  </li>
                      <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="add_class.php">Add Class</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="add_subject.php">Add Subject</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="add_question.php">Add Questions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="take_exam.php">Take exam</a>
                  </li>
               

                
               <li class="nav-item">
       
       <a href="logout_process.php"><button class="btn btn-danger">Logout</button></a>
  
     </li>

                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <form role="search">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            
              </ul>
              </div>
            </div>
          </nav>
  -->
<div class="container">

<br /><br /><br /><br />
<h6>Logged in as: <b><font color="maroon"><?php echo $_SESSION['login_admin_user_email']; ?></font></b></h6>
<h6>Role: <b><font color="green"><?php echo $_SESSION['login_user_role']; ?></font></b></h6>
<hr>
<h2><u>Total Reports</u></h2>
<div id="example1" style="background-image: url('images/design2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
<div style="overflow-x:auto;">

<?php
	$sql = "SELECT DISTINCT org_name, class_name, subject_name FROM org_info JOIN class_info ON org_info.pk_org_id = class_info.fk_org_id JOIN subject_info ON class_info.pk_class_id = subject_info.fk_class_id";
	//$sql1 = "SELECT DISTINCT count(org_name), count(class_name), count(subject_name) FROM org_info JOIN class_info ON org_info.pk_org_id = class_info.fk_org_id JOIN subject_info ON class_info.pk_class_id = subject_info.fk_class_id";
	$result = $conn->query($sql);
	//$count = $conn->query($sql1);

	if ($result->num_rows > 0) {
 	echo "<table cellspacing ='10' cellpadding ='10'>";
	echo "<th>Organization Names</th><th>Class Names</th><th>Subject Names</th>";
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>". $row["org_name"]."</td><td>". $row["class_name"]."</td><td>". $row["subject_name"]."</td></tr>";

    	}	
	echo "</table>";


	}else {
    	echo "0 results";
	}

	/* echo "<br><br>";

	//total count
	if ($count->num_rows > 0) {
 	echo "<table cellspacing ='10' cellpadding ='10'>";
	echo "<th>Total Organizations</th><th>Total Classes</th><th>Total Subjects</th>";
    	while($row = $count->fetch_assoc()) {

        echo "<tr><td>". $row["count(org_name)"]."</td><td>". $row["count(class_name)"]."</td><td>". $row["count(subject_name)"]."</td></tr>";

    	}	
	echo "</table>";

	}else {
    	echo "0 results";
	}  */

$conn->close();
?>
</div>

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

    </section>
    -->
    <!-- End Services Section -->
 
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
<?php include('includes/footer.php'); ?>
<!-- ======= Footer ======= -->

</html>
<?php 
}
else {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script> alert('Please Login..!')</script>";
    echo "<script> location.href='index.html'</script>";
}
?>