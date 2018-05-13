<?php
extract($_POST);
if(isset($login)){
require_once "connect.php";
$select="select * from nit where email='$email' or number='$email' and password='$password'";
$rs=mysql_query($select);
$count=mysql_num_rows($rs);
if($count==1)
{
$row=mysql_fetch_assoc($rs);
session_start();
$_SESSION['id']=$row['id'];
$_SESSION['email']=$row['email'];
header('location:de_records_checkbox.php');
}else
echo "failed";
}
?>
<a href="index.php">home</a>
<?php
session_start();
require_once "connect.php";
$select = "select * from nit";
$rs=mysql_query($select) or die(mysql_error());
$row=mysql_fetch_assoc($rs);
$_SESSION['id']=$row['id'];
$_SESSION['name']=$row['name'];
$_SESSION['email']=$row['email'];
?>
<?php

if(isset($_SESSION['email']))
echo $_SESSION['email'];
else{
echo "no";
}
?>

<form method="post" action="">
<input type="text" name="email"><br>
<input type="password" name="password"><br>
<input type="submit" value="login" name="login">
</form>
