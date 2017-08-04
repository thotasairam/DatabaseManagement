<html>
<head>Question 3d<br>Query:SELECT CustomerID, FName, Profession, Street, City, State FROM Customer INNER JOIN ContactDetails ON Customer.Zipcode=ContactDetails.Zipcode;<br></head>
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
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!");



$select_sql="SELECT * FROM  Customer";
$select_result=mysql_query($select_sql);
$counttwo=mysql_num_rows($select_result);
echo "<h1>Table: Customer</h1>";
if($counttwo > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "/th><th>Profession</th><th>FName</th><th>LName</th><th>Zipcode</th><th>";
while($row = mysql_fetch_array($select_result))
{

echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["Profession"]."</td><td>".$row["FName"]."</td><td>".$row["LName"]."</td><td>".$row["Zipcode"]."</td><td>"."</td></tr>";
$counttwo=$counttwo-1;
}
}
echo "</table></center>";



$viewsql="SELECT * FROM ContactDetails";
$viewresult=mysql_query($viewsql);
$countthree=mysql_num_rows($viewresult);
echo "<h1>Table: ContactDetails</h1>";
if($countthree > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "Zipcode</th><th>Street</th><th>City</th><th>State</th><th>Phone</th><th>EmailID</th><th>CustomerID</th><th>";
while($row = mysql_fetch_array($viewresult))
{

echo "<tr><td>".$row["Zipcode"]."</td><td>".$row["Street"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Phone"]."</td><td>".$row["EmailID"]."</td><td>".$row["CustomerID"]."</td></tr>";
$countthree=$countthree-1;
}
}
echo "</table></center>";

echo "<h1>Result of the Query:</h1>";

$query = "SELECT CustomerID, FName, Profession, Street, City, State FROM Customer INNER JOIN ContactDetails ON Customer.Zipcode=ContactDetails.Zipcode;";
$resultone = mysql_query($query);
$count = mysql_num_rows($resultone);

if($count > 0)
{
echo "<center>";
echo "<table border='2'><tr><th>";

echo "CustomerID</th><th>FName</th><th>Profession</th><th>Street</th><th>City</th><th>State</th><th>";
while($row = mysql_fetch_array($resultone))
{

echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["FName"]."</td><td>".$row["Profession"]."</td><td>".$row["Street"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>";
$count=$count-1;
}
}
echo "</table></center>";
?>
