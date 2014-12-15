<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index() {

        //取出人物
        $person = M('Person')->limit(3)->select();
        for($i = 0; 3 > $i; $i++) {
            $person[$i]['content'] = substr($person[$i]['content'],0,204)."...";
        }
        $this->assign('person' ,$person);

        //取出新闻
        $news = M('News')->order('date desc')->limit(6)->select();
        for($i = 0; 6 > $i; $i++) {
            $news[$i]['content'] = $news[$i]['content']."...";
            // $news[$i]['content'] = str_pad($news[$i]['content'], 300,"\t");
        }
        $this->assign('news' ,$news);
	    $this->display();
    }
}