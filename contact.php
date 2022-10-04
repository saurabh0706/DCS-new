<?php
session_start();
if(isset($_POST['btn_send']))
{
$name = $_POST['idi_name'];
$mailFrom = $_POST['idi_email'];
$message_text = $_POST['idi_text'];
 echo htmlspecialchars($_POST['idi_name']);
	if($_POST['idi_name']="" || $_POST['idi_email']=="" || $_POST['idi_text']="")
	{	$errormsg="Please fill all the required fields.";
		$_SESSION['error']=$errormsg;
		header('location: contactus.php');
	}
	else
	{
		$mailTo = 'monikaameta24@gmail.com';
		$subject = 'Website Enquiry';
		$message =  'From: '.$name.'<br />';
		$message .= 'Email: '.$mailFrom.'<br />';
		$message .= 'Message: '.$message_text;
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= 'From:' . $mailFrom;
       
		if(mail($mailTo, $subject, $message, $headers))
		{	
		header('location:contactus.php?status=0');
		}
		else
		{
		header('location:contactus.php?status=1');
		}
	}
}
?>