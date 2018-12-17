<?php

require_once('config/config.php');

if(isset($_SESSION['UserType']) && $_SESSION['UserType'] == "A")
{
?>
	<button onclick="window.location.href='add.php'">Add User</button>
	<br />
	<?php

	//SQL STATEMENT
  //view from tbluser
	$sql="select * from tbluser";

	$result=mysqli_query($virtual_con,$sql);

	if (!$result) {
		echo 'Could not run query';
		exit;
	}
	else
	{//create table header
		echo "<table border='1'>";
		if (mysqli_num_rows($result) > 0) {//table >0 - record data ada create tbl header
		echo "<tr>";
		echo "<td>Name</td>";
		echo "<td>Gender</td>";
		echo "<td>Country</td>";
		echo "<td></td>";
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result)) {//traik record row by by row
			echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Gender']."</td>";
			echo "<td>".$row['Country']."</td>";
			echo "<td><button onclick=\"window.location.href='delete.php?id=".$row['UserID']."'\">Delete</button></td>";
      //create button delete dlm column baru
			echo "<tr>";
		}
		}
		echo "</table>";
	}
}
else
{
	session_destroy();
	header("Location: index.php");
	die();
}

?>
