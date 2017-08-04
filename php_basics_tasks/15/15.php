<?php
//It's not over yet. Checking the division by zero works incorrectly
$a = 2;
$b = 2;
$operator = '+';
$c;

if ($b == 0){
    echo 'You cannot divide by zero!';
}
switch ($operator){
    case '+';
        echo $c = ($a + $b);
        break;
    case '-';
        echo $c = $a - $b;
        break;
    case '*';
        echo $c = $a * $b;
        break;
    case '/';
        echo $c = $a / $b;
        break;
    case '%';
        echo $c = $a % $b;
        break;
}
echo '<pre>';
echo  $a . $operator . $b . '=' . $c ;
echo '</pre>';
