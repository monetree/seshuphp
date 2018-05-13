<?php
session_start();
if(isset($_SESSION['email']))
echo $_SESSION['email'];
else{
echo "no";
}


?>
<a href="logout.php">logout</p>
<a href="login.php">login</a>
