<?php
	/*function countDays($dateInString) {
		$date = explode('.', $dateInString);
		$check = count($date);
		$co = checkdate($date[0],$date[1],$date[2]);
		$formatted_date = $date[2].'-'.$date[0].'-'.$date[1].' 00:00:00';
		$diff = strtotime($formatted_date);
		$st = strtotime('1970-01-01 01:00:00');
		$stt = strtotime('2014-09-10 00:00:00');

		$var = strtotime('today');
		$dif = $stt-$st;
		echo($dif."<br>");
		echo ($var);
	}


	countDays('17.31.2014');*/

$array = '0123456789ABCDEFG'; 
$s =''; 
for ($i = 1; $i < 10; $i++) { 
$s =rand(0,10); 
echo $s;
echo "<br>";
} 


?>
