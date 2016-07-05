<?php
	$return = Array();
	$return[] = rand(1000, 9999);
	$return[] = rand(1000, 9999);
	echo json_encode($return);
?>