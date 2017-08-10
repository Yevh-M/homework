<?php

$arr =  ['green' => 'зелений', 'red' => 'червоний', 'blue' => 'блакитний'];

foreach($arr as $k =>$col)
{
    echo "key array - [$k] <br/>";
}
foreach($arr as $col)
{
    echo "element array - $col <br/>";
}
