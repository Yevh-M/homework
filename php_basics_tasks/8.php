<?php

$name = 'Yevhenii';
$age = 26;

echo "My name is:{$name}";

echo "I am {$age} years old";


if ($age >= 18 && $age <= 59) {
    echo 'You still have to work and work';
}   if ($age > 59){
        echo 'It\'s time for you to retire';
}       if ($age >0 && $age <=17){
            echo 'It\'s too early to work';
}           if (!intval($age) || $age < 1 || !preg_match('/^\+?\d+$/', $age)){
                echo 'Unknown age';
}

