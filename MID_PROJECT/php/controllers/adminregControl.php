<?php

    session_start();

    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = ( $_POST['password']);
        $name = $_POST['name'];
        $type =  $_POST['type'];

        if(empty($id) || empty($email) || empty($password) || empty($name) || empty($type)){
           // echo "Can't accept null";
           header('location:../adminreg.php?error=null');
        }
        elseif($name>!'a'&& $name<!'z' || $name>!'A' && $name<!'Z'){
            header('location:../adminreg.php?error=alphabet_error');
        }
        else if(strlen($password) < 5){
            header('location:../adminreg.php?error=password_error');

        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('location:../adminreg.php?error=email_error');
        }
        else{
            setcookie('name', $name, time()+3600, '/'); 
            setcookie('email', $email, time()+3600, '/');
            setcookie('id', $id, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');
            setcookie('type', $type, time()+3600, '/');

            if($type == 'purchaser'){
                $file = fopen('../purchaser.txt', 'a');
                $user = $id."|".$password."|".$email."|".$type."|".$name."\n";
                fwrite($file, $user);
                fclose($file);

            }
            else if($type == 'retailer'){
                $file = fopen('../retailer.txt', 'a');
                $user = $id."|".$password."|".$email."|".$type."|".$name."\n";
                fwrite($file, $user);
                fclose($file);

            }
            else{
                $file = fopen('../admin.txt', 'a');
                $user = $id."|".$password."|".$email."|".$type."|".$name."\n";
                fwrite($file, $user);
                fclose($file);
            }
        
            //echo "Registration Done..!";
            header('location:../adminreg.php?error=false');
        }
    }
    

    else{
        echo "invalid request";
        //header('location:login.html'); 

    }


?>