<?php
	include("../php/controllers/sessionController.php");

	function validation(){

	if(isset($_GET['error'])){
		if($_GET['error'] == 'password_error'){
			echo "password should be at least 5 characters long";
		}
		else if($_GET['error'] == 'null'){
			echo "All field are required.";
		}
		else if($_GET['error'] == 'alphabet_error'){
			echo "Use valid character please.";
		}
		else if($_GET['error'] == 'email_error'){
			echo "Please enter a valid email address";
		}
		else if($_GET['error'] == 'false'){
			echo "Registration Successfull";
		}
	}

}
	

?>

<center>
	<form method="POST" action="../php/controllers/adminregControl.php">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset name="Reg">
						<legend><h3>REGISTRATION</h3></legend>
						Id<br/><input type="text" name="id"><br/>
						Password<br/><input type="password" name="password"><br/>
						<!-- Confirm Password<br/><input type="password" name="conpass"><br/> -->
						Name<br/><input type="text" name="name"><br/>
						Email<br><input type="text" name="email"><br>
						User Type<hr/>
						<input type="radio" name="type" value="purchaser" />Purchaser
						<input type="radio" name="type" value="retailer" />Retailer
						<input type="radio" name="type" value="admin" />Admin
						<hr/>
						<input type="submit" name="submit" value="Sign Up">
					</fieldset>
				</td>
			</tr>                                
		</table>
	</form>
	<?php validation(); ?>
	<a href="admin_home.php">Back</a>
	</center>
			