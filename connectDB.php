<?php
$host = "localhost";
    $user = "root";                     
    $pass = "password";                                  
    $db = "quizworld";
	$loginDB = "quizworld";        

$dbConn = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
mysqli_set_charset($dbConn, 'utf8');
if(!$dbConn){
    echo'<p>Could not connect to the database</p>';
}
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }