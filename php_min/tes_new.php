<?php
/*
$x=5; // global scope
  
function myTest() {
     
   global $x,$y;
   $y=10;
   // local scope
   echo "<p>Test variables inside the function:</p>";
   echo "Variable x is: $x";
   echo "<br>";
   echo "Variable y is: $y";
} 

myTest();

echo "<p>Test variables outside the function:</p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";

*/
function myTest() {
   static $x=0;
   echo $x;
   $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

?>