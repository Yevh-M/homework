<?php

// using <while>
echo '--------------------<br/>';

$a = 0;

while($a <= 100)
{
    echo $a . '<br>';
	
    $a += 2;
}
?>

<?php
// using <for>

echo '--------------------<br/>';

for($a = 0; $a <= 100; $a += 2)
{
    echo $a . '<br>';
}
?>

<?php
echo '--------------------<br/>';

for($i = 1; $i <= 100; $i++)
{
    if (0 == ($i % 2))
    {
        echo '<br/>';
        echo $i .'<br/>';
    }
}