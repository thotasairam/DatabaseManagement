
<?php

$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam"; 
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!");

$select_sql="SELECT * FROM Customer";
$select_result=mysql_query($select_sql);
$count=mysql_num_rows($select_result);
echo "<h1>Table: Customers Before Delete</h1>";
if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "CustomerID</th><th>FName</th><th>LName</th></tr>Profession</th></tr>Zipcode</th></tr>InvoiceNumber</th></tr>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["FName"]."</td><td>".$row["LName"]."</td><td>".$row["Profession"]."</td><td>".$row["Zipcode"]."</td><td>".$row["InvoiceNumber"]."</td></tr>";
$count=$count-1;
}
}
echo "</table></center>";




if (isset($_POST['sub']))
{
$cat_id = $_POST["CustomerID1"];
$catsecond_id = $_POST["CustomerID2"];
 
$query = "DELETE FROM Customer WHERE CustomerID IN('$cat_id','$catsecond_id')";

$result=mysql_query($query);
if(!$result)
	{
		echo mysql_error();
	}
	else
	{
	 	echo "Tuple with CustomerID = $cat_id and CustomerID = $catsecond_id is deleted successfully<br/>";
	}
}




$aftersql="SELECT * FROM Customer";
$aftresult=mysql_query($aftersql);
$aftcount=mysql_num_rows($aftresult);
echo "<h1>Table: Customer After Delete</h1>";
if($aftcount > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "CustomerID</th><th>FName</th><th>LName</th></tr>Profession</th></tr>Zipcode</th></tr>InvoiceNumber</th></tr>";
while($row = mysql_fetch_array($aftresult))
{

echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["FName"]."</td><td>".$row["LName"]."</td><td>".$row["Profession"]."</td><td>".$row["Zipcode"]."</td><td>".$row["InvoiceNumber"]."</td></tr>";
$count=$count-1;
}
}
echo "</table></center>";

?>
