<html>
<head>Question 5b<br>Query: DROP TABLE Delete_table<br></head>
<title></title>
</head>
<body>
<center>

<html>
<head>
</head>
<body>
<center>
<center><h3>Enter the name of the table that is to be deleted </h3></center>
<form method="post" action="">
Table_Name:<input type="text" name="Table_Name1"/>

<input type="submit" value="submit" name="sub"/>
</form>

<?php


$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam"; 
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!");

$sql = "SHOW TABLES FROM $db_name";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

echo "Tables: \n";
echo "<center>";
echo "<table border='2'><tr><th>";
while ($row = mysql_fetch_row($result)) {
    
	echo "<tr><td>"."{$row[0]}\n"."<td>";
}

echo "</table></center>";

mysql_free_result($result);



if (isset($_POST['sub'])){
$table_name = $_POST["Table_Name1"];
$exequery = "DROP TABLE $table_name";

$exeresult=mysql_query($exequery);

if(!$exeresult)
	{
		echo mysql_error();
	}
	else
	{
	 	echo "Table $table_name is deleted successfully<br/>";
	}


$sqlquery = "SHOW TABLES FROM $db_name";
$sqlresult = mysql_query($sqlquery);

if (!$sqlresult) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

echo "Tables: \n";
echo "<center>";
echo "<table border='2'><tr><th>";
while ($rowsql = mysql_fetch_row($sqlresult)) {
    
	echo "<tr><td>"."{$rowsql[0]}\n"."<td>";
}

echo "</table></center>";

mysql_free_result($sqlresult);
	
}



?>