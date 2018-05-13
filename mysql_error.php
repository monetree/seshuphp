<?php
include_once "connect.php";
$sql_query="insert into nidt(name) values('cython')";
$res=mysql_query($sql_query) or die(mysql_error()."heyy");



?>