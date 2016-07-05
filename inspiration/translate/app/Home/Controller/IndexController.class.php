<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index () {
    	//echo "11111111111111111111111";
        $name = 'ThinkPHP';
		$this->assign('name',$name);
		$this->display();
    }
  //   public function index2 () {
		// $this->display();
  //   }
    public function pages () {
		$url = $_SERVER['PHP_SELF'];
		//截取文件名称
		$name = substr($url ,strrpos($url ,'/')+1, -5 );
//echo $name;
		$this->display("index/pages/examples/".$name);
    }
}