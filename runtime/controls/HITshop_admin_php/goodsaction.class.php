<?php
    class GoodsAction extends Common {
        function index(){
            $good=D("goods");
            $this->mess('此处用于管理员确认商品的合法性，允许商品的发布。<a href="'.B_URL.'/index/state/0" style="background:#EECCCC;">深色记录</a>为未确认商品.<br> 商品被删除时,图片等所有信息也会一同删除. ');
			$arr=$_GET;
            if($arr["state"] == "0") {
				$where=array("state"=>1);
				$this->assign("state", 1);
				$pget="state/1";  //分页条件
            }
            $page=new Page($good->total(
            $where
            ), LIST_GOODS_NUM, $pget);
			$goods=$good->field("id,cid,name,simg,price,ownerid,num,fbtime,state")
				    ->limit($page->limit)
                                    ->where($where)
				    ->select();
            for($i=0;$i<count($goods);$i++){
                
                $goods[$i]["fbtime"]=date("Y-m-d",$goods[$i]["fbtime"]);
            }
            $this->assign("goods",$goods);
            $this->assign("search", $search);
			$this->assign("fpage", $page->fpage(0,3,2,4,5,6));
			$this->assign("page", $page->page);
            $this->display();	
        }
        function confirm(){
            if(!empty($_POST)){
				$id=$_POST["id"];
				
			}else{
				$id=$_GET["id"];
			}
            $good=D("goods");
            if($good->where($id)->update(array("state"=>"1")))
            {
                    $page=new Page($good->total(
                    $where
                    ), LIST_GOODS_NUM, $pget);
			        $goods=$good->field("id,cid,name,simg,price,ownerid,num,fbtime,state")
				            ->limit($page->limit)
                                            ->where($where)
				            ->select();
                    for($i=0;$i<count($goods);$i++){
                
                        $goods[$i]["fbtime"]=date("Y-m-d",$goods[$i]["fbtime"]);
                    }
                    $this->assign("goods",$goods);
                    $this->assign("search", $search);
			        $this->assign("fpage", $page->fpage(0,3,2,4,5,6));
			        $this->assign("page", $page->page);
                    $this->mess("上架成功！",TRUE);
                 $this->display("index");	
            }else{
                $this->error("修改失败");
            }
	    }
        function unconfirm(){
            if(!empty($_POST)){
				$id=$_POST["id"];
				
			}else{
				$id=$_GET["id"];
			}
            $good=D("goods");
            if($good->where($id)->update(array("state"=>"0")))
            {
                   $page=new Page($good->total(
                    $where
                    ), LIST_GOODS_NUM, $pget);
			        $goods=$good->field("id,cid,name,simg,price,ownerid,num,fbtime,state")
				            ->limit($page->limit)
                                            ->where($where)
				            ->select();
                    for($i=0;$i<count($goods);$i++){
                
                        $goods[$i]["fbtime"]=date("Y-m-d",$goods[$i]["fbtime"]);
                    }
                    $this->assign("goods",$goods);
                    $this->assign("search", $search);
			        $this->assign("fpage", $page->fpage(0,3,2,4,5,6));
			        $this->assign("page", $page->page);
                    $this->mess("下架成功！",true);
                 $this->display("index");	
            }else{
                $this->error("修改失败");
            }
	    }
        function quickconfirm(){
            $good=D("goods");
            $this->mess('此处用于管理员确认商品的合法性，允许商品的发布。<a href="'.B_URL.'/index/state/0" style="background:#EECCCC;">深色记录</a>为未确认商品.<br> 商品被删除时,图片等所有信息也会一同删除. ');
			$arr=$_GET;
            //if($arr["state"] == "0") {
				$where=array("state"=>0);
				$this->assign("state", 0);
				$pget="state/0";  //分页条件
            //}
            $page=new Page($good->total(
            $where
            ), LIST_GOODS_NUM, $pget);
			$goods=$good->field("id,cid,name,simg,price,ownerid,num,fbtime,state")
				    ->limit($page->limit)
                                    ->where($where)
				    ->select();
            for($i=0;$i<count($goods);$i++){
                
                $goods[$i]["fbtime"]=date("Y-m-d",$goods[$i]["fbtime"]);
            }
            $this->assign("goods",$goods);
            $this->assign("search", $search);
			$this->assign("fpage", $page->fpage(0,3,2,4,5,6));
			$this->assign("page", $page->page);
            $this->display();	
        }

    }