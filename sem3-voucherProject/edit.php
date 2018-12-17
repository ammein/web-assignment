<?php require_once('config/config.php'); ?>
<html>
<link rel="stylesheet" type="text/css" href="design3.css"/>
<?php
if(isset($_GET['id']))
{
	$sql="select * from voucher where VoucherID='".$_GET['id']."'";

	$result=mysqli_query($virtual_con,$sql);

	if (!$result) {
		echo 'Could not run query';
		exit;
	}
	else
	{
		if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
       
            $startdate=date_create($row['Startdate']);
            $enddate=date_create($row['EndDate']);
            
            
		?>
		<form id="form1" name="form1" method="POST" action="edit-process.php">
           <p>Voucher ID <input name="txtVoucherID" type="text" value="<?php echo $row['VoucherID']; ?>" readonly /></p> 
           <p>Voucher Code <input name="txtVoucherCode" type="text" value="<?php echo $row['VoucherCode']; ?>" readonly /></p> 
            <p>Start Date<input name="txtStartdate" type="text" value="<?php echo date_format($startdate,"d/m/Y"); ?>" readonly /></p> 
            <p>End Date  <input name="txtEndDate" type="text" value="<?php echo date_format($enddate,"d/m/Y"); ?>" readonly /></p> 
            <p>Voucher Value <input name="txtValue" type="number" value="<?php echo $row['Value']; ?>" /></p>
            <p>Status<select name ="txtStatus">
                
            <option <?php if ($row['Status']==1) echo 'selected';?> value ="1">Unused</option>
             <option <?php if ($row['Status']==2) echo 'selected';?> value ="2">Used</option>

  
</select></p>
		<input name="btnEdit" type="submit" value="Edit" />
		<input name="btnBack" type="button" value="Back" onclick="window.history.back();" />
		</form>
		<?php
		}
		else
		{
			echo "Data Tidak Wujud";
			header( "refresh:2;url=voucherPage.php" );
		}
	}
}
?>

</html>

