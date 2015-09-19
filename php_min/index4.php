<?php
	if(!empty($_GET['id'])){
	$id = $_GET['id'];
		if($id){
		include('pages/'.$id. '.php');
		}
	}else{
		include ('pages/home.php');
		}
	if(!empty($_GET['user_id'])){
		$user_id = $_GET['user_id'];
			include ('inc/' .$user_id. '.inc.php');
		}
?>


<html>
<head>

<style type="text/css">
#menu {
	list-style:none;
	position:absolute;
	top:100px;
}
#menu a {
	text-decoration:none;
}
p {
	position:absolute;
	top:120px;
	left:150px;
}
#setting {
	position:absolute;
	top:180px;
	left:150px;

	}
h1 {
	position:absolute;
	top:250px;
	left:150px;
	}
</style>
</head>
<body>

<ul id="menu" >
<li><a href=".?id=home">HOME</a></li>
<li><a href=".?id=profile">PROFILE</a></li>
<li><a href=".?id=setting">SETTING</a></li>
</ul>
</body>

</html>
<?php
include ('factorial1.php');

?>