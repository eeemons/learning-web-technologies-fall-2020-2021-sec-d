<?php
    session_start();
    if(isset($_POST['submit'])){
        if($_POST['userdelete']==null){
            header('location:user_manager.php?error=empty');
        }
        else{
            $deleteuser=$_POST['userdelete'];
            $type=$_POST['type'];
        
            if($type=='purchaser'){
                //finding the correct user from file and delete
                //otherwise header to user_manager.php with error
            }
            elseif($type=='retailer'){
                //finding the correct user from file and delete
                //otherwise header to user_manager.php with error  
            }
            else{
                //admin
                //finding the correct user from file and delete
                //otherwise header to user_manager.php with error 
            }
        }
    }

?>