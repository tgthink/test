<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //echo 'Hello Lijie!';
        //$db = D('task_item');


  //       header("Content-Type:text/html;charset=utf-8");
  //       echo C('username');
  //       $User = M("task_item"); // 实例化User对象
		// // 查找status值为1name值为think的用户数据 
		// $data = $User->find();
		// dump($data);
        //header("Content-Type:text/html;charset=utf-8");
        //echo '前台应用的首页';
        //load('@.common');
        //p($_SERVER);
        // dump($_SERVER);
        // echo "===========================<br/>";
        // echo '<pre>';
        // print_r($_SERVER);
        //echo __ROOT__;
        $this->display();
    }
    public function add(){
        echo 'add!';
    }
}