<?php
if(isset($_GET['msg'])){
	echo "check for invalid credentials";
}

?>

<html>
    <head><title>html_form</title></head>
    <body>
        <form method="POST" action="test4A.php">
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
            <input type="submit" value=Submit>
        </fieldset>
        </form>
    </body>
</html>