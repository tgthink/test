<?php
	header("Access-Control-Allow-Origin:*");
	header('Access-Control-Allow-Headers: X-Requested-With');
	// $aReturn = Array();
	// $aReturn["state"] = "ok";
	// echo json_encode($aReturn);
	$aaaaaaaaaa = file_get_contents("php://input");

	$data = array();
	$data['success'] = true;
 	$data['message'] = $aaaaaaaaaa;
	echo json_encode($data);

	// $errors = array();      // array to hold validation errors
	// $data = array();         // array to pass back data
 
	// // validate the variables ======================================================
 //    if (empty($_POST['name']))
 //        $errors['name'] = 'Name is required.';
 //    if (empty($_POST['superheroAlias']))
 //        $errors['superheroAlias'] = 'Superhero alias is required.';
	// // return a response ===========================================================
 //    // response if there are errors
 //    if ( ! empty($errors)) {
 //        // if there are items in our errors array, return those errors
 //        $data['success'] = false;
 //        $data['errors']  = $errors;
 //    } else {
 //        // if there are no errors, return a message
 //        $data['success'] = true;
 //        $data['message'] = 'Success!';
 //    }
 //    // return all our data to an AJAX call
	// echo json_encode($data);

	// $data = array();
	// $data['success'] = true;
	// $data['message'] = $_GET;
 //    $callback = $_GET['callback'];
 //    echo $callback.'('.json_encode($data).')';
 //    exit;
?>