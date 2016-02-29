<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// header("Content-Type:text/html;charset=utf-8");
// echo '<pre>';
// print_r($_GET);
// $control = isset($_GET['c']) ? $_GET['c'] : 'Index';
// $action = isset($_GET['a']) ? $_GET['a'] : 'index';
// $obj = new $control();
// $obj->$action();
// /**
// * 
// */
// class Index {
// 	function __construct () {
// 		echo "实例化";
// 	}
// 	function index () {
// 		echo 'This is index<br/>';
// 	}
// 	function handle () {
// 		echo 'This is handle';
// 	}
// }
// /**
// * 
// */
// class Show {
	
// }
// die();

// 应用入口文件
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
define('APP_NAME', 'Application/Home');
// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单