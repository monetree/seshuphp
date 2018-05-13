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
a{
text-decoration:none;
}

tr:nth-child(even) {
    background-color: #eee;
}
tr:nth-child(odd) {
   background-color:#fff;
}
</style>
<body>
<?php
session_start();
if(empty($_SESSION['email']))
{
header('location:login.php');
}
?>
<p>hey <?php echo $_SESSION['email']; ?></p>
<a href="logout.php">logout</a>

<table>
<tr>
<th>Sl no.</th>
<th>id</th>
<th>name</th>
<th>email</th>
<th>number</th>
<th>country</th>
<th>Action</th>
</tr>
<?php
require_once "connect.php";
//$sql_read="select * from nit";
//$sql_read = "select nit.*,country_tbl.* from nit left join
 //country_tbl on nit.id=country_tbl.country_id";
//$sql_read = "select * from nit left join 
//country_tbl on nit.id=country_tbl.country_id";
$sql_read = "select n.*,c.country_name from nit n left join 
country_tbl c  on n.id=c.country_id";

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
	<td><?php echo $row['id']."<br/>"; ?></td>
	<td><?php echo $row['name']."<br/>"; ?></td>
	<td><?php echo $row['email']."<br/>"; ?></td>
	<td><?php echo $row['number']."<br/>"; ?></td>
		<td><?php echo $row['country_name']."<br/>"; ?></td>

	<td>
	<a href="delete.php?id=<?php echo base64_encode($row['id']); ?>" style="color:red">delete</a>
	&nbsp;&nbsp;<a href="update.php?id=<?php echo base64_encode($row['id']); ?>">update</a>
	</td>
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