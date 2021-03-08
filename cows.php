<?php

function cows(int $years)
{
    static $number = 1;

    for ($i = 0; $i <= $years; $i++ ) {
        if ($i >= 4 && $i < 15) {
            $number ++;
            cows($years - $i);
        }
        if ($i >= 20) {
            $years --;
        }
    }
    return $number;
}
print_r( cows(20) );
