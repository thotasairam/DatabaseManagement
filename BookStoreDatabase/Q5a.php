<html>
<head>Question 5a<br>Query: CREATE TABLE Delete_table(SupplierID int(20) unsigned primary key auto_increment not null, SFName char(20) not null, Comments varchar(20) not null)<br><br></head>
<title></title>
</head>
<body>
<center>

<?php

$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam"; 
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!")


$sql = "SHOW TABLES FROM $db_name";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

echo "Tables Before: \n";
echo "<center>";
echo "<table border='2'><tr><th>";
while ($row = mysql_fetch_row($result)) {
    
	echo "<tr><td>"."{$row[0]}\n"."<td>";
}

echo "</table></center>";

mysql_free_result($result);

$exequery = "CREATE TABLE Delete_table(SupplierID int(20) unsigned primary key auto_increment not null, SFName char(20) not null, Comments varchar(20) not null);";

$exeresult=mysql_query($exequery);
if($exeresult)
	{
		echo "<br><h2>CREATE TABLE Delete_table Succeed</h2></br></br>";
	}
	else
	{
	 	echo mysql_error()."</br>";
	}


$sqlquery = "SHOW TABLES FROM $db_name";
$sqlresult = mysql_query($sqlquery);

if (!$sqlresult) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

echo "Tables After: \n";
echo "<center>";
echo "<table border='2'><tr><th>";
while ($rowsql = mysql_fetch_row($sqlresult)) {
    
	echo "<tr><td>"."{$rowsql[0]}\n"."<td>";
}

echo "</table></center>";

mysql_free_result($sqlresult);
	

?>