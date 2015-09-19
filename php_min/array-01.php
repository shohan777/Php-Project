<?php



//****************here we learn arry
/**

* $name = array("shohan", "chanchal", "raju", "sumon", "asha", "boni");
* $length = count($name);
* for($i=0; $i<$length; $i++)
* {
* echo $name[$i]. ' is my friend.<br />';
* }
*/

//***********Multidimensional Array

/**
* $multi_name = array
* (
* array("shohan", "22", "male"),
* array("rahim", "32", "male"),
* array("nila", "28", "female"),
* );
* echo($multi_name[0][0]. " is ".$multi_name[0][2])."<br />";
* echo($multi_name[1][0]. " is ".$multi_name[1][2])."<br />";
* echo($multi_name[2][0]. " is ".$multi_name[2][2])."<br />";
*/

//***************Sortion Array
/**
* $sort_array = array(2=>"shohan", "chanchal", "raju", "xenun");
* $length = count($sort_array);
* sort($sort_array);

* foreach($sort_array as $key => $value)
* {
* echo("<h1>$key</h1>"."<br />");
* }
*/

//***************Array function[find something in array]


$new = array("shohan", "chanchal", "raju", "sumon", "asha", "boni");
$find = "shohan";

if(in_array($find, $new))
{
echo("I found $find");
}
else
{
echo("i can't found you!");
}




?>