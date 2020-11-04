<?php
	if(!isset($_POST['Degree'])){
		header('location:5A.php?msg=errorinput');
	}

	else{
		echo $_POST['Degree'];
	}
?>