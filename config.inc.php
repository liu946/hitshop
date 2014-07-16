<?php
	define("DEBUG", 0);				      //开启调试模式 1 开启 0 关闭
	define("DRIVER","pdo");				      //数据库的驱动，本系统支持pdo(默认)和mysqli两种
	//define("DSN", "mysql:host=localhost;dbname=brophp"); //如果使用PDO可以使用，不使用则默认连接MySQL
	define("HOST", "localhost");			      //数据库主机
	define("USER", "root");                               //数据库用户名
	define("PASS", "");                                   //数据库密码
	define("DBNAME","HITshop");			      //数据库名
	define("TABPREFIX", "hitshop_");                           //数据表前缀
	define("CSTART", 0);                                  //缓存开关 1开启，0为关闭
	define("CTIME", 60*60*24*7);                          //缓存时间
	define("TPLPREFIX", "tpl");                           //模板文件的后缀名
	
	//$memServers = array("localhost", 11211);	     //使用memcache服务器
	/*
	如果有多台memcache服务器可以使用二维数组
	$memServers = array(
			array("www.hitshop.net", '11211'),
			array("www.hitshop.com", '11211'),
			...
		);
	*/
	define("APP_NAME", "HITshop");
	define("KEYWORD", "cloth,shoes,......");
	define("DESCRIPTION", "这里是描述");//保存一份到：D:\xampp\htdocs\HITshop\public\js\ckeditor\plugins\image\dialogs
	//成交量权重（相对点击量）
	define("CJNUM_WEIGHT", "5");
	//主页分类商品显示数目
	define("INDEX_GOODS_NUM", "5");
	//主页分类商品显示数目
	define("LIST_GOODS_NUM", "8");
	define("LIST_USER_NUM","8");
	//商品附件存放路径
	define("GOOD_PATH", "./upfile/goods/");
	define("IMG_ALLOW_TYPE", "gif,png,jpg,jpeg");
	define("SIMG_ALLOW_SIZE", "1000000");
	define("BIMG_ALLOW_SIZE", "5000000");
	define("SIMG_THUMB_SIZE_W", "300");
	define("SIMG_THUMB_SIZE_H", "300");	
	define("BIMG_THUMB_SIZE_W", "800");
	define("BIMG_THUMB_SIZE_H", "800");
	define("IMG_RANDNAME", "1");
	define("USER_CONFIRM",1);