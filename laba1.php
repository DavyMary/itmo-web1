<?php

$x = $_POST['xValue'];
$y = $_POST['yValue'];
$r = $_POST['radius'];

$t = microtime(true);

if ($x != "Lol" and $y >= -3 and $y <= 5 and $y != null ) $с = true;

        if (($x <= 0 and -$x <= $r/2 and $y <= $r and $y >= 0) or ($x >= 0 and $y >= 0 and $x <= $r / 2 + $y) or ($y <= 0 and $x <= 0 and $x*$x + $y*$y <= $r*$r)) {
			$answer=array("x"=>$x, "y"=>$y, "r"=>$r, "result"=>"STRIKE!!!", "time"=>(date("H:i:s ")), "time_of_work"=>round ((microtime(true) - $t), 8));
        } else {
			$answer=array("x"=>$x, "y"=>$y, "r"=>$r, "result"=>"MISS:(", "time"=>(date("H:i:s ")), "time_of_work"=>round ((microtime(true) - $t), 8));
        }
if ($с) if(is_array($answer)) echo json_encode($answer);
?>
