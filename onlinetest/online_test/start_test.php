<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
  if(isset($_SESSION['flag_value_test_completed']))
  {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script>alert('You have already taken this exam! Please login again to take this exam!')</script>";
    echo "<script> location.href='logout_process.php'</script>";
    
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

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
  <!-- =======================================================
  * Template Name: Vesperr - v4.9.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head> 

<body>
        <style>
            th,
            td {
                text-align: left;
                padding: 4px;
            }
            tr:nth-child(1){
                background-color: #f2f2f2;
            }
            table {
                border: 1px solid black;
            }
            #shadow_box_grey {
            
                border: 1px solid;
                padding: 20px;
                box-shadow: 15px 10px 18px gray;
                background: white;
            }
            body {
                background-color: #f3f3f3;
            }
            #footer {
                background-color: ghostwhite;
            }
            .navbar .getstarted, .navbar .getstarted:focus {
  background: #e64a4a;
    }
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
                <?php
              if($_SESSION['login_user_role'] == "Admin" || $_SESSION['login_user_role'] == "SUPER ADMIN")
              {
                ?>
                   <li><a class="nav-link scrollto" href="add_organization.php">Add Organization</a></li>
                    <li><a class="nav-link scrollto" aria-current="page" href="add_user.php">Add User</a></li>
                    <li><a class="nav-link scrollto" aria-current="page" href="add_class.php">Add Class</a></li>
                    <li><a class="nav-link scrollto" aria-current="page" href="add_subject.php">Add Subject</a></li>
                    <li><a class="nav-link scrollto" href="add_question.php">Add Questions</a></li>
                    <li><a class="nav-link scrollto" href="display_questions.php">Modify Questions</a></li>
                    <li><a class="nav-link scrollto active" aria-current="page" href="take_exam.php">Take exam</a></li>

               <?php
              }
            else if($_SESSION['login_user_role'] == "User") {

            
              ?>
              <li><a class="nav-link scrollto active" aria-current="page" href="take_exam.php">Take exam</a></li>


                      <?php
            }
            ?>
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
            <div id="shadow_box_grey">
            <div style="overflow-x: auto">
                <div ng-app="myApp" ng-controller="myController">
                    <!-- table ng-repeat="exam_source in arrimage_values" class="table table-sm table-hover" -->
                    <table ng-repeat="exam_source in getCurrentPageQuestions()" class="table table-sm table-hover">
                        <tr>
                            <td><b>Q: </b></td>
                            <td>
                              <!-- //to display question id
                              {{exam_source.pk_question_id}}
          -->
                                <font color="brown"
                                    >{{$index+1}} <b>{{exam_source.question_name}}</b></font
                                >
                            </td>
                        </tr>
                        <!--<tr class="table-info">
                            <td><b>Question Type: </b></td>
                            <td>
                                <font color="red"
                                    ><b>{{exam_source.question_type}}</b></font
                                >
                            </td>
                        </tr>
          -->
                        <!--
                        <tr>
                            <td><input type="radio" name="test_ans1" ng-model="exam_source.selectedOption" value="a" />(a)</td>
                            <td>
                                <div ng-if="exam_source.question_type == 'image'">
                                    <img src="{{exam_source.answers}}" />
                                </div>
                                <div ng-if="exam_source.question_type == 'text'">
                                    {{exam_source.answers}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="test_ans2" ng-model="exam_source.selectedOption" value="b" />(b)</td>
                            <td>
                                <div ng-if="exam_source.question_type == 'image'">
                                    <img src="{{exam_source.answers}}" />
                                </div>
                                <div ng-if="exam_source.question_type == 'text'">
                                    {{exam_source.answers}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="test_ans3" ng-model="exam_source.selectedOption" value="c" />(c)</td>
                            <td>
                                <div ng-if="exam_source.question_type == 'image'">
                                    <img src="{{exam_source.answers}}" />
                                </div>
                                <div ng-if="exam_source.question_type == 'text'">
                                    {{exam_source.answers}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="test_ans4" ng-model="exam_source.selectedOption" value="d" />(d)</td>
                            <td>
                                <div ng-if="exam_source.question_type == 'image'">
                                    <img src="{{exam_source.answers}}" />
                                </div>
                                <div ng-if="exam_source.question_type == 'text'">
                                    {{exam_source.answers}}
                                </div>
                            </td>
                        </tr>
        -->
        <tr ng-repeat="option in exam_source.options">
          <td>
            <input type="radio" name="test_ans{{$index + 1}}_{{exam_source.pk_question_id}}" ng-model="exam_source.selectedOption" ng-value="option.value" />({{option.label}})
          </td>
          <td>
            <div ng-if="exam_source.question_type == 'image'">
              <img src="{{option.answer}}" />
            </div>
            <div ng-if="exam_source.question_type == 'text'">
              {{option.answer}}
            </div>
          </td>
        </tr>
                       
                    </table>
                    <br />
                  
                   <button class="btn btn-secondary" ng-click="prevPage()" ng-disabled="currentPage == 0">Previous</button>
        <button class="btn btn-secondary" ng-click="nextPage()" ng-disabled="currentPage >= getTotalPages() - 1">Next</button> <br /><br />
        <center> <button class="btn btn-primary" ng-click="submitExam()">Submit Exam</button>  </center>
                </div>
            </div>
            </div>
        </div>
        <br /><br /><br /><br /><br /><br />
        <div class="fixed-bottom" id="footer">
            <center>Efreelearn | All rights reserved</center>
            </div>

            <script>
  var app = angular.module('myApp', []);
  app.controller('myController', function($scope, $http) {


    $scope.currentPage = 0;
  $scope.itemsPerPage = 5;

  $scope.getTotalPages = function() {
    return Math.ceil($scope.arrimage_values.length / $scope.itemsPerPage);
  };

  $scope.getCurrentPageQuestions = function() {
    var startIndex = $scope.currentPage * $scope.itemsPerPage;
    var endIndex = startIndex + $scope.itemsPerPage;
    return $scope.arrimage_values.slice(startIndex, endIndex);
  };

  $scope.nextPage = function() {
    if ($scope.currentPage < $scope.getTotalPages() - 1) {
      $scope.currentPage++;
    }
  };

  $scope.prevPage = function() {
    if ($scope.currentPage > 0) {
      $scope.currentPage--;
    }
  };


    var request = {
      method: 'get',
      //url: 'http://localhost/practice/angular_js/online_test/fetch_online_test_data.php',
      //url: 'http://107.155.116.31/online_test/fetch_online_test_data.php',
      url: 'http://63.142.240.31/m2its/online_test/fetch_online_test_data.php',
      //url: 'http://localhost/practice/angular_js/online_test/exam_source.json',
                    //url: 'http://107.155.116.31/online_test/exam_source.json',
                    //url: 'http://localhost/practice/angular_js/online_test/fetch_online_test_data.php',
                    
                    
      dataType: 'json',
      contentType: 'application/json',
    };

    $scope.arrimage_values = [];

    $http(request)
      .then(function(response) {
        var jsonData = response.data;

        $scope.arrimage_values = jsonData.map(function(question, index) {
          return {
            pk_question_id: question.pk_question_id,
          question_name: question.question_name,
          question_type: question.question_type,
          
          options: question.options.split(', ').map(function(answer, index) {
            var parts = answer.split('::::: ');
            return {
              pk_answer_id: parts[0], // pk_answer_id
              label: String.fromCharCode(97 + index), // Option labels: a, b, c, d, ...
              value: parts[0], // Option values: pk_answer_id from exam_source
              //answer: parts[1].trim(),
              answer: parts[1],
            };
          })
        };
      });
    })
      .catch(function(error) {
        console.error(error);
      });
      
    $scope.submitExam = function() {
        var selectedOptions = [];
        
        // Iterate over the array of exam sources
        for (var i = 0; i < $scope.arrimage_values.length; i++) {
            var examSource = $scope.arrimage_values[i];
            
            // Create an object to store the selected question and option
            var selectedOption = {
                question_id: examSource.pk_question_id,
                question: examSource.question_name,
                selected: examSource.selectedOption
            };
            
            // Add the selected option to the array
            selectedOptions.push(selectedOption);
        }
        
        // Send the selected options to the server for storage
        var request = {
            method: 'POST',
            url: 'store_answers.php', // Replace with the URL of your server-side PHP script
            data: selectedOptions
        };

        $http(request)
            .success(function (response) {
                console.log(response);
                // Handle the response from the server
            })
            .error(function (error) {
                console.log(error);
                // Handle the error
            });
            alert("Thanks for attending the exam! Your Answers were submitted successfully!");
            location.href="calculate_mark.php";
    };


  });
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
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
<?php 
}
else {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script> alert('Please Login..!')</script>";
    echo "<script> location.href='index.html'</script>";
}
?>