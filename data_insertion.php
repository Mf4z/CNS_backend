<?php
@mysql_connect("localhost","root","1234") or
    die("Error ".mysql_error());
@mysql_select_db("cns_db");

$title=$_GET["title"];
$date=$_GET["date"];
$details=$_GET["details"];

$sql = "INSERT INTO news_table (title,date,details) VALUES ('$title','$date','$details')";
$query= @mysql_query($sql);

if($query)
{
    echo "Data Inserted Successfully";
}
else
    
{ echo "Error!".mysql_error()." Check and try again";
}

?>