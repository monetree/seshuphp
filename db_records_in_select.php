<select>
<option>--select user--</option>
<?php
require_once "connect.php";
$sql_read="select name from nit";
$rs=mysql_query($sql_read);
while($row=mysql_fetch_assoc($rs)) {
	?>
	<option value="<?php echo $row['name'];?>">
	<?php echo $row['name']; ?>
	</option>
<?php 
}
?>


</select>
