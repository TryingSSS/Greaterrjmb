<?php 	

require_once 'core.php';
require_once 'setHistory.php';

$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];
$brandName = $_POST['brandName'];

if($brandId) { 

 $sql = "UPDATE brands SET brand_status = 2 WHERE brand_id = '$brandId'";
 $sqlrecord = "INSERT INTO history (process, username, date_executed) VALUES ('Brand Deleted: $brandName', '$username', '$datetime')";
 $connect->query($sqlrecord); 
	
 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST