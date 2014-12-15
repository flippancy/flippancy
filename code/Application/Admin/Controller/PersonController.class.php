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
        var_dump($data);
        $map['name'] = $data['name'];
        $reslut = $Person->where($map)->save($data);
        if($reslut === true){
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