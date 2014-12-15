<?php
namespace Admin\Model;
use Think\Model;
class PersonModel extends Model {
	protected $_validate = array(
    );

    public function index(){
    	$this->show("123");
    }

}