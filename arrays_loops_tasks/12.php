<?php

$n = 1000;
$num = 0;

while($n >= 50)
{
    $n/=2;
    $num++;
}
echo 'Number of iterations - '. $num . '<br>';
echo 'Number - ' . $n ;
echo '<br/>';
?>


<?php
echo '--------------------<br/>';

$num = 0;

for($n = 1000; $n >= 50; $n = $n / 2)
{
    $num++;
}
echo 'Number - ' . $n . '<br/>';
echo 'Number of iterations - ' . $num;


