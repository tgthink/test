<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>HouDun许愿墙</title>
	<link rel="stylesheet" href="/test/thinkphp/wish/Public/Css/index.css" />
	<script type="text/javascript" src='/test/thinkphp/wish/Public/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='/test/thinkphp/wish/Public/Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>
		<?php if(is_array($wish)): foreach($wish as $key=>$v): ?><dl class='paper a<?php echo mt_rand(1, 5);?>'>
				<dt>
					<span class='username'><?php echo ($v["username"]); ?></span>
					<span class='num'>No.<?php echo ($v["id"]); ?></span>
				</dt>
				<dd class='content'><?php echo ($v["content"]); ?></dd>
				<dd class='bottom'>
					<span class='time'>今天<?php echo (date('Y-m-d H:i', $v["time"])); ?></span>
					<a href="" class='close'></a>
				</dd>
			</dl><?php endforeach; endif; ?>
		<!--dl class='paper a2'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a3'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a4'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a5'>
			<dt>
				<span class='username'>后盾网</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl-->
	</div>

	<div id='send-form'>
		<p class='title'><span>许下你的愿望</span><a href="" id='close'></a></p>
		<form action="<?php echo U('handle');?>" name='wish' method="post">
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='username' id='username'/>
			</p>
			<p>
				<label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
				<div id='phiz'>
					<img src="/test/thinkphp/wish/Public/Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/baobao.gif" alt="抱抱" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/haixiu.gif" alt="害羞" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/ku.gif" alt="酷" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/qian.gif" alt="钱" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/huaxin.gif" alt="花心" />
					<img src="/test/thinkphp/wish/Public/Images/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<!--span id='send-btn'></span-->
			<input type="submit" />
		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="/test/thinkphp/wish/Public/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>