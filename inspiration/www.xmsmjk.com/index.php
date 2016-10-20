<?php
	include "public.php";
	/*
		//厦门市妇幼保健院
		strSta: '/UrpOnline/Home/Index/7_____',
        orgId: '7',
        deptCode: '',
        sex: '0',
        date: '',
        page: '1',
        orderType: '1',
        orgType: '1'
		//产科门诊
        strSta: '/UrpOnline/Home/Index/7_330____',
        orgId: '7',
        deptCode: '330',
        sex: '0',
        date: '',
        page: '1',
        orderType: '1',
        orgType: '1'
	*/
    $aConfig = array(

    );
	$aGetIndexList = array(
		'strSta' => 
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>www.xmsmjk.com数据抓取</title>
	<base href="http://www.xmsmjk.com/" />
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.iframe-left {
			width: 40%;
			position: inherit;
			left: 0;
			top: 0;
			bottom: 0;
			overflow: scroll;
		}
		.iframe-right {
			width: 50%;
			position: inherit;
			left: 50%;
			top: 0;
			bottom: 0;
		}
		.i_handler_vertical {
			z-index: 10000;
			background:#000;
			width: 8px;
			height: 100%;
			padding: 5px 0;
			cursor: col-resize;
			position: absolute;
			/*background: url(/img/handle-v.png) 3px 50% no-repeat;*/
		}
		.i_handler_vertical .control {
			position: absolute;
			top: 40%;
			color: #fff;
			background-color: #f00;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div style="position:absolute;width:100%;bottom:0;top:0;">
		<div id="iframeLeft" class="iframe-left" style="">
			<?php 
				$url = "http://www.xmsmjk.com/UrpOnline/Home/Index/7_____1";
				$contents = file_get_contents($url);
				//如果出现中文乱码使用下面代码
				//$getcontent = iconv("gb2312", "utf-8",$contents);
				echo $contents;
			?>
		</div>
		<div id="handler-vertical" class="i_handler_vertical" style="left:40%;">
			<div id="control" class="control"><</div>
		</div>
		<div id="iframeRight" class="iframe-right" style="">
			<?php 
				/*
					strSta: '/UrpOnline/Home/Index/67_____',
                    orgId: '67',
                    deptCode: '',
                    sex: '0',
                    date: '',
                    page: '1',
                    orderType: '1',
                    orgType: '1'
				 */
				$postGetIndexList = array(
					'strSta' => '/UrpOnline/Home/Index/7_____',
					'orgId' => '7',
					'deptCode' => '',
					'sex' => '0',
					'date' => '',
					'page' => '1',
					'orderType' => '1',
					'orgType' => '1'
				);
				echo httpPost("http://www.xmsmjk.com/UrpOnline/Home/GetIndexList", $postGetIndexList);
			?>
		</div>
	</div>
	<style type="text/css">
		/* www.xmsmjk.com 样式 start */
		.pos {
			position: absolute !important;
		}
		/* www.xmsmjk.com 样式 end */
	</style>
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
			var $control = $("#control");
			$("#control").on("click", function() {
				$("#handler-vertical").css({"left": "5%"});
				$("#iframeLeft").css({"width": "5%"});
				$("#iframeRight").css({"left": "5%", "width": "85%"});
				window.location.hash = "left";
			});
			console.log(window.location.hash);
			if ( window.location.hash == "#left" ) {
				$control.trigger("click");
			}
		});
	</script>
</body>
</html>