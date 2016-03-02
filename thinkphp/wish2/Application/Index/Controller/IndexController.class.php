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
        $username = I('username');
        $data = array(
            'username' => I('username'),
            'content' => I('content'),
            'time' => time()
        );
        if ($id = M('wish')->data($data)->add()) {
            $data['id'] = $id;
            $data['username'] = $username;
            $data['content'] = replace_phiz($data['content']);
            $data['time'] = date('y-m-d H:i', $data['time']);
            $data['status'] = 1;
            $this->ajaxReturn($data, 'json');
        } else {
            //echo json_encode(array('status' => 0));
            $this->ajaxReturn(array('status' => 0), 'json');
        }
        //replace_phiz($data['content']);
        // $phiz = array(
        //     'zhuakuang' => '抓狂',
        //     'baobao' => '抱抱',
        //     'haixiu' => '害羞',
        //     'ku' => '酷',
        //     'xixi' => '嘻嘻',
        //     'taikaixin' => '太开心',
        //     'touxiao' => '偷笑',
        //     'qian' => '钱',
        //     'huaxin' => '花心',
        //     'jiyan' => '挤眼'
        // );
        /*$str = "<?php return " . var_export($phiz, true) . ";?>";
        p($str);
        file_put_contents('./data/phiz.php', $str);*/
        //$phiz = include './data/phiz.php';
        //F('phiz', $phiz, './Data/');
        // $phiz = F('phiz', '', './Data/');
        // p($phiz);
        //echo json_encode($_POST);
    	//p($_POST);
    	// echo "aaaaaaaaaaaaaa";
    	// p(I("username"));
    }
}