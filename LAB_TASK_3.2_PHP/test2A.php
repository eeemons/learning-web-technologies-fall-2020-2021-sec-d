<?php
	$email= $_POST['email'];
	if($email==null){
		header('location:2A.php?msg=errorinput');
	}
	else{
		echo $_POST['email'];
	}
?>