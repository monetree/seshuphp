<?php
require_once "connect.php";
$select = "select * from nit order by name asc";
$rs = mysql_query($select);
$count = mysql_num_rows($rs);
if($count > 1){
while($row = mysql_fetch_assoc($rs)){
echo $row['name'];
echo "<br>";
}
}
?>

