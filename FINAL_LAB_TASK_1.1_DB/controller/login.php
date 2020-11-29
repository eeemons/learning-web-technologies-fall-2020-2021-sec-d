  
<?php

require_once('database.php');

if(isset($_REQUEST['login'])){
    
    if(empty($_REQUEST['username']) or empty($_REQUEST['password'])){
        
        header('location: ../index.php?msg=null');
        
    }
    
    else{
        
        $conn = getConnection();
        checkUser($conn, $_REQUEST['username'], $_REQUEST['password']);
        
    }
    
}



?>