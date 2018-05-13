<?
 require_once "connect.php";
extract($_POST);
if(isset($add)){
 $count = count($sname);
 for($i=0;$i<$count;$i++)
 {
if(!empty($sname[$i])) {
$insert = "insert into state_tbl(country_id,state_name) values('$country','$sname[$i]')";
$query= mysql_query($insert) or die(mysql_error());
if($query){
	echo "success";
}else{
echo "failed";
}
}
}
}
?>
<form action="" method="post">
<select name="country">
<option value="">--country--</option>
<?php
$select="select * from country_tbl";
$rs = mysql_query($select) or die(mysql_error());
while($row=mysql_fetch_assoc($rs)){
	?>
<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name'];?></option>
<?php
}
?>
</select><br><br>
State :<input type="text" name="sname[]"/><br/><br/>
State :<input type="text" name="sname[]"/><br/><br/>
State :<input type="text" name="sname[]"/><br/><br/>
State :<input type="text" name="sname[]"/><br/><br/>
State :<input type="text" name="sname[]"/><br/><br/>
<input type="submit" name="add" value="Add"/>
</form>