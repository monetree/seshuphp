<html>
<body>
<?php
extract($_POST);
if(isset($upload)){
$errors = array();
$temp_file = $_FILES['image']['tmp_name'];
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$exp = (explode('.', $file_name));
$extensions = end($exp);
$allowed_extensions = array('jpg', 'jpeg', 'bmp', 'png','gif');
	if(!in_array($extensions, $allowed_extensions))
		{
						$errors[] = "invalid file extensions";
		}
	 if($file_size > 2097152)
	  {
						$errors[] = "file size should be less than 2-MB";
		}
	 if(empty($errors))
	  {
						$name = rand(1000,9999);
						move_uploaded_file($temp_file,"uploads/".$name.'.'.$extensions);

						echo "success";
		}else{
						print_r($errors);
		}
 }

 ?>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image"><br>
<input type="submit" name="upload" value="upload">
</form>
</body>
</html>
