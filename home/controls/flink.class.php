<?php
	class flink {

		function add(){
		
			$this->display();
		}
		function insert(){
			$flink=D("flink");
			$data=$_POST;
			$data["dtime"]=time();
			$logo=$flink->downlogo($_POST["logo"]);
			if($logo){
				$data["logo"]=$logo;
				if($flink->insert($data,1,1)){
					$this->success("友情链接 <b>{$_POST["webname"]}</b> 添加成功，可以继续添加！");		
				}else{
					$this->error($flink->getMsg());
					$this->assign("post", $_POST);
				}
			}else{
				$this->error("LOGO下载失败，请查看网络连接或LOGO地址是否正确！");
				$this->assign("post", $_POST);
			}
			$this->display("add");
		}
	
	
	
	
	}