<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel {
	protected $_validate = array(
		array('loginname','','账户名已经存在',0,'unique',1),
    );
    
    protected $_auto = array (
		array('password','md5',3,'function'),
	);

    public function index(){
    	$this->show("123");
    }

    public function addUser($data){
        if($this->create($data)){
            if(!$this->data($data)->add()){
                return -1;
            }else{
                if($data['power']==0){
                    $supmt = C('SUPERUSER_PERMITSSION');
                }if($data['power']==1){
                    $supmt = C('STORE_PERMITSSION');
                }
                $supmt['user_id'] = $this->where('loginname='."'".$data['loginname']."'")->getField('user_id');
            }
    	} else{
    		return $this->getError();
    	}
    	return 1;
    }

    public function editUser($UID,$data){
        if($username = $data['username']){ 
            $newdata['username'] = $username;
        } if($power = $data['power']){
            $newdata['power'] = get_usertype($power);
        } if($data['oldpassword'] && $data['newpassword']){
            $map['user_id'] = $UID;
            $map['password'] = md5($data['oldpassword']);
            if($this->where($map)->select()){
                $newdata['password'] = md5($data['newpassword']);
            }
        }
        if($this->create($newdata)){
            if(!$this->where('user_id='.$UID)->data($newdata)->save()){
                return false;
            }
        }else{
            return $this->getError();
        }
        return true;
    }
}