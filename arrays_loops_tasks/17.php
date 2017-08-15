<?php
//Output only using <foreach> and ternary operator

$months = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november","december"];
$month = "august";

foreach ($months as $m){
    echo ($month == $m ? "<b>$m</b><br/>" : "$m<br/>");
}
?>

<?php
// Output using <foreach> <if> and <else>
$arr_month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = $arr_month[7];

foreach($arr_month as $val){
   if($val == $month){
       echo "<b>$month</b>, ";
   }else {
       echo $val . ', ';
   }
}
