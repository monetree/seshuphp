<?php
$uid=base64_decode($_GET['id']);
require_once "connect.php";
$sql_del="delete from nit where id=base64_encode($uid)";
$result=mysql_query($sql_del);
if($result)
header('location:de_records_in_checkbox.php');
else
echo "record not deleted";
?>
