<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index () {
  		$this->display();
    }
    public function newspaper_content () {
      $getid = $_GET["id"];
      // $arr = C("TMPL_PARSE_STRING");
      // echo $arr['__PUBLIC__'];
      $filename = './public/data_newspaper_list.json';//文件相对路径
      $json_string = file_get_contents($filename);//读取json内容
      $json_obj = json_decode($json_string);
      //$json_obj->list;
      // echo print_r($json_obj->list, true);
      //echo print_r($json_string, true); //打印json内容
      $currentNewspaper;
      foreach ($json_obj->list as $item) {
        //模拟数据库检索对应文章
        if ( $item->id == $getid ) {
          $currentNewspaper = $item;
          // $item
          // $currentNewspaper->content = "aaaaaaaaaaaaaaaaaaaa";
          // echo print_r($currentItem);
          break;
        }
      }
      $this->assign('id', $getid);
      $this->assign('currentNewspaper', $currentNewspaper);
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