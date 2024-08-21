<?php include("db_connection/m2i_db_connect.php");
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $u_contact_id = uniqid();
    $sql = "INSERT INTO contact_m2i (m_contact_id, m_name, m_email, m_subject, m_message) VALUES ('$u_contact_id','$name','$email','$subject','$message')";
    //echo $sql;
    if($conn->query($sql) === TRUE)
	{
        $from_email = $email;
        $to="info@m2its.com";
        $email_subject="M2i Technology Solutions PVT LTD | New Message received";
        $mail_message="Greetings! You have received a new message via contact form. Sender: $name | Email: $email | Subject: $subject | Message: $message";
        $headers="From: ".$from_email;
        if(mail($to, $email_subject, $mail_message, $headers))
        {
            echo "<script>alert('Your message has been submitted successfully!')</script>";
            echo "<h1>Loading... Please wait...</h1>";
            echo "<script>location.href='test.html#contact'</script>";
        }
    }
    else
    {
        echo "Insert data fail" . $conn->error;
        echo "<script>alert('Error! Please contact your website admin!')</script>";
        echo "<script>location.href='test.html#contact'</script>";
    }
    
}
else {
    echo "<script>location.href='index.html'</script>";
}
?>