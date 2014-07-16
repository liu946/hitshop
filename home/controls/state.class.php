<?php
	class state {
		function index(){
			//获取商品信息
			if(!$_GET["id"])$this->error("没有选择商品");
			$car=D("car")->find($_GET["id"]);
			

			
			
			$this->display();
			
		}
		
		
		
	}