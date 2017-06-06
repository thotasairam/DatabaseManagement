<html>
<head>Question 5d<br>Query: Delete Supplier from a table schema<br></head>
<title></title>
</head>
<body>
<center>

<html>
<head>
</head>
<body>
<center>
<center><h3>Enter the Delete schema </h3></center>
<form method="post" action="">
SupplierID:<input type="number" name="SupplierID1"/>


<input type="submit" value="submit" name="sub"/>
</form>


<?php


$host = "cs.okstate.edu"; 
$dbusername = "tsairam"; 
$dbpassword = "Oe583eu"; 
$db_name="tsairam"; 
mysql_connect("$host", "$dbusername", "$dbpassword")or die("Connection failed!"); 
mysql_select_db("$db_name")or die("Data selection failed!")


$oneresult = mysql_query("SELECT * FROM SupplierID");
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
echo "<h1>Table: Suppliers</h1>";

mysql_free_result($oneresult);




if (isset($_POST['sub'])){
$field_name = $_POST["SupplierID1"];

$exequery = "ALTER TABLE categories DROP $field_name;";

$exeresult=mysql_query($exequery);

if(!$exeresult)
	{
		echo mysql_error();
	}
	else
	{
	 	echo "Supplier $field_name is deleted successfully<br/>";
	}


	
$result = mysql_query("SELECT * FROM Suppliers;");
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
echo "<h1>Table: categories</h1>";

mysql_free_result($result);
	
	
}
	

?>