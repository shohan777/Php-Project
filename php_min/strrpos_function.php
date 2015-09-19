<?php

$user = $_SERVER['HTTP_USER_AGENT'];
$browser = strpos($user, 'Maxthon');
    if($browser == 0){
    
        echo "You are use a unknown browser.";
    
        }else{
        echo "You use Maxthon cloud browser.Which is good and very friendly.\tThank you.";
        
        }


?>