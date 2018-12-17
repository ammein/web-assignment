<?php require_once('config/config.php');

if(isset($_GET['id']))
{
	$sql = "DELETE FROM voucher WHERE VoucherID='".$_GET['id']."'";
	
	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Berjaya Di Hapuskan";
		header( "refresh:2;url=voucherPage.php" );
	} else {
		echo "Data Tidak Berjaya Di Hapuskan";
		header( "refresh:2;url=voucherPage.php" );
	}

	$virtual_con->close();
} 
?>
