<html>
<head>
<style>

</style>
</head>
<body>
<?php
extract($_POST);
if(isset($submit)){
//$name=trim(strip_tags(addslashes($name)));
require_once("validate.php");
//$name=validate($name);
//$email=validate($email);
//$number=validate($number);
//$password=validate($password);

date_default_timezone_set('asia/kolkata');
$ts=time();
echo $time=date('Y-m-d H:i:s',$ts);

mysql_connect("localhost","root","");
mysql_select_db("seshu_php");
//$sql_chk="select name,email,number password from nit where email='$email'";
$sql_chk="select * from nit where email='$email'";
$rs=mysql_query($sql_chk);
$count=mysql_num_rows($rs);
if($count>0){
	echo "email already exist";
}else{
$sql_qry="insert into nit(name,email,number,password,time_stamp) values('".validate(ucfirst($name))."','".validate($email)."','".validate($number)."','".validate($password)."','$time')";
//$sql_qry="insert into nit(name,email,number,password) values('$name','$email','$number','$password')";
//echo "insert into nit(name,email,number,password) values('$name','$email','$number','$password')";
$res=mysql_query($sql_qry);
if($res)
echo "registration success";
else 
echo "registration failed";
}
}
?>
<center>
<div style="background:#0099ff;width:25%;padding:10px;">

<form action="" method="post">
<input type="text" name="name" placeholder="enter the name"><br/><br/>
<input type="email" name="email" placeholder="enter email"><br/><br/>
<input type="number" name="number" placeholder="enter the number"><br/><br/>
<input type="password" name="password" placeholder="enter the password"><br/><br/>
<input type="submit" value="signup" name="submit">
</form>
</div>
</body>

</html>




