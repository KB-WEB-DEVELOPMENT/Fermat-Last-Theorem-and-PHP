<?php

ini_set('max_execution_time',0);

$sq_root_array = array();
$sq_root_array2 = array();
$diff_array = array();
$triplet = array();


for ($i = 10; $i = 2; $i--) {
	
	if (isset($sq_root_array)) { unset($sq_root_array); }
	if (isset($sq_root_array2)) { unset($sq_root_array2); }
	if (isset($diff_array)) { unset($diff_array); }
	
	$sq_root_array = gmp_sqrtrem($i);
	$sq_root_int = (int)$sq_root_array[0];
	$sq_root_rem = (int)$sq_root_array[1];

	if ($sq_root_rem != 0) { continue; }
		
		for ($j = 1; $j < $i; $j++) {

				$sq_root_array2 = gmp_sqrtrem($j);
				$sq_root_int2 = (int)$sq_root_array2[0];
				$sq_root_rem2 = (int)$sq_root_array2[1];
			
			if ($sq_root_rem2 != 0) { continue; }
				
				$diff = $sq_root_int - $sq_root_int2;
								
				$diff_array = gmp_sqrtrem($diff);
				$diff_int = (int)$diff_array[0];
				$diff_rem = (int)$diff_array[1];

			if ($diff_rem == 0) {
					
				$triplet["c"] = $sq_root_int; 	
				$triplet["b"] = $sq_root_int2;
				$triplet["a"] = $diff_int;
				break;

			}											
		}		
}
var_dump($triplet);


?>

