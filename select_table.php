<html>
<style>
table,th,td{
	
border:2px solid #0099ff;
    border-collapse: collapse;
    padding: 5px;
    padding-left: 5px;
}
th{
   background-color: #0099ff;
   color:white;
}

tr:nth-child(even) {
    background-color: #eee;
}
tr:nth-child(odd) {
   background-color:#fff;
}
</style>
<body>
<table>
<tr>
<th>Sl no.</th>
<th>id</th>
<th>name</th>
<th>email</th>
<th>number</th>
</tr>
<?php
require_once "connect.php";
$sql_read="select * from nit";
$rs=mysql_query($sql_read);
$count=mysql_num_rows($rs);
if($count>0)
{
$i=1;
while($row=mysql_fetch_assoc($rs)) 
{
	?>
	<tr>
	<td><?php echo $i; ?></td>
	<td class="id"><?php echo $row['id']."<br/>"; ?></td>
	<td class="name"><?php echo $row['name']."<br/>"; ?></td>
	<td class="email"><?php echo $row['email']."<br/>"; ?></td>
	<td class="number"><?php echo $row['number']."<br/>"; ?></td>
	</tr>

<?php
$i++;
}
}else{?>
	<tr>
	<td style="color:red;" colspan="5">No records found in database</td>
	</tr>
<?php
}
?>
</table>
<script>

//doStuff(document.querySelectorAll("#myCircle1, #myCircle2, #myCircle3, #myCircle4"));
//doStuff(getElementsById("myCircle1 myCircle2 myCircle3 myCircle4"));
//doStuff(document.getElementsByClassName("circles"));
</script>
</body>
</html>