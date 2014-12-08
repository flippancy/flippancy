<?php
namespace Admin\Controller;
use Think\Controller;
class FileController extends Controller {
    public function index(){
    	$data = M('File')->select();
    	$this->show('asdsadsa');
    	$this->assign('list',$data);
    	$this->display();
    }
   	public function upload(){
   	if(IS_POST){ 
   		$name = I('post.name');
   		$author = I('post.author');
   		$name = iconv("utf-8","gb2312",$name);
   		$upload = new \Think\Upload();// 实例化上传类    
   		$upload->maxSize = 0 ;// 设置附件上传大小
   		$upload->exts = array('rar', 'zip');// 设置附件上传类型    
   		$upload->savePath = $author.'/'; // 设置附件上传目录\
   		$upload->saveName = $name; // 设置附件上传目录    
   		$info = $upload->upload();    // 上传文件   
   		if(!$info) {// 上传错误提示错误信息        
   			$this->error($upload->getError());    
   		}
   		else{// 上传成功       
   			foreach ($info as $file) {
   			$File = D('File');
	    	$data['filename'] = I('post.name');
	    	$data['size'] = $file['size'];
	    	$data['path'] = $file['savepath'];
	    	$data['pass'] = md5(I('post.password'));
	    	$data['time'] = date('Y-m-d H:i:s');
	    	$data['author'] = I('post.author');
	    	$data['instruction'] = I('post.instruction');
	    	$flag = $File->addfile($data);
    		if($flag==1){
    			$this->success('添加成功');
    		} else if($flag==0){
    			$this->error('添加失败');
    		}else{
    			$this->show($flag);
    		}
    		}   
   		}
   	}
   	}
   	public function download(){
   		$filename = $_GET['filename'];
   		var_dump($filename);
   		$this->show('download');
   	}
   	public function delete(){
   		$filename = $_GET['filename'];
   		$map['filename'] = $filename;
   		$filepath = M('File')->where($map)->field('path')->select();
   		var_dump($filepath);
   		if(M('File')->delete($filename)){
   			if(deldir($filepath)){
            	$this->success('删除成功');
            }
            $this->error('删除失败mmmmm');
        } else{
            $this->error('删除失败');
        }
        // $this->redirect('File/index');
   	}
}