<?php

$a = 3;
$b = 'three';

$format = 'Write %d strings using %s different functions 07-08-2017';
echo sprintf($format, $a, $b);
echo '<br/>';

vprintf("%02d-%02d-%04d", explode('-','7-8-2017'));
echo '<br/>';

printf ('At 19:00 o\'clock');
