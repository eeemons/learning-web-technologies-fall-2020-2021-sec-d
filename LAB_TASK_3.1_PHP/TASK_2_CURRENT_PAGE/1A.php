<?php	 
	if(isset($_REQUEST['submit'])){
		$name = $_POST['name'];
		
		if($name == ""){
			echo "Empty...";
		}
		
		else{
			echo $_POST['name'];
		}
	}
?>

<html>
<head>
	<title>PHP TASK</title>
</head>
<body>
	<form method="POST" action="1A.php">
		Name: 
		<input type="text" name="name"> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>