<html>
<head>Question 4b<br>Query: CREATE VIEW BPriceView AS SELECT BName,BPrice from products WHERE PublishYear >= 2000 ORDER BY BPrice DESC<br></head>
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
$count=mysql_num_rows($select_result);
echo "<h1>Table: BookDetails</h1>";
if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "ISBN</th><th>BName</th><th>PublishYear</th><th>BPrice</th><th>BAuthor</th><th>Genre</th><th>Availability</th><th>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["ISBN"]."</td><td>".$row["BName"]."</td><td>".$row["PublishYear"]."</td><td>".$row["BPrice"]."</td><td>".$row["BAuthor"]."</td><td>".$row["Genre"]."</td><td>".$row["Availability"]."</td></tr>";
$count=$count-1;
}
}
echo "</table></center>";


$exequery = "CREATE VIEW BPriceView AS SELECT BName,BPrice from products WHERE PublishYear >= 2000 ORDER BY BPrice DESC;";

$exeresult=mysql_query($exequery);
if($exeresult)
	{
		echo "<h2>Create View BPriceView Succeed</h2>";
	}
	else
	{
	 	echo mysql_error();
	}


echo "<h1>Result of the Query:</h1>";
$query = "SELECT * FROM BPriceView";
$resultone=mysql_query($query);
$countone=mysql_num_rows($resultone);

if($countone > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "BName</th><th>BPrice</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["BName"]."</td><td>".$row["BPrice"]."</td><td>";
$countone=$countone-1;
}
}
echo "</table></center>";
?>


