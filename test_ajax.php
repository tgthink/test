<?php
	header('Access-Control-Allow-Origin:*');
	$return = array();
	$return["a"] = "1111111";
	$return["b"] = "2222222";
	echo json_encode($return);
?>