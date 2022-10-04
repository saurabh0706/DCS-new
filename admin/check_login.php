<?php 
include('db_connect.php');
session_start();
	if($_POST['username']==null  || $_POST['password']==null)
	{
		$_SESSION['is_login']=0;
		header('location:index.php?login_remark=1');
	}
	else
	{
		$sql="select * from admin where (admin_username='".$_POST['username']."' or admin_email='".$_POST['username']."') and admin_password='".md5($_POST['password'])."' and status='1'";
		$result=mysql_query($sql) or die(mysql_error());
		$rows=mysql_fetch_array($result);
		if(mysql_num_rows($result)==0)
		{	
			$_SESSION['is_login']=0;
			header('location: index.php?login_remark=2');
		}
		else
		{
			$_SESSION['is_login']=1;
			$_SESSION['adminname']=$rows['admin_name'];
			$_SESSION['adminid']=$rows['admin_id'];
			$_SESSION['adminemail']=$rows['admin_email'];
			$_SESSION['adminmobile']=$rows['admin_mobile'];
			$_SESSION['joining_date']=$rows['doj'];
			header('location:admin.php');
		}
		 
		 
	}
	
	
	

?>