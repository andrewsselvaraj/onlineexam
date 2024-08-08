<?php session_start(); 
include('db_connect/online_test_json_angular_db_connect.php');

if(isset($_POST['submit']))
{

    $admin_user_email=$_POST['admin_user_email'];
	$admin_user_password=$_POST['admin_user_password'];
    $user_role="Super Admin";
	
	$result=mysqli_query($conn, 'SELECT * from admin_info where admin_email="'.$admin_user_email.'" AND admin_password="'.$admin_user_password.'" AND admin_role="'.$user_role.'"');
	if(mysqli_num_rows($result)==1)
	{
			$_SESSION['login_admin_user_email']="$admin_user_email";
			$_SESSION['login_user_role']="SUPER ADMIN";
          

	        echo "<h1>Loading.. Please Wait..!</h1>";
            echo "<script>alert('Login Successful..!')</script>";
		    echo "<script>location.href='add_organization.php'</script>";

	}
	else{
        echo "<h1>Loading.. Please Wait..!</h1>";
		echo "<script>alert('Email or password is incorrect! Please login with your Admin Credentials!')</script>";
		echo "<script>location.href='admin_login.php'</script>";
	}


}
	

	
?>
