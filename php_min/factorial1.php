<!DOCTYPE HTML>
<html dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="shohan" />

	<title>Factorial</title>
</head>

<body>
    <form action="factorial1.php" method="GET">
    Please input your value: <input type="text" size="10" name="n"/>
    <input type="submit" value="send"/>
    </form>



</body>
</html>

<?php

$i = $_GET['n'];
$z = 1;
for(; $i>1; $i--){
$z *= $i;
}
print ("<h3>$z</h3>");
PRINT_R ("shohan is my name");
?>