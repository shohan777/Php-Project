<?php

$link = mysql_pconnect('localhost', 'root', 66254442);
if (!$link)
{
die('Could not connect:' . mysql_error());
}
echo 'Connected successfully';

mysql_close($link);

?>
