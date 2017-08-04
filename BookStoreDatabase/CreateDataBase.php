<?php
$db_name ='tsairam';
$dbusername ='tsairam';
$dbpassword ='Oe583eu';
$host ='cs.okstate.edu';

mysql_connect("$host", "$dbusername", "$dbpassword") or die("Connection failed!");
mysql_select_db("$db_name") or die("DataBase connection failed!");

$query = "SELECT * FROM Customer";

$result = mysql_query($query);

if($result) 
{
	echo "It is working!";
}
else
{
	echo mysql_error();
}
?>