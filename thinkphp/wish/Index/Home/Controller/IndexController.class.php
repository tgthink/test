<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($name='thinkphp'){
        echo C("username");
        say();
    	//echo $name.'<br/>';p($_GET);die;
    	//echo U('Index/index');die;
    	//echo 'aaaa';
    	//U('show', array('uid' => 1), '', 1);
    	//$this->success('操作完成', 'show', 100);
		//header("Content-type:text/html;charset=utf-8");
    	//重定向到New模块的Category操作
		// $this->redirect('show', array('uid' => 1), 3, '页面跳转中...');
  //   	die;
    	// header("Content-type:text/html;charset=utf-8");
    	$wish = M('wish')->select();
    	// p($wish);
    	// $this->assign("a", 111111);
    	// $this->a = 1111;
    	//$this->display();
    	$this->assign('wish', M('wish')->select())->display();
    }
    public function show() {
    	echo I('uid');
    }
    /**
     * 表单处理
     */
    public function handle () {
    	if (!IS_POST) $this->error('页面不存在', U('index'));
    	//var_dump(IS_POST);
    	header("Content-type:text/html;charset=utf-8");
    	//p($_POST);
    	// $data = $array(
    	// 	'username'=>I('username'),
    	// 	'content'=>I('content'),
    	// 	'time'=>time()
    	// );
    	$data = array(
    		'username'=>I('username'),
    		'content'=>I('content'),
    		'time'=>time()
    	);
    	// $result = M('wish')->where(array('id' => array('gt', 0)))->delete();
    	// var_dump($result);

    	// $id = M('wish')->data($data)->add();
    	// echo $id;
    	// P(I('post.'));
    	//echo $this->_post('username');
    	//echo I('username');

    	if (M('wish')->data($data)->add()) {
    		$this->success('发布成功', 'index');
    	} else {
    		$this->error('发布失败，请重试...');
    	}
    }
}