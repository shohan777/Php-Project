<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="shohan" />
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
	<title>Untitled 3</title>
    <style>
    p{
        color:red;
    }
    
    </style>
</head>

<body>


<div style="left: 350px;top:176px; position: absolute;">
<table>
	<form action="link.php" method="POST">
		<tr>

		<td>Username:</td><td><input type="text" name="a" placeholder="shohan" />* 
<?php
$error = 0;
if (isset($_POST['a']) && $_POST['a'] == '') {
    $error++;
    echo "required";
}
?>
		</td>
		</tr>


		<tr>
		<td>Password:</td><td><input type="password" name="p" placeholder="***********" />*
<?php

if (isset($_POST['p']) && $_POST['p'] == '') {
    $error++;
    echo "required";
}
?>
		</td>
		</tr>
		<tr>
		<td>Email:</td><td><input type="text" name="e" placeholder="someone@exmaple.com"/>*
<?php

if (isset($_POST['e']) && $_POST['e'] == '') {
    $error++;
    echo "required";
}
?>
		</td>
		</tr>
		<tr>
		<td>Address:</td><td><input type="text" name="c" placeholder="khulna"/>*
<?php

if (isset($_POST['c']) && $_POST['c'] == '') {
    $error++;
    echo "required";

}
?></td>
		</tr>
		<tr>
		<td><input class="btn btn-success" type="submit" name="" /></td>
		</tr>
	</form>
</table>
</div>
<?php

if ($error == 0) {
    echo "saved";

} else {
    echo "<p style=color:red>Total error: $error </p> ";
}
?>
</body>
</html>