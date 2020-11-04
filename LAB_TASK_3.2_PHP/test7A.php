<?php
   if($_POST['user-ID']==null){
        header('location:7A.php?msg=errorinput');
    }

    $user=$_POST['user-ID'];

    if($user>='a' && $user<='z' || $user>='A' && $user<='Z' && $user>=0){
        echo $user;
    }
    else{
        header('location:7A.php?msg=errorinput');
    }

    if(!isset($_POST['img'])){
        header('location:7A.php?msg=errorinput');
    }

?>