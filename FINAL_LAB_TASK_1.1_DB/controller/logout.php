<?php
	setcookie("admin", "flag", time()-300, '/');
    header('location: ../index.php');
?>