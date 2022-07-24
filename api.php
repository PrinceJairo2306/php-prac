<?php
session_start();
header("Content-Type:application/json");
include('connection.php');

if (isset($_GET['id']) && $_GET['id']!="") {

	$id = $_GET['id'];
	$query = "SELECT * FROM `tbl_registration` WHERE id=$id";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$personData['person_id'] = $row['id'];
	$personData['person_first_name'] = $row['first_name'];
	$personData['person_last_name'] = $row['last_name'];
	$personData['email'] = $row['email'];
	$personData['password'] = $row['password'];


	$_SESSION['person']['id']=$personData['person_id'];
	$_SESSION['person']['first_name']=$personData['person_first_name'];
	$_SESSION['person']['last_name']=$personData['person_last_name'];
	$_SESSION['person']['email']=$personData['email'];
	$_SESSION['person']['password']=$personData['password'];
	
	$response["status"] = "true";
	$response["message"] = "Person Details";
	$response["customers"] = $personData;

	echo json_encode($response); exit;

	
} else {
	$response["status"] = "false";
	$response["message"] = "No customer(s) found!";
}



?>