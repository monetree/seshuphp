<?php
require_once "connect.php";
$sql_read="select * from nit where email='soubhagyakumar666@gmail.com'";
$rs=mysql_query($sql_read);
while($row=mysql_fetch_assoc($rs)) 
{
echo $row['name']."<br/>";

}

?>
