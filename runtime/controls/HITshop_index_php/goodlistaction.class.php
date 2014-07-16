<?php
	class goodlistAction extends Common {
		//查询
		function index() {
			
			

			$this->display(); 
		}
		function find(){
			switch ($_GET["serType"]){
				case "good":
						$this->findgood();
					break;
				case "user":
						$this->finduser();
					break;	
				case "class":
						$this->findclass();
					break;
			
			}
		
		}
		function findgood(){
			$this->assign('message','您查找的 '.$_GET["search"].' 结果为：');
			$this->assign('search',$_GET["search"]);
			$this->assign('serType', "good");
			
			$this->display("findgood");
		}	
		function finduser(){
			$this->assign('message','您查找的 '.$_GET["search"].' 结果为：');
			$this->assign('search',$_GET["search"]);
			$this->assign('serType', "user");
			$this->display("finduser");
		}	
		function findclass(){
			$this->assign('serType', "class");
			$this->assign('search',$_GET["search"]);
			$this->assign('message','您查找的 '.$_GET["search"].' 结果为：');
			$this->assign('classshow',D('cat')->classshow($_GET["search"]));
			$this->display("findclass");
		}
		//此类用于非搜索的类展示，也调用fgpage（）的方法进行ajax分页，只不过上面的显示不一样
		function showclass(){
			$this->assign('message',D("cat")->namestring($_GET["id"]));
			$this->assign('id',$_GET["id"]);
			//$this->assign('classid',$_GET["id"]);
			$this->display();
		}
		function show() {

		

			$this->display(); 
		}
		
		function fgpage() {
			debug();
			$goods = D('goods');
			$page = new AjaxPage($goods->where(array('name'=>'%'.$_GET["search"].'%'))->total(), LIST_GOODS_NUM,"search/".$_GET["search"]);
			
			$this->assign('goods', $goods->where(array('name'=>'%'.$_GET["search"].'%'))->limit($page->limit)->select());
			
			$this->assign('fpage', $page->fpage());	

			$this->display();
		}
		function fcpage() {
			debug();
			$cat=D("cat");
			$goods = D('goods');
			$inc_cat_id=$cat->field("id")->where(array('name'=>'%'.$_GET["search"].'%'))->select();
			
			foreach($inc_cat_id as $_inc_cat_id){
				//p($_inc_cat_id);
				$inccatids[]=$cat->field("id")->where(array('path'=>'%'.$_inc_cat_id["id"].'%'))->select();
			}
			foreach($inccatids as $ids){
				foreach($ids as $id){
					$cat_and_chi[]=$id["id"];
				}
			}
			$page = new AjaxPage($goods->where(array('cid'=>$cat_and_chi))->total(), LIST_GOODS_NUM,"search/".$_GET["search"]);
			
			$this->assign('goods', $goods->where(array('cid'=>$cat_and_chi))->limit($page->limit)->select());
			
			$this->assign('fpage', $page->fpage());	

			$this->display();
		} 
		function fupage() {
			debug();
			
			$user = D('user')->field('id,username')->where(array('username'=>'%'.$_GET["search"].'%'))->find();
			if(!$user){
				echo "您查找的名字类似 ".$_GET["search"]." 的用户不存在！";
				return;
			}
			
			$this->assign('username',$user['username']);
			
			//查找这个用户卖的东西
			$goods = D('goods');
			
			$page = new AjaxPage($goods->where(array('ownerid'=>$user['id']))->total(), LIST_GOODS_NUM,"search/".$_GET["search"]);
			
			$this->assign('goods', $goods->where(array('ownerid'=>$user['id']))->limit($page->limit)->select());
			
			$this->assign('fpage', $page->fpage());	

			$this->display();
		} 
		function fspage() {
			//debug();
			$cat=D("cat");
			$goods = D('goods');
			$path='%'.$_GET["id"].'%';
			//p($path);
			$inccatids=$cat->field("id")->where(array('path'=>'%'.$_GET["id"].'%'), array('id' =>$_GET["id"]  ))->select();
			//p($inccatids);
			foreach($inccatids as $ids){
					$cat_and_chi[]=$ids["id"];
			
			}
			$page = new AjaxPage($goods->where(array('cid'=>$cat_and_chi))->total(), LIST_GOODS_NUM,"id/".$_GET["id"]);
			
			$this->assign('goods', $goods->where(array('cid'=>$cat_and_chi))->limit($page->limit)->select());
			
			$this->assign('fpage', $page->fpage());	
			$this->assign('id', $_GET["id"]);	

			$this->display();
		} 
	}
