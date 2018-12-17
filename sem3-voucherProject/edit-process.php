<?php require_once('config/config.php'); ?>
<html>
<?php

if(isset($_POST['txtVoucherID']) && isset($_POST['txtVoucherCode']))
{
    $txtVoucherID=$_POST['txtVoucherID'];
	//$txtStartdate=$_POST['txtStartdate'];
	//$txtEndDate=$_POST['txtEndDate'];
    $value=$_POST['txtValue'];
    $status=$_POST['txtStatus'];
	
	$sql = "UPDATE voucher SET Value='".$value."', status='".$status."' WHERE VoucherID='".$txtVoucherID."'";

	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Berjaya Di Kemaskini";
		header( "refresh:2;url=voucherPage.php" );
	} else {
		echo "Data Tidak Berjaya Di Kemaskini";
		header( "refresh:2;url=voucherPage.php" );
	}
}

?>
</html>