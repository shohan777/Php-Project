<?php
$pass_md = "7771fbb20af6ef10827c593daa3aff7b";


if(isset($_POST)){
	$pass = md5($_POST['shohan']);
	
	if($pass==$pass_md){
		echo 'YOu can log in';
	}else{
		echo 'You put a wrong password';
		}
	
}

?>
<form action="issettu.php" method="POST" >
password:<input type="text" name="shohan">
<input type="submit" value="Go" >
</form>