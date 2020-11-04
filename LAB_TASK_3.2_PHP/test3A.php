<?php
	
if(!isset($_REQUEST['gender'])){
		header('location:3A.php?msg=errorinput');
	}

	if($_REQUEST['gender']=="Male"){
		echo $_REQUEST['gender'];
	}

	if($_REQUEST['gender']=="Female"){
		echo $_REQUEST['gender'];
	}

	if($_REQUEST['gender']=="Other"){
		echo $_REQUEST['gender'];
	}

?>