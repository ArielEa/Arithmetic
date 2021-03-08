<?php

// 二分拆分合并
function binary(array $array): array
{
    if (count($array) <= 1) {
        return $array;
    }
    //以$key为界，分成两个子数组
    $key = $array[0];
    $l = [];
    $r = [];
    //分别进行递归排序，然后合成一个数组
    for ($i=1; $i<count($array); $i++) {
        if ($array[$i] <= $key) { $l[] = $array[$i]; }
        else { $r[] = $array[$i]; }
    }
    $l = q($l);
    $r = q($r);
    return array_merge($l, array($key), $r);
}
$arr = array(1,2,44,3,4,33);

print_r( binary($arr) );
