<?
	if(isset($_GET['email'])){
		echo "invalid/empty input";
	}

?>

<html>
<head>
	<title>PHP TASK</title>
</head>
<body>
	<form method="POST" action="test2A.php">
		Email:
		<input type="email" name="email"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>