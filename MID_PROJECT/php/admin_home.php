<?php
    include("../php/controllers/sessionController.php");
?>

<html>
<head>
    <title>Admin Home</title>
</head>
<body>
    <form>
        <table border ="1" width="50%" align="center">
            <tr>
                <td><img width="50" height="50" src="../img/img1.png"></td>
                <td><a href="admin_home.php">Home</a></td>
                <td><a href="logout.php">Logout</a></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                <h1>Welcome to admin page</h1>
                <img src=../img/admin.png length="50%" width="50%">
                </td>
            </tr>
            <tr>
                <td colspan="4"><a href="user_manager.php">Manage user</a></td>
            </tr>
            <tr>
                <td colspan="4"><a href="product_manager.php">Manage product</a></td>
            </tr>
            <tr>
                <td colspan="4"><a href="edit_account.php">Edit account</a></td>
            </tr>
            <tr>
                <td colspan="4"><a href="../html/add_info.html">Add Information</a></td>
            </tr>
            <tr>
                <td colspan="4"><a href="password_change.php">Reset password</a></td>
            </tr>
            <tr>
                <td colspan="4"><a href="../html/mainpage.html">Main page</a></td>
            </tr>
            <tr>
                <td colspan="4"><a href="adminreg.php">Admin Registration</a></td>
            </tr>
            <tr>
                <td align="center" colspan="4">Copyright 2020</td>
            </tr>
        </table>
    </form>
</body>
</html>