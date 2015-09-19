<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "66254442");
define("DB_NAME", "test");
define("TBL_USERS", "encryption");

$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME, $connection) or die(mysql_error());
function addNewUser($username, $password){
   global $connection;
   $password = md5($password);
   $q = "INSERT INTO ".TBL_USERS."(id,pass) VALUES ('$username', '$password')";
   return mysql_query($q, $connection);
   
}

$sql = "select pass from ".TBL_USERS;

$res  = mysql_query($sql,$connection);
while($row = mysql_fetch_assoc($res)){
	
}
if($row['pass'] == md5(258)){
	echo "you are logged in";
}else{
	echo "login failed";
}

?>