<?php
$config = array(
	//'配置项'=>'配置值'
	'username' => 'firebbb',
	// 'TMPL_PARSE_STRING' => array(
	// 	'__PUBLIC__' => __ROOT__ . '/' . APP_NAME . '/Public',
	// ),
	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'120.25.153.179',// 服务器地址
	'DB_NAME'=>'xiaosuDB',// 数据库名
	'DB_USER'=>'root',// 用户名
	'DB_PWD'=>'840f6527d7',// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'',// 数据库表前缀
	'DB_CHARSET'=>'utf8'// 数据库字符集
);

return array_merge(include './Conf/config.php', $config);