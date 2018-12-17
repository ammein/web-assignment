<?php require_once('config/config.php');

if(isset($_GET['id']))
{
	$sql = "DELETE FROM tbluser WHERE UserID='".$_GET['id']."'";
	
	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Deleted";
		header( "refresh:5;url=location.php" );
	} else {
		echo "Data Not Successfully Delete";
		header( "refresh:5;url=location.php" );
	}

	$virtual_con->close();
} 
?>
