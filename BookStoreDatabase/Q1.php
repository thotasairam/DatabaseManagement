<?php

$host = "cs.okstate.edu";
$dbusername = "tsairam";
$dbpassword = "Oe583eu";
$db_name="tsairam";
$table = 'BookDetails';


if (!mysql_connect($host, $dbusername, $dbpassword))
    die("Connection failed!");

if (!mysql_select_db($db_name))
    die("Databse selection failes");



$tables = array();
    $list_tables_sql = "SHOW TABLES FROM {$db_name};";
    $result1 = mysql_query($list_tables_sql);
    if($result1)
    while($table = mysql_fetch_row($result1)){
        


$result = mysql_query("SELECT * FROM {$table[0]}");
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
echo "<h1>Table: {$table[0]}</h1>";

mysql_free_result($result);

	}



?>