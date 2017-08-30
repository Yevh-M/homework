
<?php
//26

$arr_num = [];
$even = [];
$odd = [];


for($i = 0; $i < 10; $i++){
    $arr_num[$i] = rand(1, 100);
}

//echo '<pre>';
//print_r ($arr_num);
//echo '<pre/>';

foreach($arr_num as $k => $v) {
    if(($k % 2) == 0 && $v > 0) {
        $even[$k] = $v;
    } elseif(($k % 2) != 0 && $v > 0) {
        $odd[$k] = $v;
    }
}

echo 'The product of numbers with even indices = ' . $resMul =  array_product($even);

echo '<pre>';
print_r ($odd);
echo '<pre/>';