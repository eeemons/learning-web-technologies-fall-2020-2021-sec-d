<?php

require_once('database.php');

if(isset($_REQUEST['msg'])){
    
    $conn = getConnection();
    deleteUser($conn, $_REQUEST['msg']); 
}

?>