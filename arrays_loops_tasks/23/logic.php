<?php

$str = 'fs-123';
$str_n = is_numeric($str);
$result = 0;

if (!$str_n == true){
    echo " '$str' - String is not valid. Please, enter a numeric value!";
}else {
    ($result = array_sum(str_split($str)));
    echo 'Sum of line numbers is - ' . $result;
}


