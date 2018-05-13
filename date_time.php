<h3>Date and Time function</h3>
<?php
echo "Date : ".date('d-m-y');
echo "<br>";
echo "Date : ".date('D-M-Y');
echo "<br>";
echo "Date and time 24 hr format : ".date('D-M-Y  H:i:s A ');
echo "<br>";
echo "Date and time 12 hr format : ".date('D-M-Y  h:i:s A');
echo "<br>";
echo "Day no of the week : ".date('w' );
echo "<br>";
echo "Day name : ".date('D' );
echo "<br>";
echo "Day no of the year : ".date('z' );
echo "<br>";
echo "weak no of the year : ".date('W' );
echo "<br>";
echo "Month no of the year : ".date('m' );
echo "<br>";
echo "Month no of the year  without zero: ".date('n' );
echo "<br>";
echo "Full month name : ".date('F' );
echo "<br>";
echo "Three letter month name : ".date('M' );
echo "<br>";
echo "Year : ".date('Y' );
echo "<br>";
echo "Month no of the year : ".date('m' );
?>
<h3>Date_default_timezone_get()</h3>
<?php
echo "Default time zone : ".date_default_timezone_get();
echo "<br>";
?>
<h3>Date_default_timezone_set()</h3>
<?php
date_default_timezone_set('asia/kolkata');
echo "Indian time zone : ".date('Y-F-D H:i:s'); 
echo "<br>";
?>
<h3>Time()</h3>
<?php
echo time();
echo "<br>";
?>
<h3>how to get or extract date and time from timestamp</h3>
<?php
$ts = time();
echo date('d-m-y H:i:s',$ts);
echo "<br>";
?>
<h3>strtotime() - using this function we can convert date and time into second</h3>
<?php
$date = "02-06-1989";
$ts = strtotime($date);
echo $ts;
echo "<br>";
$cdate = date('Y-M-D',$ts);
echo $cdate;
?>









