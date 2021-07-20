<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
session_start(); 
// $_SESSION['Email'] = 'acarter@fuckyou.com';


if($_SERVER['REQUEST_METHOD']=='POST'){
	$needsReload = false;
	$errors = []; // Initialize an error array.	
	
	// Check for a first name:
	if(!empty($_POST['idGivenName'])) {
		$_SESSION['GivenName'] = $_POST['idGivenName'];		
	}
	
	if(!empty($_POST['idFamilyName'])) {
		$_SESSION['FamilyName'] = $_POST['idFamilyName'];
	}
	
	if(!empty($_POST['idEmail'])) {
		$_SESSION['Email'] = $_POST['idEmail'];	
	}
	
	if(!empty($_POST['idPicture'])) {
		$_SESSION['Picture'] = $_POST['idPicture'];	
	}
} else {
	$needsReload = true;
} 	

if(isset($_SESSION['Email'])) {
	header("location:home.php");
	
} 

include 'header.html';

include 'login.html';
	


// echo "<p>Given Name: ".$_SESSION['GivenName']."</p>" ;
// echo "<p>Family Name: ".$_SESSION['FamilyName']."</p>" ;
// echo "<p>Email: ".$_SESSION['Email']."</p>" ;

?>