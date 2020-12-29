<?php

    session_start();

    if(isset($_POST['button'])){

        $id = $_POST['id'];
        $password = $_POST['password'];
        $userlist  = file ('../admin.txt');
        $success = false;

        foreach ($userlist as $user) {
            $admin = explode('|', $user);

            if ($admin[0] == $id && $admin[1] == $password) {
                $success = true;
                break;
            }
        }

        if(empty($id) || empty($password)){
            //echo "Username/Password is needed";
            header('location:../login.php?error=null');
        }
        
        else if($success){

            setcookie('STATUS', 'OK', time()+3600, '/');

            $_SESSION['status'] = "OK";
            
            header('location: ../admin_home.php');
    
         }
         else{
             echo "Wrong Credentials";
         }
    }

    else{
        //echo "invalid request";
        header('location:../login.php'); 

    }


?>