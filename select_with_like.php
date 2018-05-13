<?php
extract($_POST);
if(isset($submit)){
require_once "connect.php";
$search = "select name from nit where name like '$search%'";
$rs =mysql_query($search);
$count = mysql_num_rows($rs);
if($count > 0){
while($row = mysql_fetch_assoc($rs))
{
echo $row['name'];
echo "<br>";
}
}else{
echo "no recoreddde";
}
}
?>
