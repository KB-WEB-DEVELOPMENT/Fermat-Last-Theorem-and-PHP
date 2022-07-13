<?php

ini_set('max_execution_time',0);
// loop end value: 10 --> loop time : 5.0067901611328E-12 seconds
// loop end value: 100 --> loop time : 2.598762512207E-11 seconds
// loop end value: 1000 --> loop time : 3.1900405883789E-10 seconds
// loop end value: 10000 --> loop time :  2.946138381958E-9 seconds (1.50 seconds with my stopwatch)
// loop end value: 100000 --> loop time : 3.3493041992187E-8 seconds (17.27 seconds with my stopwatch)
// loop end value: 200000  --> loop time : 1.3243794441223E-7 seconds -->  irregular asymptotic behavior starts here (67.13 seconds with my stopwatch) 
// loop end value: 250000  --> loop time : 1.6073703765869E-7 seconds --> irregular asymptotic behavior (113.21 seconds with my stopwatch)
// loop end value: 290000  --> loop time : 1.9360399246216E-7 seconds --> irregular asymptotic behavior (137.33 seconds with my stopwatch)
// loop end value: 300000  --> loop time : 1.7879199981689E-7 seconds --> smaller value than for 290000, irregular asymptotic behavior (144.40 seconds with my stopwatch)
// loop end value: 1000000 --> loop time : computer hangs for ever ...

$time_start = microtime(true);
for ($i = 0; $i < 300000; $i++) {
    echo $i . "<br/>";

}
$time_end = microtime(true);
$duration_sec = ($time_end - $time_start)/1000000;
echo $duration_sec;
?>

