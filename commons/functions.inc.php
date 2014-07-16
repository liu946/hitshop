<?php
	//全局可以使用的通用函数声明在这个文件中.
	//检查登录，传入$this
	function islogin($m){
		if($_SESSION["uid"] && $_SESSION["login"]){
			return;
		}else{
			$m->error("请先登录");
		
		}
		
	}
    //删除目录下所有文件和子目录
	function deldir($directory){
		if(is_dir($directory)) {      
			if($dir_handle=@opendir($directory)) {	
				while(false!==($filename=readdir($dir_handle))) {  
					$file=$directory."/".$filename;
					if($filename!="." && $filename!="..") {   
						if(is_dir($file)) {
							deldir($file);
						} else {
							unlink($file);
						}           
					}
				}
				closedir($dir_handle);                      
				                     
			}
			rmdir($directory);     
		}
	}