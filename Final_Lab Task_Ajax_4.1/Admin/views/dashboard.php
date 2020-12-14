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

<style>
	.dashboard-left-panel{
		background-color: yellow;
		padding-bottom: 100%;
	}
    .search-panel{
        padding-right: 50%;
        padding-top: 10%;
    }

</style>
   

    <title>ADMIN | Dashboard</title>
</head>

<body>
    <h5>Welcome Home <?=$_SESSION['username']?></h5>


    <form action="../controller/searchController.php">
        <table>
            <tr>
                <td>
                    <div class="dashboard-left-panel">
                        <nav> <a href="register_employer.php">Register</a></nav>
                        <nav> <a href="employer_list.php">Edit Employer</a></nav>
                        <nav> <a href="profile.php">Profile</a></nav>
                        <nav> <a href="../controller/logoutController.php">Logout</a></nav>
                    </div>
                </td>
            </tr>

        </table>
    </form>



</body>

</html>