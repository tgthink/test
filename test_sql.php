<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		//select * from t_user where user_name='fire' and user_pw='e10adc3949ba59abbe56e057f20f883e'
		$username = "fire";
		$userpass = "e10adc3949ba59abbe56e057f20f883e";
		$sqlname="xiaosuDB";
		$con = mysql_connect("120.25.153.179","root","840f6527d7");
		mysql_select_db($sqlname,$con);
		mysql_query("SET NAMES 'utf8'",$con);
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
		$myquery = "select * from t_user where user_name='{$username}' and user_pw='{$userpass}'";
		echo $myquery.'<br/>';
		$result = mysql_query($myquery,$con) or die("error:".mysql_error());
		//$rows = mysql_num_rows($result);
		$aaa = mysql_fetch_array($result);
		// if ($rows == 1) {

		// }
		print_r($aaa);
	?>
</body>
</html>