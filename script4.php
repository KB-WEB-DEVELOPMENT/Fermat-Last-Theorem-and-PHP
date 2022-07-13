<?php

ini_set('max_execution_time',0);

do {

	$time_start = microtime(true);	
	$sq_root_array1 = array();
	$sq_root_array2 = array();
	$sq_root_array2 = array();

	//range x to 100 times x 
	//$random_num = rand(1000,100000);

	$random_num = rand(15000,30000);

	$random_num2 = rand(1,$random_num-1);

	$sq_root_array1 = gmp_sqrtrem($random_num);
	$sq_root_int1 = (int)$sq_root_array1[0];
	$sq_root_rem1 = (int)$sq_root_array1[1];

	$sq_root_array2 = gmp_sqrtrem($random_num2);
	$sq_root_int2 = (int)$sq_root_array2[0];
	$sq_root_rem2 = (int)$sq_root_array2[1];

	$diff = $random_num - $random_num2;
	$sq_root_array3 = gmp_sqrtrem($diff);
	$sq_root_int3 = (int)$sq_root_array3[0];
	$sq_root_rem3 = (int)$sq_root_array3[1];

	$sum_rem = $sq_root_rem1 + $sq_root_rem2 + $sq_root_rem3; 

	unset($sq_root_array1);
	unset($sq_root_array2);
	unset($sq_root_array3);

	if ($sum_rem == 0) {
		
		echo "a = " . $sq_root_int1 . "<br/>";
		echo " b = " . $sq_root_int2 . "<br/>";
		echo " c = " . $sq_root_int3 . "<br/>";
		$time_end = microtime(true);
		$duration_sec = ($time_end - $time_start)/1000000;
		echo " Average time = " . $duration_sec . " seconds";
		break;

	}	


} while ($sum_rem !== 0);


?>


