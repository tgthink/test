<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }
    public function login () {
        if (!IS_POST) $this->error('页面不存在', U('Login/index'));
        // echo $_SESSION["verify"];
        // echo "<br/>";
        // echo "======================";
        // echo "<br/>";
        // p($_POST['code']);
        //echo I('code', '', 'md5');
        //echo I('code');
        if ( !check_verify(I('code')) ) {
            $this->error('验证码错误！');
        }
        $username = I('username');
        $pwd = I('password', '', 'md5');
        $user = M('t_user')->where(array('user_name' => $username))->find();
        p($user);
        if ( !$user || $user['password'] != $pwd ) {
            $this->error('账号或密码错误');
        }

        if ($user['lock']) $this->error('用户被锁定');
    }
    public function verify () {
    	$config =    array(
		    'fontSize'	=> 30,    // 验证码字体大小
		    'length'	=> 2,     // 验证码位数
		    'useNoise'	=> false, // 关闭验证码杂点
		);
    	$Verify = new \Think\Verify($config);
        $Verify->codeSet = '0123456789';
    	$Verify->entry();

    	// import('ORG.Util.Image');
    	// Image::buildImageVerify(4, 5, 'png', 80, 25);
    }
}