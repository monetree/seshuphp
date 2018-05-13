<?php
extract($_POST);
if(isset($register)){
	//no error
	$errors = 0;
//validate if empty
if(empty($name)){
	$errors = 1;
	$name_err = "name is required";
}
if(empty($mobile)){
$errors = 1;
	$mobile_err = "number is required";
}
if(empty($email)){
$errors = 1;
	$email_err = "email is required";
}
//length validation
if(!empty($mobile)){
	$mlen = strlen($mobile);
	if($mlen!=10){
	$errors = 1;
	$mobile_err = "Invalid mobile";
	}
}
//name format validation
if(!empty($name)){
	$alpha ="/^[a-zA-Z ]+$/";
if(!preg_match($alpha,$name)){
	$errors = 1;
	$name_err = "only letters are allowed";
	}
}
//email format validation
if(!empty($email)){
		$validate_email="/^[@ ]+$/";
	if(!preg_match($validate_email,$email)){
	$email_err="invalid email format";
	}

}



if($errors==0){
//insert code
}

}

?>
<form method="post" action="">
<input type="text" name="name" placeholder="enter your name" value="<?php if(isset($name)) {echo $name;} ?>">
&nbsp<span style="color:red"><?php if(isset($name_err)){echo $name_err;} ?> </span><br><br>
<input type="text" name="mobile" placeholder="enter your number" value="<?php if(isset($mobile)) {echo $mobile;} ?>">
&nbsp<span style="color:red"><?php if(isset($mobile_err)){echo $mobile_err;} ?></span><br><br>
<input type="text" name="email" placeholder="enter your email" value="<?php if(isset($email)) {echo $email;} ?>">
&nbsp<span style="color:red"><?php if(isset($email_err)){echo $email_err;} ?></span><br><br>

<input type="submit" name="register" value="register">
</form>