<?php
//25
$arr_val = array();

for($count = 1; $count <= 10; $count++){
    $arr_val[] = rand(1, 10);
}
echo '<pre>';
print_r ($arr_val);
echo '<pre/>';
$arr_min = min ($arr_val);//1
$arr_max = max ($arr_val);//10

foreach($arr_val as $k => $n){
    if ($n == $arr_min){
        $arr_val[$k] = $arr_max;
    }if ($n == $arr_max){
        $arr_val[$k] = $arr_min;
    }
}
echo '<pre>';
print_r ($arr_val);
echo '<pre/>';

echo 'Max value: ' . $arr_max . '</br>';
echo 'Min value: ' . $arr_min;


