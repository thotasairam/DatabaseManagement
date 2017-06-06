<html>
<head>Question 4c<br>Query: CREATE VIEW Production_Suppliers_view AS SELECT SupplierID, SFName, SLName, CompanyName, Phone, Production.OrderNumber from Suppliers, Production WHERE Suppliers.SupplierID=Production.SupplierID<br></head>
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


$select_sql="SELECT * FROM  Suppliers";
$select_result=mysql_query($select_sql);
$count=mysql_num_rows($select_result);
echo "<h1>Table: Suppliers</h1>";
if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "<th>SupplierID</th><th>SFName</th><th>SLName</th><th>Phone</th>CompanyName</th><th>";
while($row = mysql_fetch_array($viewresult))
{

echo "<tr><td>".$row["SupplierID"]."</td><td>".$row["SFName"]."</td><td>".$row["SLName"]."</td><td>".$row["Phone"]."</td><td>".$row["CompanyName"]."</td></tr>";
$countthree=$countthree-1;
}
}

echo "</table></center>";

$viewsql="SELECT * FROM Production";
$viewresult=mysql_query($viewsql);
$countthree=mysql_num_rows($viewresult);
echo "<h1>Table: Production</h1>";
if($countthree > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "OrderNumber</th><th>Date</th><th>Month</th><th>Year</th><th>Time</th><th>ISBN</th><th>Quantity</th><th>Price</th><th>OrderNumber</th><th>";
while($row = mysql_fetch_array($viewresult))
{

echo "<tr><td>".$row["OrderNumber"]."</td><td>".$row["Date"]."</td><td>".$row["Month"]."</td><td>".$row["Year"]."</td><td>".$row["Time"]."</td><td>".$row["ISBN"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".$row["OrderNumber"]."</td></tr>";
$countthree=$countthree-1;
}
}
echo "</table></center>";

$exequery = "CREATE VIEW Production_Suppliers_view AS SELECT SupplierID, SFName, SLName, CompanyName, Phone, Production.OrderNumber from Suppliers, Production WHERE Suppliers.SupplierID=Production.SupplierID;";

$exeresult=mysql_query($exequery);
if($exeresult)
	{
		echo "<h2>Create View Production_Suppliers_view Succeed</h2>";
	}
	else
	{
	 	echo mysql_error();
	}

echo "<h1>Result of the Query:</h1>";
$query = "SELECT * FROM Production_Suppliers_view";
$resultone=mysql_query($query);
$countone=mysql_num_rows($resultone);

if($countone > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "SupplierID</th><th>SFName</th><th>SLName</th><th>CompanyName</th><th>Phone</th><th>Production.OrderNumber</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["SupplierID"]."</td><td>".$row["SFName"]."</td><td>".$row["SLName"]."</td><td>".$row["CompanyName"]."</td><td>".$row["Phone"]."</td><td>".$row["Production.OrderNumber"]."</td><td>";
$countone=$countone-1;
}
}
echo "</table></center>";
?>