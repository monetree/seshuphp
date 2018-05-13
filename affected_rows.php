<?php
require_once "connect.php";
$sql_qry="update nit set number='98887' where email='d@mail.com'";
$res=mysql_query($sql_qry);
if($res){
$affected_count=mysql_affected_rows();
echo $affected_count."record updated";
}else{
echo "failed";
}

?>