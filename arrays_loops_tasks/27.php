<?php
//27

$rows = rand(1, 10);
$cols = rand(1, 10);
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

echo "<table style = 'border: 1px solid black;'>";
for($tr = 1; $tr <= $rows; $tr++){
    echo "<tr style = 'border: 1px solid black;'>";
    for($td = 1; $td <= $cols; $td++){
        $number = rand();
        $rand_colors = $colors[rand(0,count($colors)-1)];
        echo "<td style = 'background-color:{$rand_colors}'>" . $number . '</td>';
    }
    echo '</tr>';
}
echo '</table>';