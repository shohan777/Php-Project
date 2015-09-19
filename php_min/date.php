<?php


/**
* $arr = array(1, 2 , 3 , 5 , 6 , 7);
* while (list(, $val) = each($arr)){
* if ($val == 3){
* continue 1;
* }
* echo "$val";
* }
*/

$tomorro = mktime(0,0,0,date("m"),date("d"),date("Y")+1);
echo "Tomorrow is ".date("d/m/Y", $tomorro);

?>