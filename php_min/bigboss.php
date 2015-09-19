<?php

function bigboss($text){
    print "<h1>$text</h1>";
}
bigboss("who is the Boss?you or me?");
bigboss("Don't think you are the boss!");
bigboss("my name is, shohan");

?>
<?php
function my($holder , $period){
    
    print "<address>&copy $holder .All Right Reserved. $period</address>";
}

my("Shohan" , "2011-2012");


?>
<?php
$a = 1;
$b = 2;

function sum(){
    global $a,$b;
    $b = $a+$b;
}
sum();
echo $b."</br>";
$b++;
print "you call $b times";
sum();
echo $b."</br>";




?>