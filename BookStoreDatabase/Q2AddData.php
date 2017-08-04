<?php


$host = "cs.okstate.edu";
$dbusername = "tsairam";
$dbpassword = "Oe583eu";
$db_name="tsairam";
$table = 'BookDetails';

mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!");
mysql_select_db("$db_name")or die("Data selection failed!");


$select_sql="SELECT * FROM BookDetails";
$select_result=mysql_query($select_sql);
$count=mysql_num_rows($select_result);
echo "<h1>Table: Book Details Before Insertion</h1>";
if($count > 0)
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



$query = "INSERT INTO BookDetails(ISBN,BName, BAuthor, PublishYear, BPrice, Genre, Availability, Publisher, InvoiceNumber, OrderNumber) VALUES ('$_POST[ISBN1]','$_POST[BName1]','$_POST[BAuthor1]','$_POST[PublishYear1]','$_POST[BPrice1]','$_POST[Genre1]','$_POST[Availability1]','$_POST[Publisher1]','$_POST[InvoiceNumber1]','$_POST[OrderNumber1]')";

$result=mysql_query($query);
if($result)
	{
		echo "<h2>Insertion Succeed</h2>";
	}
	else
	{
	 	echo mysql_error();
	}



$aftersql="SELECT * FROM BookDetails";
$aftresult=mysql_query($aftersql);
$aftcount=mysql_num_rows($aftresult);
echo "<h1>Table: Book Details After Insertion</h1>";
if($aftcount > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "ISBN</th><th>BName</th><th>BAuthor</th></tr>PublishYear</th></tr>BPrice</th></tr>Genre</th></tr>BAuthor</th></tr>Availability</th></tr>Publisher</th></tr>InvoiceNumber</th></tr>OrderNumber</th></tr>";
while($row = mysql_fetch_array($aftresult))
{

echo "<tr><td>".$row["ISBN"]."</td><td>".$row["BName"]."</td><td>".$row["BAuthor"]."</td><td>".$row["PublishYear"]."</td><td>".$row["BPrice"]."</td><td>".$row["Genre"]."</td><td>".$row["Availability"]."</td><td>".$row["Publisher"]."</td><td>".$row["InvoiceNumber"]."</td><td>".$row["OrderNumber"]."</td></tr>";
$aftcount=$aftcount-1;
}
}
echo "</table></center>";	
	
?>
