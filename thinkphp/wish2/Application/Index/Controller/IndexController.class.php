<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index () {
        $this->display();
    }
    public function handle () {
    	//var_dump(IS_AJAX);
    	if (!IS_AJAX) $this->error('页面不存在', U('index'));
    	p($_POST);
    	// echo "aaaaaaaaaaaaaa";
    	// p(I("username"));
    }
}