<?php
    if(isset($_GET['msg'])){
        echo "Error...";
    }
?>

<html>
    <head>
        <title>html_form</title>
    </head>
    <body>
        <form method="POST" action="test8A.php">
        <table border="1" align="center" width="50%;" height="80%;">
            <tr>
                <td colspan="3" align="center"><h1>Person Profile</h1></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td>
                <input type="text" name="Name">
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="Email">
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                <input type="radio" name="gender">Male
                <input type="radio" name="gender">Female
                <input type="radio" name="gender">Other
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>
                    <input type="text" name="dd" maxlength="2" size="5"> / 
                    <input type="text" name="mm" maxlength="2" size="5"> / 
                    <input type="text" name="yy" maxlength="4" size="5"> (dd/mm/yyyy)
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>
                    <select name="Blood group">
                        <option value="">A+</option>
                        <option value="">A-</option>
                        <option value="">B+</option>
                        <option value="">B-</option>
                        <option value="">AB+</option>
                        <option value="">AB-</option>
                        <option value="">O+</option>
                        <option value="">O-</option>
                    </select>
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td>Degree</td>
                <td>
                <input type="checkbox" value="SSC"> SSC
                <input type="checkbox" value="SSC"> HSC
                <input type="checkbox" value="SSC"> BSC
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                <input type="file" name="img">
                </td>
                <td width="10%;"></td>
            </tr>
            <tr>
                <td colspan="3"> </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="submit" value="Submit">
                    <input type="submit" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>