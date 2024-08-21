<?php session_start(); 
include('db_connect/online_test_json_angular_db_connect.php');

if(isset($_POST['submit']))
{

    $user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
    //$user_role="User";
	
	$result=mysqli_query($conn, 'SELECT * from user_info where user_email="'.$user_email.'" AND user_password="'.$user_password.'" AND user_status="A"');
	if(mysqli_num_rows($result)==1)
	{
			$_SESSION['login_admin_user_email']="$user_email";
			//$_SESSION['login_user_role']="USER";
          

			$sql_to_get_role = "SELECT user_role FROM user_info WHERE user_email = '$user_email'";
				if($result=$conn->query($sql_to_get_role))
				{
				if($result->num_rows)
				{
				while($row=$result->fetch_object())
				{
					$_SESSION['login_user_role'] = $row->user_role;
				}
				}
				}


				//echo $_SESSION['login_user_role'];
	        echo "<h1>Loading.. Please Wait..!</h1>";
            echo "<script>alert('Login Successful..!')</script>";

		   if($_SESSION['login_user_role'] == "User")
		   {
			echo "<script>location.href='take_exam.php'</script>";
		   }
		   else if ($_SESSION['login_user_role'] == "Data Entry Operator") {
			echo "<script>location.href='add_question.php'</script>";
		   }
		   else if ($_SESSION['login_user_role'] == "Admin") {
			echo "<script>location.href='add_user.php'</script>";
		   }

	}
	else{
        echo "<h1>Loading.. Please Wait..!</h1>";
		echo "<script>alert('Email or password is incorrect! Please login with your correct Credentials!')</script>";
		echo "<script>location.href='index.html'</script>";
	}


}
	

	
?>
