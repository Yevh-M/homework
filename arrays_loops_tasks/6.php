<?php

$arr = array('green' => 'зелений', 'red' => 'червоний', 'blue' => 'блакитний');


foreach($arr as $k => $col)
{
     $en =  $k;
     echo "'$en',";
}
echo '<br/>';

foreach($arr as $col)
{
    $ru = $col;
    echo "'$ru',";
}
