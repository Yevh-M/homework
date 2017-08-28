<?php
//24

$str= '123456789098765432';
$num = '3';

$check = is_numeric($str);

if($check == 1) {
    echo 'Amount of repetitions \'' . $num . '\' in the number ' . $str . ' = ' . substr_count($str, $num) . ' times';
}else {
    echo 'Entered invalid value!';
}
