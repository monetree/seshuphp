<?php
define('LANG','php');
//define('LANG','python'); //we can't overwrite
echo LANG;
echo "<br>";
?>
<!--<?php
echo "<br>";
echo __LINE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;
echo "<br>";
?>-->
<!--<?php
function myFunction(){
echo __FUNCTION__;
}
myFunction();
?>-->
<!--<?php
class myclass {
	public function f1(){
	echo "class name: ".__CLASS__;	
	echo "<br>";
	echo "method name: ".__METHOD__;	
	}
}
$obj = new myclass;
$obj->f1();
?>-->