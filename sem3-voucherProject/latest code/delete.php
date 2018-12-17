<?php require_once('config/config.php');

if(isset($_GET['id']))
{
	$sql = "DELETE FROM tbluser WHERE UserID='".$_GET['id']."'";
	
	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Berjaya Di Hapuskan";
		header( "refresh:5;url=location.php" );
	} else {
		echo "Data Tidak Berjaya Di Hapuskan";
		header( "refresh:5;url=location.php" );
	}

	$virtual_con->close();
} 
?>
