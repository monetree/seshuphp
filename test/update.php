<?php
$con=mysqli_connect('localhost','root','Admin619','shoppy');
$id=$_GET['id'];
extract($_POST);
if(isset($btn)){
  $update = "update test set name='$name',email='$email' where id=$id";
  $rs=mysqli_query($con,$update) or die(mysqli_error($con));
  if($rs){
    header('location:index.php');
  }else{
    echo "failed";
  }
}


 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Bootstrap Example</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 </head>
 <body>

 <div class="container">

<?php
$select = "select * from test where id=$id";
$rs=mysqli_query($con,$select);
$data=mysqli_fetch_assoc($rs);
 ?>
    <form action="" method="post">
     <div class="form-group">
       <input type="text" class="form-control" name="name" value="<?php echo $data['name'];?>" id="pwd" placeholder="Enter password" name="name">
     </div>
     <div class="form-group">
       <input type="text" class="form-control" name="email" value="<?php echo $data['email'];?>" id="pwd" placeholder="Enter password" name="number">
     </div>
     <button type="submit" name="btn" class="btn btn-info">Submit</button>
   </form>
 </div>


</body>
</html>
