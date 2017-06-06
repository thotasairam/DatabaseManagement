<title>View Table</title>
View table BookDetails
<?php


$query = "SELECT * FROM BookDetails";
$host = "cs.okstate.edu";   
$dbusername = "tsairam";    
$dbpassword = "Oe583eu";
$db_name="tsairam";
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection Failed!");
mysql_select_db("$db_name")or die("DataBase connection failed!");

$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "ISBN</th><th>BName</th><th>BAuthor</th></tr>PublishYear</th></tr>BPrice</th></tr>Genre</th></tr>BAuthor</th></tr>Availability</th></tr>Publisher</th></tr>InvoiceNumber</th></tr>OrderNumber</th></tr>";
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["ISBN"]."</td><td>".$row["BName"]."</td><td>".$row["BAuthor"]."</td><td>".$row["PublishYear"]."</td><td>".$row["BPrice"]."</td><td>".$row["Genre"]."</td><td>".$row["Availability"]."</td><td>".$row["Publisher"]."</td><td>".$row["InvoiceNumber"]."</td><td>".$row["OrderNumber"]."</td></tr>";
$count=$count-1;
}
}
echo "</table></center>";
?>