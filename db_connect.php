<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
	   mysql_close($con);
  die('Could not connect: ' . mysql_error());
   }
mysql_select_db('darshan_db')or die(mysql_error());
?>
