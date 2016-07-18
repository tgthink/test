<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>互联网文档翻译</title>
	<style type="text/css">
		*{margin:0;padding:0;}
		.i_handler_vertical{background:#000;width: 8px;height: 100%;padding: 5px 0;cursor: col-resize;position: absolute;/*background: url(/img/handle-v.png) 3px 50% no-repeat;*/}
	</style>
</head>
<body>
	<div style="position:absolute;width:100%;bottom:0;top:0;">
		<div id="i_iframe" style="width:50%;position:inherit;left:0;top:0;bottom:0;overflow:scroll;">
			<?php 
				$url = "https://github.com/gulpjs/gulp/blob/master/docs/API.md";
				$contents = file_get_contents($url);
				//如果出现中文乱码使用下面代码
				//$getcontent = iconv("gb2312", "utf-8",$contents);
				echo $contents;
			?>
		</div>
		<div class="i_handler_vertical" style="left:452px;"></div>
		<div style="width:50%;position:inherit;left:50%;top:0;bottom:0;">bbbbbbbbb</div>
	</div>
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			function fConsole(){
				console.log($(window).width());
				console.log($(document).width());
			}
			fConsole();
			$(window).resize(function(){
				fConsole();
			});
		});
		// $(document).ready(function(){
		// 	$("#i_iframe").load("ajax.html");
		// });
		// var XMLHttpReq;
		// function createXMLHttpRequest() {
		//     try {
		//         XMLHttpReq = new ActiveXObject("Msxml2.XMLHTTP");//IE高版本创建XMLHTTP
		//     }
		//     catch(E) {
		//         try {
		//             XMLHttpReq = new ActiveXObject("Microsoft.XMLHTTP");//IE低版本创建XMLHTTP
		//         }
		//         catch(E) {
		//             XMLHttpReq = new XMLHttpRequest();//兼容非IE浏览器，直接创建XMLHTTP对象
		//         }
		//     }

		// }
		// function sendAjaxRequest(url) {
		//     createXMLHttpRequest();                                //创建XMLHttpRequest对象
		//     XMLHttpReq.open("post", url, true);
		//     XMLHttpReq.onreadystatechange = processResponse; //指定响应函数
		//     XMLHttpReq.send(null);
		// }
		// //回调函数
		// function processResponse() {
		//     if (XMLHttpReq.readyState == 4) {
		//         if (XMLHttpReq.status == 200) {
		//             var text = XMLHttpReq.responseText;
		//             console.log(text);
		//             /**
		//              *实现回调
		//              */
		//             // text = window.decodeURI(text);
		//             // var cp = document.getElementById("cp");
		//             // cp.innerHTML = "";
		//             // var values = text.split("|");
		//             // for (var i = 0; i < values.length; i++) {
		//             //     var temp = document.createElement("option");
		//             //     temp.text = values[i];
		//             //     temp.value = values[i];
		//             //     cp.options.add(temp);
		//             // }

		//         }
		//     }

		// }
		//sendAjaxRequest("https://www.baidu.com/");
		// var s = document.createElement('script');
		// s.src = "http://xxxx.com/api.php?callback=sdffdf";
		// document.body.append(s);

	</script>
</body>
</html>