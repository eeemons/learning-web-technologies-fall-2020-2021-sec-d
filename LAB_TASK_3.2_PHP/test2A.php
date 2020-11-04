<?php
	$email= $_POST['email'];
	if($email==null){
		header('location:1A.php?msg=errorinput');
	}
?>