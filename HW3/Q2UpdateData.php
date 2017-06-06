<?php


$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam"; 
 
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!");


$query = "UPDATE Sales SET Price='$_POST[Price1]', Quantity='$_POST[Quantity1]',CustomerID='$_POST[CustomerID1]' WHERE InvoiceNumber='$_POST[InvoiceNumber1]';";
$secondquery="UPDATE Sales SET Price='$_POST[Price2]', Quantity='$_POST[Quantity2]',CustomerID='$_POST[CustomerID2]' WHERE InvoiceNumber='$_POST[InvoiceNumber2]';";

$select_sql="SELECT * FROM Sales";
$select_result=mysql_query($select_sql);
$count=mysql_num_rows($select_result);
echo "<h1>Table: Sales Before Update</h1>";
if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "InvoiceNumber</th><th>Price</th><th>Quantity</th><th>CustomerID</th><th>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["InvoiceNumber"]."</td><td>".$row["Price"]."</td><td>".$row["Quantity"]."</td><td>".$row["CustomerID"]."</td></tr>";
$count=$count-1;
}
}
echo "</table></center>";



$result=mysql_query($query);
$secondres=mysql_query($secondquery);
if(($result)&&($secondres))
	{
		echo "<h1>Update success</h1>";
	}
	else
	{
	 	echo mysql_error();
	}
	

$aftersql="SELECT * FROM Sales";
$aftresult=mysql_query($aftersql);
$aftcount=mysql_num_rows($aftresult);
echo "<h1>Table: Sales After Update</h1>";
if($aftcount > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "InvoiceNumber</th><th>Price</th><th>Quantity</th><th>CustomerID</th><th>";
while($row = mysql_fetch_array($aftresult))
{

echo "<tr><td>".$row["InvoiceNumber"]."</td><td>".$row["Price"]."</td><td>".$row["Quantity"]."</td><td>".$row["CustomerID"]."</td></tr>";
$aftcount=$aftcount-1;
}
}
echo "</table></center>";	
		
	

?>
