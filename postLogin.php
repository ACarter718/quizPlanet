<?php

include 'connectDB.php';

// $dbWho = $loginDB;
// $table = "user";

// $dbConn->select_db($loginDB);
// $msg = array(
// 	"Selected the <em>$dbWho</em> DB..<br><br>\r\n"
// );


// $myusername=$_POST['myusername']; 
// $mypassword=$_POST['mypassword']; 

// $myusername= stripslashes($myusername);
// $mypassword= stripslashes($mypassword);
// $myusername= mysqli_real_escape_string($dbConn, $myusername);
// $mypassword= mysqli_real_escape_string($dbConn, $mypassword);


// $query="SELECT * FROM `$table`  WHERE  email='$myusername' and passwordHash='$mypassword' " ;
// $result=$dbConn->query($query);

// $count=mysqli_num_rows($result);
// //if result matched $myusername and $mypassword, the count of table rows should equal 1

// $msg[] = "Result of query: <em>$count</em>\r\n";





// if($count==1){
// 	//Register session variables and redirect the user to "login_success.php" page
// 	session_start();
// 	$_SESSION['MyUserName']=$myusername;
	
// 	while ($result_ar = mysqli_fetch_assoc($result)) {

// 		// assessment table contains
// 		$_SESSION['FirstName']=$result_ar['firstName'];
// 		$_SESSION['LastName']=$result_ar['lastName'];
// 		$_SESSION['userId']=$result_ar['id'];
		
// 	}
	
	
	


 	header("location:login_success.php");
// }
// else {
// 	echo "Wrong Username or Password";
// }

// print_r($msg);
// ?>