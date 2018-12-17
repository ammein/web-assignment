<?php require_once('config/config.php'); ?>
<html>
<form id="form1" name="form1" method="POST" action="add.php">
  <p>Username <input name="txtUsername" type="text" /></p>
  <p>Password<input name="txtPassword" type="password" /></p>
<input name="btnRegister" type="submit" value="Register" />
</form>

<?php

if(isset($_POST['txtUsername']) && isset($_POST['txtPassword']))
{
	$userid=$_POST['txtUsername'];
	$pass=$_POST['txtPassword'];
	
	$sql = "INSERT INTO tbluser (UserID, Password)
	VALUES ('".$userid."', '".$pass."')";

	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Stored";
		header( "refresh:5;url=location.php" );
	} else {
		echo "Data Not Stored";
		header( "refresh:5;url=location.php" );
	}
	
} 
?>
</html>