<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {
    public function index(){
        $News  = M('News');
        $news = $News->select(); 
        $this->assign('list' ,$news);
        $this->display();
    }


    public function add(){
        $News = M('News');
        if(IS_POST){
            $news['title']    = $_POST['title'];
            $news['date']     = $_POST['date'];
            $news['content']  = $_POST['content'];
            $length = strlen($news['content']);
            for($length; $length < 120; $length++)
                $news['content'] = $news['content'] . " ";
            }

            if(false === ($news = $News->create($news))){
                    $this->error("创建News对象错误！",'index');
                }
                else{
                    $id = $News->add($news);
                    if($id != null && $id != false){
                        $this->success("新闻生成成功！",'index');
                    }
                    else{
                        $this->error("新闻生成失败！",'index');
                    }
                }
            }



    public function upload(){
        $News = M('News');
        if ($_GET['id'] == NULL) {
            $this->error("没有找到该ID！",'index');
        }
        $id = $_GET['id'];

        $news = $News->where(array('id' => $id))->find();
        if($news != null && $news != false){
            $this->assign('news' ,$news);
            $this->display();
        }
        else{
            $this->error("没有找到该新闻信息！",'index');
        }
    }

    public function handle(){
        $News = M('News');
        $news = $_POST;
        var_dump($news['image-text']);
        p($news);die;
    }

    public function delete(){
        $News = M('News');
        if ($_GET['id'] == NULL) {
            $this->error("没有找到该ID！",'index');
        }
        $id = $_GET['id'];

        $news = $News->where(array('id' => $id))->find();
        if($news != null && $news != false){
            $reslut = $News->delete($id);
            if(false === $reslut){
                $this->error("删除失败！",'index');
            }
            else{
                $this->success("删除成功！", 'index');
            }
        }
        else{
            $this->error("没有找到该新闻信息！",'index');
        }
    }
}