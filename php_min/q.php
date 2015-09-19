<?php

    include('connect.php');

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="shohan" />

	<title>Untitled 6</title>
</head>

<body>
    <div style="width:200px;height:500px;background-color: aquamarine;">
        <p style="text-align: center;"><strong>Product Category</strong></p>

    <?php
    $lin = con();
    $p = "SELECT * FROM categoty";
    $re = mysqli_query($lin, $p);
    
    while($row = mysqli_fetch_array($re))
    {
        echo "<a href='w.php?id=$row[category_name] '>$row[category_name]</a><br>";
    }
    
    ?>



    </div>

<div style="width:78.5%;height:500px;background-color: green;left:213px;position:absolute;top:16px">


</div>

</body>
</html>