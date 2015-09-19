<?php

function isPrime($number){

    for($i=2; $i<$number; $i++){
        if($number % $i == 0){
            global $prime = 4;
            break 1;
        }elseif($number-1 == $i){
            $prime = 5;
            break 1;
        }
    }
}


for($i= 2; $i<10; $i++){
    isPrime($i);
    if($prime == 5){
        echo "yes";
    }else{
        echo "not";
    }
}

?>