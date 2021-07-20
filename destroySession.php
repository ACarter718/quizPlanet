<?php
	
	session_start();
	session_destroy();
	include 'header.html';
	echo "<p>It's done</p>";
?>