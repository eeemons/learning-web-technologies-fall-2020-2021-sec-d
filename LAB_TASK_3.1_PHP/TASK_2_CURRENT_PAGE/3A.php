<?php	 
	if(isset($_REQUEST['submit'])){
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yy = $_POST['yy'];
		
		if($dd == "" || $mm == "" || $yy == ""){
			echo "Empty...";
		}
		
		else{
            echo $_POST['dd'];
	        echo "/";
	        echo $_POST['mm'];
	        echo "/";
	        echo $_POST['yy'];
		}
	}
?>

<html>
    <head><title>html_form</title></head>
    <body>
        <form method="POST" action="3A.php">
           <fieldset> 
            <fieldset>
                <legend><b>Date of Birth</b></legend>
                <table>
                    <tr>
                        <td align="center">dd</td>
                        <td align="center">mm</td>
                        <td align="center">yy</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="dd" maxlength="2" size="5"> / </td>
                        <td><input type="text" name="mm" maxlength="2" size="5"> / </td>
                        <td><input type="text" name="yy" maxlength="4" size="5"></td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <input type="submit" name="submit" value=Submit>
        </fieldset>
        </form>
    </body>
</html>