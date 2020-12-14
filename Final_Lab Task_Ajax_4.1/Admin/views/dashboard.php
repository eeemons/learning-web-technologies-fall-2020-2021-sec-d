<?php
    require_once('../controller/sessionController.php');	
    require_once('../services/userService.php');


    $user = SearchByUsername($_SESSION['username']);

    if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
    }
    


?>

<!DOCTYPE html>
<html>

<head>
   

    <title>ADMIN | Dashboard</title>
</head>

<body>
    <center>
    <h1>Welcome Home <?=$_SESSION['username']?></h1>


    <form action="../controller/searchController.php">
        <table>
            <tr>
                <td>
                    <div class="dashboard-left-panel">
                        <a href="change_password.php">Change Password</a><br>
                        <a href="profile.php">Profile</a><br>
                        <a href="user_list.php">View User</a><br>
                        <a href="../controller/logoutController.php">Logout</a><br>

                    </div>
                </td>
            </tr>

        </table>
    </form>
</center>


</body>

</html>