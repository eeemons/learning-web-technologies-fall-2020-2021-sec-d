<?php

function validation(){

	if(isset($_GET['error'])){

		if($_GET['error'] == 'null'){
			echo "All fields are required.";
		}
		else if($_GET['error'] == 'invalid'){
			echo "Wrong credentials ";
		}
		else if($_GET['error'] == 'invalid_request'){
			echo "Invalid Request Please Login ";
		}
	}

}
	
?>



<center>
<form method="POST" action="../php/controllers/loginController.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<a href="admin_home.php"> 
						<input type="submit" name="button" value="Login">
					</a>
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
<?php validation(); ?>
<a href="../html/home.html">Back</a>

</center>