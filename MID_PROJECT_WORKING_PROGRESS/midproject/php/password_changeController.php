<?php

if(isset($_POST['submit'])){

    $id = $_COOKIE['id'];
    $email = $_COOKIE['email'];
    $type = "admin";
    $name = $_COOKIE['name'];
    $NewPassword = $_POST['NewPassword'];
    
if($NewPassword==null){
        header('location:password_change.php?error=null');
    }

    else{
        $file = fopen('../admin.txt', 'w');
        $user = $id."|".$NewPassword."|".$email."|".$type."|".$name."\n";
        fwrite($file, $user);
        fclose($file);
    
        setcookie('password', $NewPassword, time()+3600, '/');
    
        header('location:password_change.php?error=no');
    }
}
else{
    echo "Invalid request";
}

?>
