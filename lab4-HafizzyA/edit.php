<?php require_once('config/config.php'); ?>
<html>
<?php
if(isset($_GET['id']))
{
	$sql="select * from tbluser where UserId='".$_GET['id']."'";

	$result=mysqli_query($virtual_con,$sql);

	if (!$result) {
		echo 'Could not run query';
		exit;
	}
	else
	{
		if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		?>
		<form id="form1" name="form1" method="POST" action="edit-process.php">
		  <p>Username <input name="txtUsername" type="text" value="<?php echo $row['UserID']; ?>" readonly /></p>
		  <p>Password<input name="txtPassword" type="password" /></p>
		<input name="btnEdit" type="submit" value="Edit" />
		</form>
		<?php
		}
		else
		{
			echo "Data Not Exist";
			header( "refresh:5;url=location.php" );
		}
	}
}
?>

</html>