<?php	 
	if(isset($_REQUEST['submit'])){
		$name = $_POST['email'];
		
		if($name == ""){
			echo "Empty...";
		}
		
		else{
			echo $_POST['email'];
		}
	}
?>

<html>
<head>
	<title>PHP TASK</title>
</head>
<body>
	<form method="POST" action="2A.php">
		Email:
		<input type="text" name="email"> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>