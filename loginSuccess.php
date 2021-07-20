<?php 
include 'session.php';

// header("location:index.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	Login Successful<br>
	<?php
		echo("<p>{$_SESSION['Email']}</p>");
		echo("<p>{$_SESSION['GivenName']}</p>");
		echo("<p>{$_SESSION['FamilyName']}</p>");
		echo("<img src='{$_SESSION['Picture']}'><br>")
		
	?>
	<p><a href="home.php">Go to my page</a></p>
	</body>
</html>
