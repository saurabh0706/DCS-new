<?php
  session_start();
  require_once('db_connect.php');
    if(isset($_GET['logout'])){
         
         session_destroy();
         header('Location:index.php');
         exit;
   }
?>