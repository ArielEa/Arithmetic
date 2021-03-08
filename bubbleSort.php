<?php

function BubbleSort(& $arr)
{
    $limit = count($arr); // 计数
    for($i=1; $i<$limit; $i++) {
        // 按照数组数量进行循环
        for($p=$limit-1; $p>=$i; $p--) {
            // 内部小循环
            if($arr[$p-1] > $arr[$p]) {
                $temp = $arr[$p-1];
                $arr[$p-1] = $arr[$p]; // 交换大小，交换位置
                $arr[$p] = $temp;
            }
        }
    }
}
$data = [3,5,9,32,2,1,2,1,8,5];
BubbleSort($data);
print_r($data);
