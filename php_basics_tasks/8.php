<?php
// 8

$name = 'Yevhenii';
$age = '26test';

echo "My name is:{$name} </br>";

if (!intval($age) || $age < 1 || !preg_match('/^\+?\d+$/', $age)){
    echo 'Unknown age';
}else{
    echo "I am {$age} years old </br>";

    if ($age >= 18 && $age <= 59) {
        echo 'You still have to work and work';
    }
    if ($age > 59){
        echo 'It\'s time for you to retire';
    }
    if ($age >0 && $age <=17){
        echo 'It\'s too early to work';
    }
}
