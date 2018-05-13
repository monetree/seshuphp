<?php
extract($_POST);
if(isset($submit)){
//$name=trim(strip_tags(addslashes($name)));
require_once("validate.php");
//$name=validate($name);
//$email=validate($email);
//$number=validate($number);
//$password=validate($password);
mysql_connect("localhost","root","");
mysql_select_db("seshu_php");
//$sql_chk="select name,email,number password from nit where email='$email'";
$sql_chk="select * from nit where email='$email'";
$rs=mysql_query($sql_chk);
$count=mysql_num_rows($rs);
if($count>0){
	echo "email already exist";
}else{
$sql_qry="insert into nit(name,email,number,password) values('".validate(ucfirst($name))."','".validate($email)."','".validate($number)."','".validate(md5($password))."')";
//$sql_qry="insert into nit(name,email,number,password) values('$name','$email','$number','$password')";
//echo "insert into nit(name,email,number,password) values('$name','$email','$number','$password')";
$res=mysql_query($sql_qry);
if($res)
echo "registration success";
else 
echo "registration failed";
}
}

