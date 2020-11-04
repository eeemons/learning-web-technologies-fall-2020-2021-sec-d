<?php
if(isset($_GET['msg'])){
	echo "invalid request";
}

?>

<html>
<head>
	<title>PHP TASK</title>
</head>
<body>
	<form method="POST" action="test1A.php">
		Name: 
		<input type="text" name="name"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>