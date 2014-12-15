<?php
function check_login(){
	if(!isset($_SESSION[C("USER_AUTH_KEY")])) {
		redirect("Index/login/",2,"你还没登录或登录信息已过期，请重新登录");
	}
}
function deldir($dir){
  //先删除目录下的文件：
  	$dh=opendir($dir);
  	$file=readdir($dh);
  	$file=readdir($dh);
  	$file=readdir($dh);
    if(!$file) {
    	closedir($dh);
  		//删除当前文件夹：
  		if(rmdir($dir)) {
   			return true;
   		}
  	} else {
 	  	return false;
 	}
}
?>