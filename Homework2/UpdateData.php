<?php

$host = "cs.okstate.edu";
$dbusername = "tsairam";
$dbpassword = "Oe583eu";
$db_name="tsairam";

$query = "UPDATE Suppliers SET OrderNumber='$_POST[OrderNumber]' WHERE SupplierId='$_POST[SupplierID]'";


mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection Failed!");
mysql_select_db("$db_name")or die("DataBase connection Failed!");

$result=mysql_query($query);
if($result)
	{
		echo "It is Working!";
	}
	else
	{
	 	echo mysql_error();
	}

?>
