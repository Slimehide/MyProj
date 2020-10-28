<?php 
	session_start();
	// $_SESSION["auth"]
	// $_SESSION["user_id"]
    if (isset($_SESSION['name'])) {
    	echo 1;
    } else {
    	echo 2;
    }
?>