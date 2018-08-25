<?php
 
/*function array_random($size) {

	for ($i=0; $i < $size; $i++) { 
	$array[$i] = rand(0,10);
	}
        return $array;
}

var_dump(array_random(5));*/

function min_max ($a, $b) {
	if ($a > $b) {
		return $max = $a;
	} else {
		return $max = $b;
	}
}

$a=64444446;
$b=23443;
$c=104440;

//echo min_max($a,$b);
echo '<br>';
echo min_max(min_max($a,$b),$c);

echo "<hr>";

/*recircsion($a){
	if($a<20){
		return recursion($a+1);
	}
}*/
//Факториал

function factorial($fact){
	if ($fact == 0) {
		return 1;
	}
		echo "$fact <br>";
		return factorial($fact - 1) * $fact ;
	
}

echo(factorial(5)) ;