<?php
    
    setcookie('STATUS', 'OK', time()-3600, '/');
    header('location:../html/home.html');

?>