<?php
session_start();
require_once 'config/function.php';
require_once 'config/db.php';


date_default_timezone_set('Asia/Jakarta');
$waktu = date("Hi");


    if (isset($_COOKIE['username'])) {
      header("Location: /user/index.php");
    }else{
    	header("Location: login.php?login"); 
    }



?>