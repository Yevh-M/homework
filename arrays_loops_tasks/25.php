<?php
//25
$arr_val = array();

for($count = 1; $count <= 10; $count++){
    $arr_val[$count] = rand();
}
echo '<pre>';
print_r ($arr_val);
echo '<pre/>';
$arr_max = max ($arr_val);
$arr_min = min ($arr_val);

$arr_max=$arr_min+$arr_max;
$arr_min=$arr_max-$arr_min;
$arr_max=$arr_max-$arr_min;

echo 'Max value: ' . $arr_max . '</br>';
echo 'Min value: ' . $arr_min;