<?php
//28
//The multiplication table with two <for> loops is implemented in the 13th task.



for($elm_1 = 1; $elm_1 <= 10; $elm_1++){
    echo "<div style='float: left; margin-left: 30px; width: 60px;'>";
    for($elm_2 = 1; $elm_2 <= 10; $elm_2++){

        $result = $elm_1 * $elm_2;
        echo  $elm_1 . '*' . $elm_2 . '=' . $result . '<br/>';
    }
    echo '<br/></div>';
}
echo '<br/>';