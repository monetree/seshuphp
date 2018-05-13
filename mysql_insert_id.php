<?php
require_once "connect.php";
$sql_qry="insert into nit(name) values('xyz')";
$res=mysql_query($sql_qry);
if($res){
echo "success";
}else{
echo "failed";
}
echo "<br>";
$last_id=mysql_insert_id();
echo $last_id;
?>