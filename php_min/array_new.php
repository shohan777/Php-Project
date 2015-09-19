<?php

    $color = array( array( "friend" => "shohan",
                                    "friendb" => "razu",
                                    "friendc" => "chanchal" ),
                    array("number1" => "1",
                    "number2" => "2",
                    "number3" => "4")
                    
                    );
    $new = array(1,2,3,4,5,6,89,7,7,96,7);
    $man = array("a","s","d","f","g","h","j","k","l","p","o");
    $man_add = array_combine($new , $man);
    $t = array_push($new, 369, 147);
    $to = array("number1" => "1",
                    "number2" => "2",
                    "number3" => "4");
    foreach( $to as $key => $val){
        print "$key = $val <br>";
    }
    foreach( $color as $val){
        
        foreach( $val as $key => $val2){
            print "$key:$val2 <br>";
        }
    }
    
    print("<br>");
    print($t);
    print("<br>");
    foreach( $new as $o){
        print($o);
    }
    
    


?>