<?php
	class indexAction extends Common {
		function index(){
			$this->display();
		}		
		
		function top(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function menu(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function main(){
			$this->mess("欢迎使用HIT-shop后台管理系统！",1);
			$this->display();
		}
		function bottom(){
			debug(0);  //临时关闭调试模式
			//对文章管理权限才输出
			if($_SESSION["colunmadmin"]) {

			}

			//对网站编辑的权限才输出
			if($_SESSION["configadmin"]) {

			}
            if($_SESSION["goodadmin"]) {
				$this->assign("goods", D("goods")->total());
			}
			//有对用户管理的权限才输出
			if($_SESSION["useradmin"]) {
				$this->assign("users", D("user")->total());
			}
			$this->display();
		}
        
	}