<?php

$con = mysql_connect("localhost", "root", "66254442");

if(!$con)
{
    
    die ("Could not connect to Database.");
}

if(mysql_query("CREATE DATABASE my_db", $con))
{
    echo ("database created.");
}
else
{
    echo ("error creating database". mysql_error());
}


?>