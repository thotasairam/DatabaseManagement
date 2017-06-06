<html>
<head>Sample Query<br> Query: SELECT FName,LName,Profession from Customer WHERE CustomerID= 11573236<br></head>
<title></title>
</head>
<body>
<center>

<?php


$query = "SELECT FName,LName,Profession from Customer WHERE CustomerID= '11573236'";
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

echo "FName</th><th>LName</th><th><th>Profession</th><th>";
while($row = mysql_fetch_array($result))
{
//echo $result;
//echo $result;
echo "<tr><td>".$row["FName"]."</td><td>".$row["LName"]."</td><td>".$row["Profession"]."</td><td>";
$count=$count-1;
}
}
echo "</table></center>";
?>


