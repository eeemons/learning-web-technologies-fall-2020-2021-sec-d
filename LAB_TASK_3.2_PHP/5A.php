<?php
if(isset($_GET['msg'])){
	echo "Select atleast 1 degree...";
}

?>


<html>
    <head><title>html_form</title></head>
    <body>
        <form method="POST" action="test5A.php">
            <fieldset>
                <legeand>Degree</legeand> <br>
                <input type="checkbox" name="Degree" value="SSC"> SSC
                <input type="checkbox" name="Degree" value="HSC"> HSC
                <input type="checkbox" name="Degree" value="BSC"> BSC
            </fieldset>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>