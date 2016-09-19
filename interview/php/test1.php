<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo date('Y-m-d H:i:s', strtotime('-1 days'));
		echo '<br/>';
		echo $_SERVER['REMOTE_ADDR'];
		echo '<br/>';
		echo gethostbyname("www.baidu.com");
		//echo date('Y-m-d H:i:s', strtotime('-1 days'));
		//23、用PHP写出显示客户端IP与服务器IP的代码?
		//答:打印客户端IP:echo $_SERVER[‘REMOTE_ADDR’]; 或者: getenv('REMOTE_ADDR');//getenv取得开发环境变量
		//打印服务器IP:echo gethostbyname("www.bolaiwu.com") // gethostbyname取得IP地址函数
	?>
</body>
</html>