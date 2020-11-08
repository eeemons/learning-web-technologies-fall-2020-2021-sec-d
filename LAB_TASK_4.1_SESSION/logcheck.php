<?php

    session_start();

    if(isset($_POST['submit'])){

        $userName = $_POST['userName'];
        $password = $_POST['password'];

        if(empty($userName) || empty($password)){
            echo "Username or Password is needed";
        }
        else{
            if(isset($_COOKIE['userName']) && isset($_COOKIE['password'])){
                if($userName == $_COOKIE['userName'] && $password == $_COOKIE['password']){

                    setcookie('STATUS', 'OK', time()+3600, '/');
                    header('location: dashboard.php');

                }else{
                    echo "Wrong username or password...";
                }
            }
            else{
                echo "Account existance invalid...";
            }
            
        }

    }
    else{
        header('location:login.php'); 

    }


?>