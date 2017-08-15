<?php

$arr_days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$day1 = 'Sunday';
$day2 = 'Saturday';

foreach($arr_days as $d){
    if($d == $day1 || $d == $day2) {
        echo "<b>$d</b>, ";
    }else echo $d . ', ';
}
