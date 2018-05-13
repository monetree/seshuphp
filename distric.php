<?
 require_once "connect.php";
extract($_POST);
if(isset($add)){
 $count = count($dname);
 for($i=0;$i<$count;$i++)
 {
if(!empty($dname[$i])) {
$insert = "insert into distric_tbl(country_id,state_id,distric_name) values('$country','$state','$dname[$i]')";
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
</select>
<select name="state">
<option value="">--state--</option>
<?php
$selects="select * from state_tbl";
$rss = mysql_query($selects) or die(mysql_error());
while($rows=mysql_fetch_assoc($rss)){
	?>
<option value="<?php echo $rows['state_id'];?>"><?php echo $rows['state_name'];?></option>
<?php
}
?>
</select><br><br>
distric :<input type="text" name="dname[]"/><br/><br/>
distric :<input type="text" name="dname[]"/><br/><br/>
distric :<input type="text" name="dname[]"/><br/><br/>
distric :<input type="text" name="dname[]"/><br/><br/>
distric :<input type="text" name="dname[]"/><br/><br/>
<input type="submit" name="add" value="Add"/>
</form>