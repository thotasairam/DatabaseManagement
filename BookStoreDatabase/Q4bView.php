<html>
<head>Question 4d<br>Query:CREATE VIEW book_sales_view AS SELECT Sales.ISBN, SUM(Sales.Quantity),AVG(BookDetails.BPrice),Max(Sales.Quantity),	Min(Price), COUNT(InvoiceNumber) FROM Sales, BookDetails  WHERE Sales.ISBN=BookDetails.ISBN GROUP by Sales.CustomerID<br></head>
<title></title>
</head>
<body>
<center>

<?php


$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam"; 
$table = 'BookDetails';  
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); mysql_select_db("$db_name")or die("Data selection failed!")


$select_sql="SELECT * FROM  BookDetails";
$select_result=mysql_query($select_sql);
$counttwo=mysql_num_rows($select_result);
echo "<h1>Table: BookDetails</h1>";
if($counttwo > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "ISBN</th><th>BName</th><th>BAuthor</th><th>PublishYear</th><th>BPrice</th><th>Genre</th><th>Availability</th><th>Publisher</th><th>InvoiceNumber</th><th>OrderNumber</th></tr>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["ISBN"]."</td><td>".$row["BName"]."</td><td>".$row["BAuthor"]."</td><td>".$row["PublishYear"]."</td><td>".$row["BPrice"]."</td><td>".$row["Genre"]."</td><td>".$row["Availability"]."</td><td>".$row["Publisher"]."</td><td>".$row["InvoiceNumber"]."</td><td>".$row["OrderNumber"]."</td></tr>";
$count=$count-1;
}
}
echo "</table></center>";


$viewsql="SELECT * FROM Sales";
$viewresult=mysql_query($viewsql);
$countthree=mysql_num_rows($viewresult);
echo "<h1>Table: Sales</h1>";
if($countthree > 0)
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


$exequery = "CREATE VIEW book_sales_view AS SELECT Sales.ISBN, SUM(Sales.Quantity),AVG(BookDetails.BPrice),Max(Sales.Quantity),	Min(Price), COUNT(InvoiceNumber) FROM Sales, BookDetails  WHERE Sales.ISBN=BookDetails.ISBN GROUP by Sales.CustomerID;";

$exeresult=mysql_query($exequery);
if($exeresult)
	{
		echo "<h2>Create View book_sales_view Succeed</h2>";
	}
	else
	{
	 	echo mysql_error();
	}




echo "<h1>Result of the Query:</h1>";
$query = "SELECT * FROM book_sales_view";
$resultone=mysql_query($query);
$count=mysql_num_rows($resultone);

if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "Product_ID</th><th>SUM(Sales.Quantity)</th><th>AVG(BookDetails.BPrice)</th><th>Max(Sales.Quantity)</th><th>Min(Price)</th><th>COUNT(InvoiceNumber)</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["Product_ID"]."</td><td>".$row["SUM(Sales.Quantity)"]."</td><td>".$row["AVG(BookDetails.BPrice)"]."</td><td>".$row["Max(Sales.Quantity)"]."</td><td>".$row["Min(Price)"]."</td><td>".$row["COUNT(InvoiceNumber)"]."</td><td>";
$count=$count-1;
}
}
echo "</table></center>";
?>
