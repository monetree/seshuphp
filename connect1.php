<?php
mysql_connect("localhost","root","");
$db=mysql_select_db("seshu_php");
if($db)
echo "connected";
else
echo "not connected";
?>