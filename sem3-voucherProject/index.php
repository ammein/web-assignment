<?php require_once('include/header.php'); ?>
<?php require_once('include/function.php'); ?>


<?php require_once('config/config.php'); ?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="design2.css"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<?php

if (isset($_SESSION['UserId'])){
	$to=$_SESSION['interface'];
	goto1($to);
}
?>
<?php
if (isset($_POST['txtUsername']))
{
	$userid=$_POST['txtUsername']; //USER INPUT
	$pass=$_POST['txtPassword'];
	//SQL STATEMENT
$sql="select * from tbluser where UserId='".$userid."' and Password ='".$pass."'";

	//SQL STATEMENT END
	//$db=mysql_select_db($database,$virtual_con);
	$result=mysqli_query($virtual_con,$sql);
	//$result=mysql_query($sql);
	if (!$result) {
    	echo 'Could not run query: ' . mysql_error();
    	exit;
	}

  $row = mysqli_fetch_assoc($result);
  	//echo $row;
  	$UserId=$row["UserID"];
  	$Name=$row["Name"];
  	//session_register("uName");
  	$_SESSION['UserID']=$UserId;
  	$_SESSION['Name']=$Name;
  	$_SESSION['UserType']=$row["UserType"];
  	$sql1="select interface from category where UserType='".$row["UserType"]."'";
  	$result1=mysqli_query($virtual_con,$sql1);
  	$row1 = mysqli_fetch_assoc($result1);
  	echo $row["UserID"];
  	//echo $row1;
  	if (empty($row["UserID"])){
  		echo 'No such user.Login Again';
  	}else
  	{
  		//call a function
  		$to=$row1["interface"];
  		$_SESSION['interface']=$to;
  		goto1($to);
  	}
  }
  else{
  ?>


  <form id="form1" name="form1" method="POST" action="index.php">
    <p>Please enter your username and password</p>
    <p>Username <input name="txtUsername" type="text" /></p>
    <p>Password<input name="txtPassword" type="password" /></p>
  <input name="btnLogin" type="submit" value="Login" />
  </form>


<?PHP
    }
    function gotoInterface($loc)
    {
    	header("voucherPage: ".$loc);
    	die();
    }
  ?>

</body>
</html>
<?php require_once('include/footer.php'); ?>
