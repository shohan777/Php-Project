<?php
echo <<<EOT
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="shohan" />

	<title>Form</title>
</head>

<body>

<form action="$_SERVER[PHP_SELF]" method="POST">
<b>Please input your name:       &nbsp;        </b><input type="text" name="who"/>
<br />
<br />
<b>Please input your number</b> :<input type="text" name="user" />
Please hit this button:<input type="submit" value="send"/><br />
<br/>You can show Today's date also!<br/>
<!--Books in collection:<br />
<input type="checkbox" value="Php" name="books[]"/>
Php<br />
<input type="checkbox" value="Css" name="books[]"/>
Css<br />
<input type="checkbox" value="Html" name="books[]"/>
Html<br />
<input type="checkbox" value="Java script" name="books[]"/>
Java script<br />
<input type="checkbox" value="Java" name="books[]"/>
Java<br />
<input type="checkbox" value="Asp" name="books[]"/>
Asp<br />
Comment:<textarea cols="50" rows="20" wrap="VIRTUAL" name="comment"></textarea><br />-->


</form>
EOT;

if ($_POST){
$i;
      $k = $_POST['user'];
      $c =1 ;
      $m = 1;
      
      
      for($i=1; $i<=$k; $i++)
      {
          $c *= $i*$m;
          
      
      }
	  echo "Today is :". "<b>".date("d/m/y")."</b>"."<br>";
      echo "Welcome <b>$_POST[who]</b><br>";
      echo "The Factorial number <b>'$k'</b> is : <b>$c</b><br>";
	  }
echo "</body></html>";
?>
