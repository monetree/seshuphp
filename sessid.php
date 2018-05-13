<?php
session_start();
echo "this is from server: ".session_id();
echo "<br>";
echo "this is from client: ".$_COOKIE['PHPSESSID'];


?>