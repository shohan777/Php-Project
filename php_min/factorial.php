<?php

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
      echo "The Factorial number <b>$k</b> is : <b>$c</b><br>";
      
 ?>