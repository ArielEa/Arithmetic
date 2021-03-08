<?php

## todo:: 从小到大的算法排列：
$array =[1,3,5,32,756,2,6];

$len = count($array);

for($i = 0; $i< $len -1; $i++) {
	for($j = $i+1; $j<$len; $j++) {
		if($array[$i] > $array[$j]) {
			$p = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $p;
		}
	}
}

print_r($array);
