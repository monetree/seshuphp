<?php
extract($_POST);
if(isset($add))
{
 require_once "connect.php";
 $count=count($cname); 
 for($i=0;$i<$count;$i++)
 {
if(!empty($cname[$i]))
{
$sql_qry="insert into country_tbl(country_name) values('$cname[$i]')"; 
 $res=mysql_query($sql_qry);
}
 }
}
?>
<form action="" method="post">
Country :<input type="text" name="cname[]"/><br/><br/>
Country :<input type="text" name="cname[]"/><br/><br/>
Country :<input type="text" name="cname[]"/><br/><br/>
Country :<input type="text" name="cname[]"/><br/><br/>
Country :<input type="text" name="cname[]"/><br/><br/>
<input type="submit" name="add" value="Add"/>
</form>