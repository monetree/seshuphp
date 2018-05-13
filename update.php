<?php
$uid=base64_decode($_GET['id']);
require_once "connect.php";
extract($_POST);
if(isset($update))
{
$sql_update="update nit set name='$name', email='$email',number='$number' where id=$uid ";
$res=mysql_query($sql_update);
if($res)
header('location:de_records_in_checkbox.php');
else 
echo "not updated";
}
$sql_read="select name,email,number from nit where id=$uid";
$rs=mysql_query($sql_read);
$row=mysql_fetch_assoc($rs);
?>
<form method="post" action="">
Name:<Input type="text" name="name" value="<?php echo $row['name'];?>"><br/><br/>
email:<Input type="email" name="email" value="<?php echo $row['email'];?>"><br/><br/>
Number:<Input type="text" name="number" value="<?php echo $row['number'];?>"><br/><br/>
<input type="submit" name="update" value="update">
</form>

