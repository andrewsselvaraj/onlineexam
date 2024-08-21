<?php session_start(); 
include('db_connect/online_test_json_angular_db_connect.php');

if(isset($_POST['submit']))
{

    $admin_user_email=$_POST['admin_user_email'];
	$admin_user_password=$_POST['admin_user_password'];
    //$user_role="Organization Admin";
	
	$result=mysqli_query($conn, 'SELECT * from org_info where org_email="'.$admin_user_email.'" AND org_password="'.$admin_user_password.'" AND org_status="A"');
	if(mysqli_num_rows($result)==1)
	{
			$_SESSION['login_admin_user_email']="$admin_user_email";
			$_SESSION['login_user_role']="ORGANIZATION";
          

	        echo "<h1>Loading.. Please Wait..!</h1>";
            echo "<script>alert('Login Successful..!')</script>";
		    echo "<script>location.href='add_user.php'</script>";

	}
	else{
        echo "<h1>Loading.. Please Wait..!</h1>";
		echo "<script>alert('Email or password is incorrect! Please login with your Admin Credentials!')</script>";
		echo "<script>location.href='org_login.php'</script>";
	}


}
	

	
?>