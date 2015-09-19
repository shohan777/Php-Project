<html>
<body>

<form action="test.php" method="POST">
  User name : <input name="uname"/>
  password :  <input name="password"/>
  <input type="submit" value="Submit Query"/>
  </form>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php
 function d(){
	echo date('d.m.y');
    }
    echo "Today is: ";
    d();
?>
</body>
</html>