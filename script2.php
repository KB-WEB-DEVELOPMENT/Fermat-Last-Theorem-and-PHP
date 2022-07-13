<?php
ini_set('max_execution_time',0);
/*
output : 

base = 2, exponent = 49, result = 562949953421312
base = 2, exponent = 50, result = 1125899906842624
base = 2, exponent = 51, result = 2251799813685248
base = 2, exponent = 52, result = 4503599627370496
base = 2, exponent = 53, result = 9007199254740992
base = 2, exponent = 54, result = 18014398509481984
base = 2, exponent = 55, result = 36028797018963968
base = 2, exponent = 56, result = 72057594037927936
base = 2, exponent = 57, result = 144115188075855872
base = 2, exponent = 58, result = 288230376151711744
base = 2, exponent = 59, result = 576460752303423488
base = 2, exponent = 60, result = 1152921504606846976
base = 2, exponent = 61, result = 2305843009213693952
base = 2, exponent = 62, result = 4611686018427387904
base = 2, exponent = 63, result = 9223372036854775807 --> maximal exponent = 63 , note : 9223372036854775807 = PHP_INT_MAX
base = 2, exponent = 64, result = 9223372036854775807
base = 2, exponent = 65, result = 9223372036854775807
base = 2, exponent = 66, result = 9223372036854775807
base = 2, exponent = 67, result = 9223372036854775807
base = 2, exponent = 68, result = 9223372036854775807
base = 2, exponent = 69, result = 9223372036854775807

*/

for ($i = 1; $i < 250; $i++) {
    
	$exp_num_gmp = gmp_pow(2,(int)$i);
	$exp_num_string = gmp_strval($exp_num_gmp);
	$exp_num_int =  (int)$exp_num_string;
	
	if ($exp_num_int >  281474976710656) {
		
		echo "base = 2, exponent = " .  $i . ", result = " . $exp_num_int . "<br/>";	
		
	}
	
}

?>


