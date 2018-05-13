<html>
<body>
<!--<?php
$arr = array();
$arr[] = 10;
$arr[] = 20;
print_r($arr);
?>-->
<?php
extract($_POST);
if(isset($_FILES['image'])){
$errors = array();
$temp_file = $_FILES['image']['tmp_name'];
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$extensions = strtolower(end(explode('.', $file_name)));
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
						move_uploaded_file($temp_file,"uploads/".$file_name);	
						
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