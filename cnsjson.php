<?php


@mysql_connect("localhost","root","1234") or die("Error! ".mysql_error());
@ mysql_select_db("cns_db") or die("Error!! ".mysql_error());
$sql = "SELECT * FROM news_table";
include "sql_json.php";
echo sql2json($sql);

?>