<html>
<head>Question 3b<br>Query: SELECT ISBN, COUNT(Availability),AVG(OrderNumber),SUM(OrderNumber),MAX(Availability) FROM BookDetails GROUP by ISBN;<br></head>
<title></title>

<body>
<center>

<?php

$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam";
$table = 'BookDetails';  
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!");
    


$select_sql="SELECT * FROM  BookDetails";
$select_result=mysql_query($select_sql);
$counttwo=mysql_num_rows($select_result);
echo "<h1>Table: BookDetails</h1>";
if($counttwo > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "ISBN</th><th>BName</th><th>BAuthor</th></tr>PublishYear</th></tr>BPrice</th></tr>Genre</th></tr>BAuthor</th></tr>Availability</th></tr>Publisher</th></tr>InvoiceNumber</th></tr>OrderNumber</th></tr>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["ISBN"]."</td><td>".$row["BName"]."</td><td>".$row["BAuthor"]."</td><td>".$row["PublishYear"]."</td><td>".$row["BPrice"]."</td><td>".$row["Genre"]."</td><td>".$row["Availability"]."</td><td>".$row["Publisher"]."</td><td>".$row["InvoiceNumber"]."</td><td>".$row["OrderNumber"]."</td></tr>";
$counttwo=$counttwo-1;
}
}
echo "</table></center>";

echo "<h1>Result of the Query:</h1>";
$query = "SELECT ISBN, COUNT(Availability),AVG(OrderNumber),SUM(OrderNumber),MAX(Availability) FROM BookDetails GROUP by ISBN;";
$resultone=mysql_query($query);
$count=mysql_num_rows($resultone);

if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "ISBN</th><th>COUNT(Availability)</th><th>AVG(OrderNumber)</th><th>SUM(OrderNumber)</th><th>MAX(Availabilty)</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["ISBN"]."</td><td>".$row["COUNT(Availability)"]."</td><td>".$row["AVG(OrderNumber)"]."</td><td>".$row["SUM(OrderNumber)"]."</td><td>".$row["MAX(Availability)"]."</td><td>";
$count=$count-1;
}
}
echo "</table></center>";
?>
