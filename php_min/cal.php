 <?php
                $first = $_GET['first'];
                $op = $_GET['op'];
                $last = $_GET['last'];
                
                if($op=='+'){
                	echo $first+$last;
                }elseif ($op=='*') {
                	echo $first*$last;
                }elseif ($op=='-') {
                	echo $first-$last;
                }elseif ($op=='/') {
                	echo $first/$last;
                }
                
        
        ?>