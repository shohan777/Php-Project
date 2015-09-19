<html>
<head>
<style type="text/css">
body {
background-color:yellow
}

h1{
color:red;
font-family:times;
text-align:center;
}
h2{

color:blue;
font-family:georgia;
text-align:center;
}
h3{
color:green;
font-family:times;
text-align:center;
}

</style>

</head>
<body>
<?php
 $name = 'shohan';
 $pass = '8d6f4c1303af5d44894ad8f0e9043725';
 
	if(isset($_POST['name']) && isset($_POST['pass'])){
		$name_c = $_POST['name'];
		$pass_c = md5($_POST['pass']);
		
		if(!empty($_POST['name']) && !empty($_POST['pass'])){
			
			if($name_c != $name){
				echo ("<h1>Please check your username!</h1>");
			
			}else if($pass_c != $pass){
				echo ("<h1>Please check your password!</h1>");
				
			}else if($name_c != $name && $pass_C != $pass){
				echo ("Please n p");
			
			}else{
				echo ("<h2>you can log in...</h2>");
			}
			
		}else{
		    echo ("<h3>please fill up all the field!</h3>");
	}
	
}
?>
</body>
</html>
 