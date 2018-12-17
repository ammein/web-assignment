<?php require_once('config/config.php'); ?>
<html>
<link rel="stylesheet" type="text/css" href="design4.css"/>
<form id="form1" name="form1" method="POST" action="add.php">
  <p>Voucher ID <input name="txtVoucherID" type="number" /></p>
  <p>Voucher Code<input name="txtVoucherCode" type="text" /></p>
    <p>Start Date<input name="txtstartDate" type="date" /></p>
    <p>End Date<input name="txtEndDate" type="date" /></p>
    <p>Value<input name="txtValue" type="number" /></p>
    <p>Status<select>
  <option value="1" selected="selected">Unused</option>
  <option value="2">Used</option>
  
  
</select></p>

<input name="btnRegister" type="submit" value="Add" />
<input name="btnBack" type="button" value="Back" onclick="window.history.back();" />
</form>

<?php

if(isset($_POST['txtVoucherID']) && isset($_POST['txtVoucherCode']))
{
	$voucherid=$_POST['txtVoucherID'];
	$vouchercode=$_POST['txtVoucherCode'];
    $startdate=$_POST['txtstartDate'];
    $enddate=$_POST['txtEndDate'];
    $values=$_POST['txtValue'];
    $status=1;
	
	$sql="select * from voucher where VoucherID='".$voucherid."'";

	$result=mysqli_query($virtual_con,$sql);

	if (!$result) {
		echo 'Could not run query';
		exit;
	}
	else
	{
		$row = mysqli_fetch_assoc($result);
		
    $validation=0;
   
    $currentDate = date("Y-m-d");
    if($startdate > $enddate){
         $validation=1;
    }else if(empty($voucherid) || empty($vouchercode) || empty($startdate) || empty($enddate) || empty($values) || empty($status)){
         $validation=2;
    }else if($currentDate > $enddate){
         $validation=3;
    }else if($row['VoucherID']==$voucherid){
         $validation=4;
    }else{
        $validation=0;
    }
    
    if($validation==0){
    $sql = "INSERT INTO voucher (VoucherID, VoucherCode, Startdate, EndDate, Value, Status)
	VALUES ('".$voucherid."', '".$vouchercode."', '".$startdate."', '".$enddate."', '".$values."', '".$status."')";
    

	if ($virtual_con->query($sql) === TRUE) {
		echo "Data Berjaya Disimpan";
		header( "refresh:2;url=voucherPage.php" );
	} else {
		echo "Data Tidak Berjaya Disimpan";
		header( "refresh:2;url=voucherPage.php" );
	}  
    }
    else if($validation==1){
        echo "Start date can not be more than End Date";
            
    }
    else if($validation==2){
        echo "Please input all mandatory fields";
            
    }
    else if($validation==3){
        echo "Voucher already Expired";
            
    }else if($validation==4){
        echo "Voucher ID already Exist";
            
    }
	}
	
	
} 
?>
</html>