<?php
	
require_once('config/config.php');

if(isset($_SESSION['UserType']) && $_SESSION['UserType'] == "A" || "P")
{
?>
	<button onclick="window.location.href='add.php'">Add User</button>
	<br /><br />
	<?php
	
	//SQL STATEMENT
	$sql="select * from tbluser";

	$result=mysqli_query($virtual_con,$sql);

	if (!$result) {
		echo 'Could not run query';
		exit;
	}
	else
	{
		echo "<table border='1'>";
		if (mysqli_num_rows($result) > 0) {
		echo "<tr>";
		echo "<td>Username</td>";
		echo "<td>Password</td>";
		echo "<td>Name</td>";
		echo "<td>Gender</td>";
		echo "<td>Country</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['UserID']."</td>";
			echo "<td>".$row['Password']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Gender']."</td>";
			echo "<td>".$row['Country']."</td>";
			echo "<td><button onclick=\"window.location.href='delete.php?id=".$row['UserID']."'\">Delete</button></td>";
			echo "<td><button onclick=\"window.location.href='edit.php?id=".$row['UserID']."'\">Edit</button></td>";
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