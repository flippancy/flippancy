<?php
namespace Admin\Model;
use Think\Model;
class FileModel extends Model {
	protected $_validate = array(
		array('loginname','','账户名已经存在',0,'unique',1),
    );
    
    protected $_auto = array (
		array('pass','md5',3,'function'),
	);

    public function index(){
    	$this->show("123");
    }

    public function addfile($data){
        if($this->create($data)){
            if(!$this->data($data)->add()) return -1;
    	} else{
    		return $this->getError();
    	}
    	return 1;
    }

    public function editfile($UID,$data){
    //     if($username = $data['username']){ 
    //         $newdata['username'] = $username;
    //     } if($power = $data['power']){
    //         $newdata['power'] = get_usertype($power);
    //     } if($data['oldpassword'] && $data['newpassword']){
    //         $map['user_id'] = $UID;
    //         $map['password'] = md5($data['oldpassword']);
    //         if($this->where($map)->select()){
    //             $newdata['password'] = md5($data['newpassword']);
    //         }
    //     }
    //     if($this->create($newdata)){
    //         if(!$this->where('user_id='.$UID)->data($newdata)->save()){
    //             return false;
    //         }
    //     }else{
    //         return $this->getError();
    //     }
    //     return true;
    }
}