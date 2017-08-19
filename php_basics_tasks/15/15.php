<?php
$a = 7;
$b = 0;
$operator = '/';

switch ($operator){
    case '+':
        $c = ($a + $b);
        break;
    case '-':
        $c = ($a - $b);
        break;
    case '*':
        $c = ($a * $b);
        break;
    case '/':
        if ($b != 0)
        {
             $c = ($a / $b);
        } else{
            echo 'You cannot divide by zero!';
        }
        break;
    case '%':
        if ($b != 0) {
            $c = ($a % $b);
        }else{
            echo 'You cannot split modulo by zero!';
        }
        break;
}
if(!is_int($c)&& !is_float($c)) {
    $c = "Invalid result";
}
echo '<pre>';
echo  $a . $operator . $b . '=' . $c ;
echo '</pre>';


