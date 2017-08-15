<?php
//Output an array of days of the week and dynamic determination of the current day

$arr_days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$date = getdate();
$day = $date["wday"];
$str = "";

foreach($arr_days as $key => $d){
    if($key == $day) {
        $str .= "<i>" . $d . "</i>, ";
    }else {
        $str .= $d . ', ';
    }
}
echo $str;
?>
