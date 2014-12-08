<?php
return array(

	    //数据库配置信息
    'DB_TYPE'    => 'mysql', // 数据库类型
    'DB_HOST'    => '127.0.0.1', // 服务器地址
    'DB_NAME'    => 'ma', // 数据库名
    'DB_USER'    => 'root', // 用户名
    'DB_PWD'     => 'flippancy', // 密码
    'DB_PORT'    => 3306, // 端口
    'DB_PREFIX'  => 'ma_', // 数据库表前缀
    'DB_CHARSET' => 'utf8', // 字符集
    'DB_BACKUP'  => './Data/Backup/',

    'DEFAULT_THEME'    =>    'default',  // 模板主题

    'TMPL_PARSE_STRING' =>array(
		'__PUBLIC__'  => __ROOT__.'/Public',
		'__HJS__'     => __ROOT__.'/Public/Home/js',
		'__HCSS__'    => __ROOT__.'/Public/Home/css',
		'__HIMG__'    => __ROOT__.'/Public/Home/images',
		'__AJS__'     => __ROOT__.'/Public/Admin/js',
		'__ACSS__'    => __ROOT__.'/Public/Admin/css',
		'__AIMG__'    => __ROOT__.'/Public/Admin/image',
        '__UPLOADS__' => __ROOT__.'/Uploads',
	),
);
?>