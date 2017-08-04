<html>
<head>Question 7b<br>Query:SELECT a.ISBN, a.BookName FROM BookDetails AS a WHERE(SELECT CustomerID FROM Sales AS b WHERE a.ISBN =b.ISBN AND b.Year >= 2000)= 11573231<br><br></head>
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

$oneresult = mysql_query("SELECT * FROM BookDetails");
if (!$oneresult) {
    die("Query to show fields from table failed");
}

$onefields_num = mysql_num_fields($oneresult);

echo "<table border='1'><tr>";
for($i=0; $i<$onefields_num; $i++)
{
    $onefield = mysql_fetch_field($oneresult);
    echo "<td>{$onefield->name}</td>";
}
echo "</tr>\n";
while($row = mysql_fetch_row($oneresult))
{
    echo "<tr>";

    foreach($row as $onecell)
        echo "<td>$onecell</td>";

    echo "</tr>\n";
}
echo "<h1>Table: BookDetails</h1>";


$tworesult = mysql_query("SELECT *FROM Sales");
if (!$tworesult) {
    die("Query to show fields from table failed");
}

$twofields_num = mysql_num_fields($tworesult);

echo "<table border='1'><tr>";
for($i=0; $i<$twofields_num; $i++)
{
    $twofield = mysql_fetch_field($tworesult);
    echo "<td>{$twofield->name}</td>";
}
echo "</tr>\n";
while($row = mysql_fetch_row($tworesult))
{
    echo "<tr>";

    foreach($row as $twocell)
        echo "<td>$twocell</td>";

    echo "</tr>\n";
}
echo "<h1>Table: Sales</h1>";

mysql_free_result($tworesult);




$query = "SELECT a.ISBN, a.BookName FROM BookDetails AS a WHERE(SELECT CustomerID FROM Sales AS b WHERE a.ISBN =b.ISBN AND b.Year >= 2000)= 11573231;";
$result = mysql_query($query);
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<table border='1'><tr>";
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
while($row = mysql_fetch_row($result))
{
    echo "<tr>";


    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
echo "\n";
echo "<h1>Query Result: </h1>";

mysql_free_result($result);


?>

