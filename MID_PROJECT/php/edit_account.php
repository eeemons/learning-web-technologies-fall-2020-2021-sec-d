<?php
    include("../php/controllers/sessionController.php");

        if(isset($_GET['error'])){
            if($_GET['error'] == 'no'){
                echo "Change successful";
            }else{
                echo "Change error";
            }
     
        }
?>

<html>
    <head>
        <title>Account editing</title>
    </head>
    <body>
    <center>
    <form method="post" action="../php/controllers/editaccountcontroller.php">  
            <img src="../img/editaccount.png" length="10%" width="10%"> <br>
            <br>
           
            New Username:
            <input type="text" name="newuser" value=""> <br>
            <br>

            New Email:
            <input type="text" name="newemail" value=""> <br>
            <br>

            <input type="submit" name="submit" value="Reset">
            <br>
            <a href="password_change.php">Reset password</a>
            <br>
            <a href="../php/admin_home.php">Back</a>
    </form>
    </center>
    </body>
</html>