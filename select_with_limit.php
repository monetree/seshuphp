<?php
require_once "connect.php";
//$select ="select * from nit limit 5";
$select ="select * from nit order by name asc limit 5,5"; //from 5th index to 5 no of records
$rs = mysql_query($select);
$count = mysql_num_rows($rs);
if($count > 1){
while($row = mysql_fetch_assoc($rs)){
echo $row['name'];
echo "<br>";

}
}
?>

