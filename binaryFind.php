<?php

// 二分查找
function binaryFinder(array $array, int $low, int $high, int $key ): int
{
    if ($low <= $high) {
        $mid = intval(($low + $high) / 2);
        if ($array[$mid] == $key) {
            return $mid;
        }else if ($key < $array[$mid]) {
            return binaryFinder($array, $low, $mid -1, $key);
        } else {
            return binaryFinder($array, $mid + 1, $high, $key);
        }
    }
}

$array = [2,3,4,5];
$count = count($array);
$res = binaryFinder($array, 0, $count, 5);
print_r( $res );
