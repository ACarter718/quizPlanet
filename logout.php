<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
session_start();

$page_title = "logout";
include 'header.html';

// echo "<p>Given Name: ".$_SESSION['GivenName']."</p>" ;
// echo "<p>Family Name: ".$_SESSION['FamilyName']."</p>" ;
// echo "<p>Email: ".$_SESSION['Email']."</p>" ;

// if(!isset($_SESSION['Email'])) {
// 	header("location:loginPage.php");
// } 


 ?>
<div class="g-signin2" data-onsuccess="onSignIn" style="margin: 20px;"></div>
<a href="#" onclick="signOut();">Sign out</a>
 <script>
	 
	signOut(); 
  
    function signOut() {
		console.log("signing out");
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function () {
			console.log('User signed out.');
		});
            
    }
  
	
</script>
 <?php
session_destroy();
// header("location:loginPage.php");
//  ?>