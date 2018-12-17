<html>
<body>
<h1>Voucher page</h1>
<link rel="stylesheet" type="text/css" href="design.css"/>

<script>
function changePrevPage() {

var page= document.form1.txtPage.value;
page=parseInt(page)-1;

location.href = 'voucherPage.php?page='+page;

}
function changeNextPage() {

var page= document.form1.txtPage.value;
page=parseInt(page) + 1;

location.href = 'voucherPage.php?page='+page;

}

</script>
<?php
	
require_once('config/config.php');

//if(isset($_SESSION['UserType']) && $_SESSION['UserType'] == "A")

?>
	<button onclick="window.location.href='add.php'">Add voucher</button>
	<br /><br />
	<?php
	
	$counter=1;
 
$page=max(intval($_GET['page']),1); // assuming there is a parameter 'page'

$itemsperpage = 5;
$total=50; // total results if you know it already otherwise use another query
$totalpages = max(ceil($total/$itemsperpage),1);

echo $page."/ ".$totalpages;
?>
<form id="form1" name="form1" method="POST" action="voucherPage.php">
<input id="txtPage" name="txtPage" type="hidden" value=<?=$page?> />
</form>
	<?php

//$query = "SELECT * FROM emp_master LIMIT ".(($page-1)*$itemsperpage).",".$itemsperpage; // this will return 5 items based on the pag

//$sqllinklis="SELECT * from <yourtable> LIMIT ".(($page-1)*$itemsperpage).",".$itemsperpage; // this will return 5 items based on the pag

	//SQL STATEMENT
	$sql="select * from voucher LIMIT ".(($page-1)*$itemsperpage).",".$itemsperpage; // this will return 5 items based on the page

	$result=mysqli_query($virtual_con,$sql);

	if (!$result) {
		echo 'Could not run query';
		exit;
	}
	else
	{
		echo "<table border='1' align='center'>";
		if (mysqli_num_rows($result) > 0) {
		echo "<tr>";
		echo "<td><b>Voucher ID</td>";
		echo "<td><b>Voucher Code</td>";
		echo "<td><b>Start Date</td>";
		echo "<td><b>End Date</td>";
		echo "<td><b>Value</td>";
        echo "<td><b>Status</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['VoucherID']."</td>";
			echo "<td>".$row['VoucherCode']."</td>";
			echo "<td>".$row['Startdate']."</td>";
			echo "<td>".$row['EndDate']."</td>";
			echo "<td>".$row['Value']."</td>";
            echo "<td>"?> <?=(($row['Status']==1)?'UNUSED':'USED')?> <?php "</td>";
			echo "<td><button onclick=\"window.location.href='delete.php?id=".$row['VoucherID']."'\">Delete</button></td>";
			echo "<td><button onclick=\"window.location.href='edit.php?id=".$row['VoucherID']."'\">Edit</button></td>";
			echo "<tr>";
		}
		}
		echo "</table>";
	}




?>
<br>

<input name="btnPrev" type="button" value="prev" onclick="changePrevPage();" />
<input name="btnNext" type="button" value="next" onclick="changeNextPage();"/>
</body>
</html>