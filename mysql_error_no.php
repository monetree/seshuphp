<?php
include_once "connect.php";
$sql_query="insert into nidt(name) values('cython')";
$res=mysql_query($sql_query) or die(mysql_errno()."heyy");
echo "<br>";
$err_code=mysql_errno();
if($err_code == 1146){
echo "table name is not matching";
}else{
echo "something else";
}
exit();
die();
mysql_clse();
?>
