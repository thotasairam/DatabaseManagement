<?php

$db_name ='tsairam';
$dbusername ='tsairam';
$dbpassword ='Oe583eu';
$host ='cs.okstate.edu';

$query = "INSERT INTO Customer(CustomerID,FName,LName, Profession, Zipcode, InvoiceNumber) VALUES ('$_POST[CustomerID]','$_POST[FName]','$_POST[LName]','$_POST[Profession]','$_POST[Zipcode]','$_POST[InvoiceNumber]')";

mysql_connect("$host", "$dbusername", "$dbpassword") or die("Connection Failed!");
mysql_select_db("$db_name") or die("DataBase connection cannot be made!");

$result=mysql_query($query);

if($result)
	{
		echo "It is working!";
	}
	else
	{
	 	echo mysql_error();
	}

?>
