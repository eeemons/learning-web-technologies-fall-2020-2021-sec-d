<?php
    include("../php/controllers/sessionController.php");
    
    if(isset($_GET['error'])){
		if($_GET['error'] == 'empty'){
			echo "Please enter a user to delete first";
        }
        elseif($_GET['error'] == 'none'){
            echo"Successfully deleted user";
        }
        elseif($_GET['error'] == 'yes'){
            echo"There is some unknown error";
        }
	}
?>
<html>
    <head>
        <title>User manager</title>
    </head>
    <body>
        <form action="../php/controllers/user_managercontroller.php" method="POST">
            <center>
            <img src=../img/usermanager.png length="10%" width="10%">
                <h1>Welcome to user manager...</h1>
                <table>
                <tr>
                    <th colspan="2">Users details</th>
                </tr>
                <tr>
                    <td>User name/ID</td>
                    <td>User password</td>
                </tr>
                </table><br>
                ID:
                <input type="text" name="userdelete"> <br><br>
                User Type
						<input type="radio" name="type" value="purchaser" />Purchaser
						<input type="radio" name="type" value="retailer" />Retailer
						<input type="radio" name="type" value="admin" />Admin
                        <br>
                        <br>
                <input type="submit" name="submit" value="Delete">
                </center>
        </form>
        <center><a href="admin_home.php">Back</a></center>
    </body>
</html>