<?php
if(isset($_GET['msg'])){
	echo "Select a blood group from drop down...";
}

?>


<html>
    <head><title>html_form</title></head>
    <body>
        <form method="POST" action="test6A.php">
            Blood Group
            <select name="Blood_group">
                <option value="none" name="err">select any option</option>
                <option value="A+" name="bg">A+</option>
				<option value="A-" name="bg">A-</option>
                <option value="B+" name="bg">B+</option>
				<option value="B-" name="bg">B-</option>
                <option value="AB+"name="bg">AB+</option>
                <option value="AB-"name="bg">AB-</option>
                <option value="O+" name="bg">O+</option>
                <option value="O-" name="bg">O-</option>
            </select>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>