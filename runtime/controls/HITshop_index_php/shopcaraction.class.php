<?php
	class shopcarAction extends Common {
		function index(){
			//判断是否登录；
			islogin($this);
			//获取购物车里的商品信息；
			$car=D("car");
			$goods=$car->getgoods($_SESSION["uid"]);
			
			//获取总价；
			$sum=0;
			foreach($goods as $good){
				$sum+=$good["sprice"];
			}
			$this->assign("goods",$goods);
			
			$this->assign("sum",$sum);
			//
			
			$this->display();		
		}
		function insert(){
		
			islogin($this);
			
			$shopcar=D("car");
			$data=$_POST;
			
			/* if($_POST["goodowner"]==$_SESSION["id"]){
					$this->error("不能购买自己的商品哦！");
			} */
			
			$data["dtime"]=time();
			
			$data["uid"]=$_SESSION["uid"];
			

				if($shopcar->insert($data,1,1)){
					$this->success("商品 <b>{$_POST["goodname"]}</b> 已放入购物车喽！");		
				}else{
					$this->error("商品 <b>{$_POST["goodname"]}</b> 添加失败！");

				}
		
			$this->display("index");
		
		}
		function del(){
			$shopcar=D("car");
			
			if( $shopcar->delete($_GET["id"]) ){
				$this->redirect("index");
			}else{
				$this->error("商品删除失败！", 3, "index");
			}
		}
	}