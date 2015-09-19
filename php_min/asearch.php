<?php
include ("dbcon.php");
 session_start(); 
 /*if(!$_SESSION['admin'])
 {  
	 header("location:login.php");
 }*/
    //echo $_SESSION['admin'];
echo "<html>
<head>
<title>
Search for Book
</title>";
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "<script type=\"text/javascript\">
   function check(frm)
   {
      var c=0;
 document.getElementById(\"chk_searchinfo\").innerHTML=\"\";
    if (frm.searchinfo.value.length==0)
    {
    	document.getElementById(\"chk_searchinfo\").innerHTML=\"Field required\";
  	    c=1;
    }
	
	document.getElementById(\"valid_msg\").innerHTML=\"\";
	if(c==1)
	{
	 return false;
	}
   }
</script>";
echo "</head>

<center>
<body class=\"back\">
<h1>KUET LIBRARY MANAGEMENT SYSTEM</h1>";
   //echo $_SESSION['admin'];
 //session_start(); 

  if(isset($_COOKIE['adminname']) && isset($_COOKIE['adminpass']))
  {   echo "dadad";
      $_SESSION['admin']="admin";
	//echo "<p class='login'><a href='login.php'>Login</a></p>";
	echo "<p class='login'><a href='aDestroy.php'>Logout</a></p>";
  }
  elseif ($_SESSION['admin'])
  {
	  echo "<p class='login'><a href='aDestroy.php'>Logout</a></p>";
  }
  else 
    header("location:login.php");
  /*else 
   {
	 if(isset($_SESSION['admin'])==0)
	   echo "<p class='login'><a href='login.php'>Login</a></p>";
	 else
	   echo "<p class='login'><a href='aDestroy.php'>Logout</a></p>";
   }*/
	

//if($_SESSION['admin'])
//{
echo "<ul id=\"ul\">
<li class=\"li\"><a class=\"one\" href=\"insBook.php\" target=\"_self\">INSERT BOOK</a></li>
<li class=\"li\"><a class=\"one\" href=\"asearch.php\" target=\"_self\">SEARCH BOOK</a></li>
<li class=\"li\"><a class=\"one\" href=\"delBook.php\">DELETE BOOK</a></li>
<li class=\"li\"><a class=\"one\" href=\"receive.php\">Receive Book</a></li>
<li class=\"li\"><a class=\"one\" href=\"renew.php\">RENEW BOOK</a></li>
<li class=\"li\"><a class=\"one\" href=\"req.php\">Requests</a></li>
<li class=\"li\"><a class=\"one\" href=\"option.php\">Option</a></li>
</ul>";
//}
echo "<br/><br/><br/>
<h1> Search Book </h1>";

$result = mysql_query("SELECT * FROM book");

echo "<form method='post' action='asearchBook.php' onSubmit=\"return check(this)\">
<table width='500' cellpadding='3'>
<tr>
<td align='right'>
Search for: 
</td>
<td>
<input type='text' name='searchinfo' id=\"searchinfo\"/><font color=\"#FF0000\" size=\"2\"><label id=\"chk_searchinfo\"></label></font>
</td>
</tr>
</tr>
</tr>
<tr>
<td align='right'>
Search by:
</td>
</tr>
<tr>
<td height='22' align='right'>
<input type='radio' name='options' value='1' checked/>
</td>
<td>
Book's Name
</td>
</tr>
<tr>
<td height='23' align='right'>
<input type='radio' name='options' value='2'/>
</td>
<td>
Writer's Name
</td>
</tr>
</tr>
<tr>
<td height='23' align='right'>
<input type='radio' name='options' value='3'/>
</td>
<td>
Category
</td>
</tr>
</tr>
<tr>
<td height='31' >
</td>
<td>
<input type='submit' value='Search' />
</td>
</tr>
</table>
<label id=\"valid_msg\"></label>

</form>";
echo "</body>";
echo "</center>";
echo "</html>";
?>