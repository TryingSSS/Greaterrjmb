<?php 
if (!isset($_SESSION))
{
	session_start();
}
require_once 'db_connect.php';

// echo $_SESSION['userId'];

if(!$_SESSION['userId']) {
	header('location: http://localhost/supply/index.php');	
}
?>