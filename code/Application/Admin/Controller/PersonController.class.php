<?php
namespace Admin\Controller;
use Think\Controller;
class PersonController extends CommonController {
    public function index(){
        $Person  = M('Person');
        $persons = $Person->select(); 
        $this->assign('list' ,$persons);
        $this->display();
    }


    public function add(){
        $Person = M('Person');
        if(IS_POST){
            $person['name']    = $_POST['name'];
            $person['age']     = $_POST['age'];
            $person['sex']     = $_POST['sex'];
            $person['college'] = $_POST['college'];

            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->savePath  = './Person/'; // 设置附件上传目录 
            $upload->saveName  = $person['name']; // 设置附件上传目录 
            $info = $upload->upload();    // 上传文件 

            $person['img_path'] = __ROOT__.'/Uploads/'.$info[tx]['savepath'].$info[tx]['savename'];
            if(false === ($person = $Person->create($person))){
                    $this->error("创建Person对象错误！",'index');
                }
                else{
                    $id = $Person->add($person);
                    if($id != null && $id != false){
                        $this->success("人物生成成功！",'index');
                    }
                    else{
                        $this->error("人物生成失败！",'index');
                    }
                }
            }
        }


    public function upload(){
        $Person = M('Person');
        if ($_GET['id'] == NULL) {
            $this->error("没有找到该ID！",'index');
        }
        $id = $_GET['id'];

        $person = $Person->where(array('id' => $id))->find();
        if($person != null && $person != false){
            $this->assign('person' ,$person);
            $this->display();
        }
        else{
            $this->error("没有找到该人物信息！",'index');
        }
    }

    public function handle(){
        $Person = M('Person');
        $data = $_POST;

            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->savePath  = './Person/'; // 设置附件上传目录 
            $upload->saveName  = $person['name']; // 设置附件上传目录 
            $info = $upload->upload();    // 上传文件 
            $data['img_path'] = __ROOT__.'/Uploads/'.$info[tx]['savepath'].$info[tx]['savename'];

        //删除之前的图片
        // $map['name'] = $data['name'];
        // $fix = $Person->where($map)->select();
        // var_dump($fix);
        // if(!unlink($fix['img_path'])){
        //     $this->error("图片删除失败");
        // }

        $reslut = $Person->where($map)->save($data);
        if($reslut == true){
        	$this->success("修改成功",'index');
        }else{
        	$this->error("修改失败",'index');
        }
        // p($data);die;
    }

    public function delete(){
        $Person = M('Person');
        if ($_GET['id'] == NULL) {
            $this->error("没有找到该ID！",'index');
        }
        $id = $_GET['id'];

        $person = $Person->where(array('id' => $id))->find();
        if($person != null && $person != false){
            $reslut = $Person->delete($id);
            if(false === $reslut){
                $this->error("删除失败！",'index');
            }
            else{
                $this->success("删除成功！", 'index');
            }
        }
        else{
            $this->error("没有找到该人物信息！",'index');
        }
    }
}