<?php

$a = 3;
$b = 'three';

//First method of output through the function
$format = 'Write %d strings using %s different functions 07-08-2017';
echo sprintf($format, $a, $b);
echo '<br/>';

/*Second method of output through the function*/
vprintf("%02d-%02d-%04d", explode('-','7-8-2017'));
echo '<br/>';

# Third method of output through the function
printf ('At 19:00 o\'clock');
