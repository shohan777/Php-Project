<?php


/**
 * $two = 7;
 * if($two == 2){
 *     include 'vars.php';
 *     echo "A $color $fruit"; 
 * }else{
 *     echo 'I can`t solve  this problem!';
 *     }
 

//include ('happy.php');

$filename = 'C:/xampp/htdocs/fine.js';
if (file_exists($filename)){
    echo "$filename was last accessed:". date("D d M Y g:i:A.",fileatime($filename));
    
}
*/
$open = fopen("new.html", 'w');
echo $open;

?>