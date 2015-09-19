<form action="sign.php" method="POST">
Username:<input type="text" name="pname"/>
Password:<input type="password" name="ppass"/>
<input type="submit" value="log in"/>
</form>

<?php
function rr(){
    echo date("d-m-y");
}
if(isset($_POST["pname"]) && isset($_POST["ppass"]) && !empty($_POST["pname"]) && !empty($_POST["ppass"])){
    echo rr();
}else{
    echo "Please Put your username and password";
}


?>