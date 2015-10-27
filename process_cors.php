<?php
	header("Access-Control-Allow-Origin:*");
	// header('Access-Control-Allow-Headers: X-Requested-With');
	// $aReturn = Array();
	// $aReturn["state"] = "ok";
	// echo json_encode($aReturn);

	// $data = array();
	// $data['success'] = true;
 // 	$data['message'] = "11111111111111111111111";
	// echo json_encode($data);

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
	$data = array();
    $callback = $_GET['callback'];
	if(strtolower($_GET["email"])=="652346044@qq.com"&&$_GET["pwd"]=="88888"){
		$data['success'] = true;
		$data['message'] = "登录成功";
	}else{
		$data['success'] = false;
		$data['message'] = "登录失败";
	}
    echo json_encode($data);
    exit;
?>