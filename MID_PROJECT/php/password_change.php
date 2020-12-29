<?php
    include("../php/controllers/sessionController.php");
    
    if(isset($_GET['error'])){

		if($_GET['error'] == 'null'){
			echo "Fields empty";
		}
		else if($_GET['error'] == 'no'){
			echo "Password change success";
		}
	}
?>

<html>
    <head>
        <title>Passwordd reset</title>
    </head>
    <body>
        <center>
        <form action="../php/controllers/password_changeController.php" method="POST">
            <img src="../img/img2.png" length="10%" width="10%"> <br>
            <br>
            <!-- Username:
            <input type="text" name="user" value=""> <br> -->
            <br>
            <!-- Old Password:
            <input type="text" name="OldPassword" value=""> <br>
            <br> -->
            New Password:
            <input type="text" name="NewPassword" value=""> <br>
            <br>
            <!-- <a href="admin_home.html">Back</a> -->
            <input type="submit" name="submit" value="Reset">
            <br>
            <br>
            <a href="admin_home.php">Back</a>
            </form>
        </center>

       
    </body>
</html>