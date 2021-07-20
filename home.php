<?php 
	include 'session.php';
	$page_title = "Home";
	
	if(!isset($_SESSION['Email'])) {
	header("location:loginPage.php");
		echo "<p>Session ain't set</p>";
} 
	// include_once 'connectDB.php';
	
?>
	

<?php 
	include 'header.html';
	echo ("<h1 style='margin-bottom: 0;'>".$_SESSION['GivenName']."'s Home</h1> <h3 style='margin-top: 0;'>user: {$_SESSION['Email']}</h3>"); 
//forEach object in projects:
// display a list of projects

?> 
	  


<?php 
  include 'footer.php';
?>