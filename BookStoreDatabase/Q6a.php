<html>
<head>Question 6a<br>Query: select SLName,SFName from Suppliers where SupplierID=12345<br><br></head>
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
mysql_select_db("$db_name")or die("Data selection failed!");


$query = "SELECT SLName,SFName from Suppliers where SupplierID=12345";
$msc = microtime(true);
$result=mysql_query($query);
$msc = microtime(true)-$msc;
$count=mysql_num_rows($result);

if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "SLName</th><th>SFName</th><th>";
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["SLName"]."</td><td>".$row["SFName"]."</td><td>";
$count=$count-1;
}
}
echo "</table></center>";

echo"<br><b>The Execution Time without index is ". ($msc*1000)." ms</b><br>";


$exesql= " CREATE INDEX PrimaryIndex ON Suppliers(SupplierID);";

$exeresult=mysql_query($exesql);
if($exeresult)
	{
		echo "<br><h2>Create Index Named PrimaryIndex on primary key Succeed</h2></br></br>";
	}
	else
	{
	 	echo mysql_error()."</br>";
	}


$querytwo = "SELECT SLName,SFName from Suppliers USE INDEX(PrimaryIndex) where SupplierID=12345";
$msctwo = microtime(true);
$resulttwo=mysql_query($querytwo);
$msctwo = microtime(true)-$msctwo;
$counttwo=mysql_num_rows($resulttwo);

if($counttwo > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "SLName</th><th>SFName</th><th>";
while($rowtwo = mysql_fetch_array($resulttwo))
{

echo "<tr><td>".$rowtwo["SLName"]."</td><td>".$rowtwo["SFName"]."</td><td>";
$counttwo=$counttwo-1;
}
}
echo "</table></center>";

echo"<br><b>The Execution Time with index is ". ($msctwo*1000)." ms</b><br>";
	


?>	
