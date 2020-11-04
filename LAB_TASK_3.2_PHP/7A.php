<?php

if(isset($_GET['msg'])){
	echo "blank fields...";
}
?>

<html>
    <head><title>html_form</title></head>
    <body>
        <form method="POST" action="test7A.php">
            <fieldset>
                <legend>Profile Picture</legend>
                User Id
                <input type="text" name="user_ID"> <br>
                <br>
                Picture
                <input type="file" name="img">
            </fieldset>
            <br>   
            <input type="submit" value="Submit">
        </form>
    </body>
</html>