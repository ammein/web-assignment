<?php require_once('config/config.php'); ?>
<html>
<?php

if(isset($_POST['txtUsername']) && isset($_POST['txtPassword']))
{
	$userid=$_POST['txtUsername'];
	$pass=$_POST['txtPassword'];
	
	$sql = "UPDATE tbluser SET Password='".$pass."' WHERE UserID='".$userid."'";

	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Succesfully Update";
		header( "refresh:5;url=location.php" );
	} else {
		echo "Data Not Succesfully Update";
		header( "refresh:5;url=location.php" );
	}
}

?>
</html>