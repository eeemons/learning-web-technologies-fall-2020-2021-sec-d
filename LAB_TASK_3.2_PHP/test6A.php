<?php
	if($_POST['Blood_group']=="none"){
		header('location:6A.php?msg=errorinput');
	}
	else{
		echo $_POST['Blood_group'];
	}
?>