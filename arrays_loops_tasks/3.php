<?php
//3
$num = array(26, 17, 136, 12, 79, 15);

$result = 0;
foreach($num as $el)
{
    $result += $el * $el;
}
echo "Solution = $result";

