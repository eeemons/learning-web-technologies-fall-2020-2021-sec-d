<?php

include("../php/controllers/sessionController.php");

if(isset($_POST['submit'])){

    $id = $_COOKIE['id'];
    $email = $_COOKIE['email'];
    $type = "admin";
    $name = $_COOKIE['name'];
    $Password = $_COOKIE['password'];
    $Newname = $_POST['newuser'];
    $Newemail = $_POST['newemail'];

    if($Newemail==null || $Newname==null){
        header('location:../edit_account.php?error=unsuccess');
    }

    else{
    $file = fopen('../admin.txt', 'w');
    $user = $id."|".$Password."|".$Newemail."|".$type."|".$Newname."\n";
    fwrite($file, $user);
    fclose($file);

    setcookie('name', $Newname, time()+3600, '/');
    setcookie('email', $Newemail, time()+3600, '/');

    header('location:../edit_account.php?error=no');
    }

    }

else{
    header('location:../edit_account.php?error=unsuccess');
}


?>