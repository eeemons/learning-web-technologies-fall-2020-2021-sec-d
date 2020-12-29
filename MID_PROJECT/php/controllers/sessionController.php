<?php
    session_start();
    
	if(!isset($_COOKIE['STATUS'])){
	
		header("location:login.php?error=invalid_request");
	
	}

?>