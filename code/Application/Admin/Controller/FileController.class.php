<?php
namespace Admin\Controller;
use Think\Controller;
class FileController extends CommonController {
    public function index(){
    	$data = M('File')->select();
    	$this->assign('list',$data);
    	$this->display();
    }

    public function select(){
      $name = I('post');
      var_dump($name);
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
   		$this->redirect('File/index');
   	}
   	}
   	public function download(){
   		$filename = $_GET['filename'];
   		$password = md5(I('post.password'));
   		$map['filename'] = $filename;
   		$filepath = M('File')->where($map)->field('pass,path,author')->select();
   		if($filepath['0']['pass'] == $password){
   			$path = __ROOT__.'/Uploads/'.$filepath['0']['path'].$filepath['0']['author'].'.zip';
        if(!file_exists($path)){
          $path = __ROOT__.'/Uploads/'.$filepath['0']['path'].$filepath['0']['author'].'.rar';
        }
   			redirect($path);
   		}else{
   			$this->error('文件密码错误');
   		}
   	}
   	public function delete(){
   		$filename = $_GET['filename'];
   		$map['filename'] = $filename;
   		$filepath = M('File')->where($map)->field('path,author')->select();
   		$name1 = './Uploads/'.$filepath['0']['path'].$filename.'.zip';
      $name2 = './Uploads/'.$filepath['0']['path'].$filename.'.rar';
      var_dump($name);
   		if(M('File')->delete($filename)){
   			if(unlink($name1) || unlink($name2)){
            	deldir('./Uploads/'.$filepath['0']['path']);
            	deldir('./Uploads/'.$filepath['0']['author']);
            	$this->success('删除成功');
            }
            else $this->error('删除失败1');
        } else{
            $this->error('删除失败2');
        }
        $this->redirect('File/index');
   	}
}