<!--   Question: Fantastic three sequence
				The fantastic three sequence is a series of numbers in which each subsequent number is the sum of the 
				previous three,minus one. The first few numbers in fantastic three sequence are:
				0, 1, 1, 1, 2, 3, 5, etc
				Write a function that prints the Nth number in the fantastic three sequence to standard output. -->




<?php


	/*function fantastic3($n) {
		$series = array(0,1,1);
		for($i=3 ; $i<=$n ; $i++){
		$a = (isset($series[ (int)$i-3 ]))?$series[ (int)$i-3 ]:0;
		$b = (isset($series[ (int)$i-2 ]))?$series[ (int)$i-2 ]:0;
		$c = (isset($series[ (int)$i-1 ]))?$series[ (int)$i-1 ]:0;
		$d = ($a+$b+$c)-1;

			if($d<0){
			$d = 0;
			}
		$series[$i] = $d;
		}
		echo $series[ (int)$n-1 ];
	}
									
	
	fantastic3(35);*/

						// Or..............................

	function math($n){
		$series = array(0,1,1);
		for($i=0 ; $i<$n ; $i++){
			$a = $series[$i];
			$b = $series[$i+1];
			$c = $series[$i+2];
			$d = ($a+$b+$c)-1;

			$series[$i+3] = $d;
				
		}
			echo $series[$n-1];
			
	}

	math(18);

?>