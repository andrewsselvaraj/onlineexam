<script>
            var app = angular.module('myApp', []);
            app.controller('myController', function ($scope, $http) {
                var request = {
                    method: 'get',
                    //url: 'http://localhost/practice/angular_js/online_test/exam_source.json',
                    //url: 'http://107.155.116.31/online_test/exam_source.json',
                    url: 'http://localhost/practice/angular_js/online_test/fetch_online_test_data.php',
                    //url: 'http://107.155.116.31/online_test/fetch_online_test_data.php',
                    dataType: 'json',
                    contentType: 'application/json',
                };

                $scope.arrimage_values = new Array();

                $http(request)
                    .success(function (jsonData) {
                        $scope.arrimage_values = jsonData;

                        $scope.list = $scope.arrimage_values;
                        var arrlength = $scope.list.length;
                        var j;
                        for (let j = 0; j < arrlength; j++) {
                            console.log(j);
                            console.log($scope.list[j].qtype);
                        }
                    })

                    
                    .error(function () {});

                    


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
            alert("Answers were submitted successfully! For security reasons, we are logging you out. Please login back to continue!");
            location.href="logout_process.php";
    };

   
            });
           
        </script>