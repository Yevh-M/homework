<?php

$i = array(4, 2, 5, 19, 13, 0, 10);

foreach($i as $a) {
	if($a == 2 || $a == 3 || $a == 4){  
		echo 'There is!';
		break;
    
	}else {
		
		echo 'No!';
	}
}
?>