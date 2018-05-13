<?php
require_once "connect.php";
$sql_read="select id,name,email,number from nit where email='py@gmail.com'";
//$sql_read="select * from nit where email='soubhagyakumar666@gmail.com'";
$rs=mysql_query($sql_read);
//$row=mysql_fetch_row($rs); //for index
//$row=mysql_fetch_array($rs); //for value and index
//$row=mysql_fetch_object($rs); //for value
$row=mysql_fetch_assoc($rs); //for value
//print_r($row);
echo $row['id']."<br/>";
echo $row['name']."<br/>";
echo $row['email']."<br/>";
echo $row['number']."<br/>";
//echo $row->name; 


?>