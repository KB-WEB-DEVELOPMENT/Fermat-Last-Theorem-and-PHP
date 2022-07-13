
	<?php

	ini_set('max_execution_time',0);


	do {
		$time_start = microtime(true);	
		$nth_root_array1 = array();
		$nth_root_array2 = array();
		$nth_root_array2 = array();

		$random_num = rand(10,10000);

		$random_num2 = rand(1,$random_num-1);

		$random_exp = rand(3,63);

		$nth_root_array1 = gmp_rootrem($random_num,$random_exp);
		$nth_root_int1 = (int)$nth_root_array1[0];
		$nth_root_rem1 = (int)$nth_root_array1[1];

		$nth_root_array2 = gmp_rootrem($random_num2,$random_exp);
		$nth_root_int2 = (int)$nth_root_array2[0];
		$nth_root_rem2 = (int)$nth_root_array2[1];

		$diff = $random_num - $random_num2;
		$nth_root_array3 = gmp_rootrem($diff,$random_exp);
		$nth_root_int3 = (int)$nth_root_array3[0];
		$nth_root_rem3 = (int)$nth_root_array3[1];

		$sum_rem = $nth_root_rem1 + $nth_root_rem2 + $nth_root_rem3; 

		unset($nth_root_array1);
		unset($nth_root_array2);
		unset($nth_root_array3);

		if ($sum_rem == 0) {
			
			echo "n = " . $random_exp . "<br/>";
			echo " a = " . $nth_root_int1 . "<br/>";
			echo " b = " . $nth_root_int2 . "<br/>";
			echo " c = " . $nth_root_int3 . "<br/>";
			$time_end = microtime(true);
			$duration_sec = ($time_end - $time_start)/1000000;
			echo " Average time = " . $duration_sec . " seconds";
			break;

		}	

	} while ($sum_rem !== 0);


	?>

