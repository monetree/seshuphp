<?php
//print_r($_POST);
echo "<br/>";
$con=mysqli_Connect("localhost","root","");
if($con)
echo "connected";
else
echo "not connected";
extract($_POST);
echo "<h1 style='color:#0099ff;text-shadow:inset 2px 2px 10px';>$name<br/>";
echo $email."<br/>";
echo $number."<br/>";
echo $password."<br/>";
?>

