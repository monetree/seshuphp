<?php
function validate($rst){
$res=trim(strip_tags(addslashes($rst)));
return $res;
}
//echo validate("<p>   seshu's'b  </p>");
?>