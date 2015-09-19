	<!--      Question: Counts Days
						Write a function named countDays which takes a single parameter named dateinstring which is string in 
						the form ”MM.DD.YYY” represent a real date value. The function should print to the console the number 
						of days from the beginning of the year specified in dateInString until the date represented in 
						dateInString. If the value of dateInString is invalid, the function should print ”Bad format” to the 
						console. -->

<?php
	function countDays($dateInString) {
		$date = explode('.', $dateInString); 
		if(count($date) == 3 && checkdate($date[0], $date[1], $date[2])){
			$formatted_date = $date[2].'-'.$date[0].'-'.$date[1].' 00:00:00';
			$diff = strtotime($formatted_date);
			$n = strtotime($date[2].'-01-01 00:00:00');
			$s = $diff-$n;
			echo round($s/86400)+1;
		} else {
		    echo 'Bad format';
		}
	}


	countDays('09.16.2014');
?>
