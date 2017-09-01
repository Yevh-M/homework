<?php
//16

$arr = [1=>1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach($arr as $key => $n)
{
    if($key % 3 == 0){
        echo $key . "\n";
    }else {
        echo $key . ", ";
    }
}
