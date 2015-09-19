
<?php

print "Welcome to <b>$_POST[user] sir</b><br>";

print "Here is your comment: \n<i>$_POST[comment]</i><br>";
print "You have the following books in collection:</br>";
print "<ol>";
foreach ($_POST["books"] as $book)
{
    print "<li>$book";
}

print "</ol";



?>
