<?php

if (isset($_GET['p']) && $_GET['p'] != '') {
	
	$p = $_GET['p'];		
	
} else {
	
	$p = 'home';	
	
}

function getActive($v) {
	
	global $p;
	
	if ($p == $v) {
	
		echo ' class="act"';
		
	}
	
}

?>