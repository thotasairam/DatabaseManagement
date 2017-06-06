<html>
<head>
<title>Deleting Data From Table</title>
</head>
<body>
<center>
<center><h3>Enter the Supplier's SupplierID you want to delete </h3></center>
<form method="post" action="">
SupplierID:<input type="number" name="SupplierID"/>

<input type="submit" value="submit" name="sub"/>
</form>

<?php
if (isset($_POST['sub']))
{
$SupplierID = $_POST["SupplierID"];
 

$query = "DELETE FROM Suppliers WHERE SupplierID='$SupplierID'";
$host = "cs.okstate.edu";
$dbusername = "tsairam";
$dbpassword = "Oe583eu";
$db_name="tsairam";
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection Failed!");
mysql_select_db("$db_name")or die("DataBase connection failed!");

$result=mysql_query($query);
if(!$result)
	{
		echo mysql_error();
	}
	else
	{
	 	echo "The value with SupplierID = $SupplierID has been successfully deleted<br/>";
	}
}
?>
