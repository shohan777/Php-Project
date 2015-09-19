<?php

$string = "Hi shohan How are you?";
$revers = strrev($string);

if (isset($_POST['pass']))
{
    $user_pass = strlen($_POST['pass']);
    if ($user_pass < 8)
    {
        echo "Sorry, you must put atleast 8 cahracter.";
    } else
    {
        echo "you can log in.";
    }
}

?>


<form action="string_revers_function.php" method="POST" name="pass">
<input type="text" name="pass"/>
<input type="submit" value="log in"/>
</form>