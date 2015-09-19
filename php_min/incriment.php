<?php

/*print "<table border=\"4\">\n";
 for ($y=1; $y<=10; $y++){
    print "<tr>\n";
    print "shohan";
   for ($x=1; $x<=10; $x++){
        print "<td>";
        
       print($x+$y);
        print "</td>\n";
   } 
    print "</tr>\n";
    
}
1.83
print "</table>";*/

print "<table border=\"6\">\n";
        for ($s=1; $s<=10; $s++){ 
               print "<tr>\n";
    
                for ($a=1; $a<=36; $a++){
                      print "<td>";
                      print ($a*$s);
                      print "</td>\n";
    
                                        }
               print "</tr>\n";
                               }  
print "</table>";
function tt(){
    echo date("d-m-y");
}
echo "Today is:";
tt();


?>

