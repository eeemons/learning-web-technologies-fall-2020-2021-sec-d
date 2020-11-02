<?php	 
    if(isset($_REQUEST['submit'])){
        
        if($_POST['gender']=="Male" || $_POST['gender']=="Female" || $_POST['gender']=="Other"){
            echo $_POST['gender'];
		}
		
		else{            
            echo "Empty.....";
		}
	}
?>


<html>
    <head><title>html_form</title></head>
    <body>
        <form method="POST" action="4A.php">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender"value="Male">Male
                <input type="radio" name="gender"value="Female">Female
                <input type="radio" name="gender"value="Other">Other
            </fieldset>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>