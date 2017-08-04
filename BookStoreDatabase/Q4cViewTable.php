<html>
<head>Question 4a<br>Query: CREATE VIEW Sales_view AS SELECT InvoiceNumber,ISBN ,Price FROM Sales<br></head>
<title></title>
</head>
<body>
<center>

<?php

$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam";

mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); mysql_select_db("$db_name")or die("Data selection failed!")


$select_sql="SELECT * FROM Sales";
$select_result=mysql_query($select_sql);
$count=mysql_num_rows($select_result);
echo "<h1>Table: Sales</h1>";
if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "InvoiceNumber</th><th>CustomerID</th><th>ISBN</th><th>Quantity</th><th>Price</th><th>Time</th><th>Date</th><th>Month</th><th>Year</th><th>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["InvoiceNumber"]."</td><td>".$row["CustomerID"]."</td><td>".$row["ISBN"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".$row["Time"]."</td><td>".$row["Date"]."</td><td>".$row["Month"]."</td><td>".$row["Year"]."</td></tr>";
$counttwo=$counttwo-1;
}
}
echo "</table></center>";

$exequery = "CREATE VIEW Sales_view AS SELECT InvoiceNumber,ISBN ,Price FROM Sales;";

$exeresult=mysql_query($exequery);
if($exeresult)
	{
		echo "<h2>Create View Sales_view Succeed</h2>";
	}
	else
	{
	 	echo mysql_error();
	}

echo "<h1>Result of the Query:</h1>";
$query = "SELECT * FROM Sales_view";
$resultone=mysql_query($query);
$countone=mysql_num_rows($resultone);

if($countone > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "InvoiceNumber</th><th>ISBN</th><th>Price</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["InvoiceNumber"]."</td><td>".$row["ISBN"]."</td><td>".$row["Price"]."</td><td>";
$countone=$countone-1;
}
}
echo "</table></center>";
?>
