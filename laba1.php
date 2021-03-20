<?php
if(isset($_POST['xValue']) and isset($_POST['yValue']) and isset($_POST['radius'])) {
	$x = $_POST['xValue'];
	$y = $_POST['yValue'];
	$r = $_POST['radius'];	
}
	$t = microtime(true);
	$c = (date("H:i:s "));
	$v = round ((microtime(true) - $t), 8);

if ($x != 9999 and $y >= -3 and $y <= 5 and $y != null and $x<=5 and $x>=-3 and $r>=1 and $r<=5) $сac = true;

        if (($x <= 0 and -$x <= $r/2 and $y <= $r and $y >= 0) or ($x >= 0 and $y >= 0 and $x <= $r / 2 + $y) or ($y <= 0 and $x <= 0 and $x*$x + $y*$y <= $r*$r)) {
			$answer = '{' .
				"\"x\":\"$x\"," .
				"\"y\":\"$y\"," .
				"\"r\":\"$r\"," .
				"\"result\":\"STRIKE!!!\"," .
				"\"time\":\"$c\"," .
				"\"time_of_work\":\"$v\"" .
				"}";
	 }else {
		$answer = '{' .
			"\"x\":\"$x\"," .
			"\"y\":\"$y\"," .
			"\"r\":\"$r\"," .
			"\"result\":\"MISS:(\"," .
			"\"time\":\"$c\"," .
			"\"time_of_work\":\"$v\"" .
			"}";
 
        }
if ($сac)  echo $answer;
		
