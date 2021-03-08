<?php
// 顺序插入数值
// todo:: bug {相同的数据插入，会出现查找失误}
$in = 3;
$arr = [1,1,1,3,5,7];
$n = count($arr);
//如果要插入的数已经最大，直接打印
if($arr[$n-1] < $in) {
    $arr[$n+1] = $in; print_r($arr);
}
for($i=0; $i<$n; $i++) {
    //找出要插入的位置
    if($arr[$i] >= $in){
        $t1= $arr[$i];
        $arr[$i] = $in;
        //把后面的数据后移一位
        for($j=$i+1; $j<$n+1; $j++) {
            $t2 = $arr[$j];
            $arr[$j] = $t1;
            $t1 = $t2;
        }
        //打印
        print_r($arr);
        die;
    }
}
