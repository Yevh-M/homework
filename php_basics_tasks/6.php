<?php

$name = 'Yevhenii';
$age = 26;

echo "My name is:{$name}";

echo "I am {$age} years old";

if ($age >= 18 && $age <= 59) {
    echo 'You still have to work and work';
} if ($age > 59){
        echo 'It\'s time for you to retire';
}
