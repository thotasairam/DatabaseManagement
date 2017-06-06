<html>
<head>Question 3c<br>Query: SELECT Sales.CustomerID, SUM(Quantity),AVG(Price),Max(Month),	Min(Month), COUNT(Price) FROM Sales, Production  WHERE Sales.ISBN=Production.ISBN GROUP by Sales.ISBN;<br></head>
<title></title>

<body>
<center>

<?php


$host = "cs.okstate.edu";
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam";  
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!");



$select_sql="SELECT * FROM  Sales";
$select_result=mysql_query($select_sql);
$counttwo=mysql_num_rows($select_result);
echo "<h1>Table: Sales</h1>";
if($counttwo > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "InvoiceNumber</th><th>CustomerID</th><th>ISBN</th><th>Quantity</th><th>Price</th><th>Date</th><th>Month</th><th>Year</th><th>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["InvoiceNumber"]."</td><td>".$row["CustomerID"]."</td><td>".$row["ISBN"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".$row["Date"]."</td><td>".$row["Month"]."</td><td>".$row["Year"]."</td></tr>";
$counttwo=$counttwo-1;
}
}
echo "</table></center>";


$viewsql="SELECT * FROM Suppliers";
$viewresult=mysql_query($viewsql);
$countthree=mysql_num_rows($viewresult);
echo "<h1>Table: Suppliers</h1>";
if($countthree > 0)
{
echo "<center>";
echo "<table border='2'><tr>";

echo "<th>SupplierID</th><th>SFName</th><th>SLName</th><th>Phone</th><th>OrderNumber</th><th>CompanyName</th><th>";
while($row = mysql_fetch_array($viewresult))
{

echo "<tr><td>".$row["SupplierID"]."</td><td>".$row["SFName"]."</td><td>".$row["SLName"]."</td><td>".$row["Phone"]."</td><td>".$row["OrderNumber"]."</td><td>".$row["CompanyName"]."</td></tr>";
$countthree=$countthree-1;
}
}
echo "</table></center>";



echo "<h1>Result of the Query:</h1>";
$query = "SELECT Sales.CustomerID, SUM(Quantity),AVG(Price),Max(Month),	Min(Month), COUNT(Price) FROM Sales, Production  WHERE Sales.ISBN=Production.ISBN GROUP by Sales.ISBN;";
$resultone=mysql_query($query);
$count=mysql_num_rows($resultone);

if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "CustomerID</th><th>SUM(Quantity)</th><th>AVG(Price)</th><th>Max(Month)</th><th>Min(Month)</th><th>COUNT(Price)</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["SUM(Quantity)"]."</td><td>".$row["AVG(Price)"]."</td><td>".$row["Max(Month)"]."</td><td>".$row["Min(Month)"]."</td><td>".$row["COUNT(Price)"]."</td><td>";
$count=$count-1;
}
}
echo "</table></center>";
?>
