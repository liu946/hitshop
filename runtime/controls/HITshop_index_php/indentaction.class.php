<?php
    define(OFFLINE,3);
    define(OFFLINEUSERCONFIRM,4);
    define(OFFLINEOWNERCONFIRM,5);
    define(OFFLINECONFIRM,6);
	class IndentAction extends Common {
		
		function index(){
				islogin($this);
				//分配环境变量
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				//显示订单信息，状态。
				//作为买方的订单信息
				$seller=D("indent")->where(array("ownerid"=>$_SESSION["uid"]))->select();
				
				$this->assign("sellergoods",$seller);
				
				//作为卖方的订单信息
				$buyer=D("indent")->where(array("userid"=>$_SESSION["uid"]))->select();
				//p($buyer);
				$this->assign("buyergoods",$buyer);
				
				//删除indentmsg
				$user=D("user");
				$user->where(array("id"=>$_SESSION["uid"]))->update(array("indentmsg"=>0));
				$num=$user->field("indentmsg")->where(array("id"=>$_SESSION["uid"]))->find();
				if($num["indentmsg"]){
					$this->error("删除indentmsg失败");
				}
				$this->display();
		}	
		
        function getstatesay($indent){
            switch($indent["state"]){
                    case OFFLINE:
                        return "已确认线下交易";
                        break;
                    case OFFLINEUSERCONFIRM:
                        return "订单已被买方确认";
                        break;
                    case OFFLINEOWNERCONFIRM:
                        return "订单已被卖方确认";
                        break;
                    case OFFLINECOMFIRM:
                        return "订单交易完成";
                        break;
                    default:
                        return "意外状态！";
            }
        }
        function getowneroperate($indent){
            switch($indent["state"]){
                    case OFFLINE:
                        return "确认线下交易";
                        break;
                    case OFFLINEUSERCONFIRM:
                        return '<a href="<{$url}>/confirmoffline/id/<{$buyergood.id}>">
                                         确认交易完成
                                     </a>';
                        break;
                    case OFFLINEOWNERCONFIRM:
                        return "";
                        break;
                    case OFFLINECOMFIRM:
                        return '<a href="">再去增加商品</a>';
                        break;
                    default:
                        return "意外状态！";
            }
        }
        function getbuyeroperate($indent){
            switch($indent["state"]){
                    case OFFLINE:
                        return "已确认线下交易";
                        break;
                    case OFFLINEUSERCONFIRM:
                        return "";
                        break;
                    case OFFLINEOWNERCONFIRM:
                        return '<a href="<{$url}>/confirmoffline/id/<{$buyergood.id}>">
                                         确认交易完成
                                     </a>';
                        break;
                    case OFFLINECOMFIRM:
                        return '<a href="">去评价</a>';
                        break;
                    default:
                        return "意外状态！";
            }
        }
		function indentconfirm(){
				islogin($this);
				$car=D("car");
				$indent=$car->find($_GET["id"]);
				$goods=D("goods");
				$god=$goods->find($indent["good"]);
				if($god["num"]<$indent["num"]){
					if($god["num"] <= 0 && $god["state"]){
						
						if(
							$car->delete($_GET["id"]) 
							&&
							$goods->where(array("id"=>$god["id"]))->update(array("state"=>0))
							){
							
							$this->error("sorry。已经卖完了亲。<br>商品已从购物车删除。<br>商品下架。");
						}else{
							$this->error("sorry。已经卖完了亲。<br>商品从购物车删除下架error。");
						
						}
					}else{
						if( $car->where($indent["id"])->update( array("num"=>$god["num"])) ){
							$this->error("没那么多了哦，已调整到最多可以买到的数量。");
						}else{
							$this->error("没那么多了哦，调整失败！");
						}
						
					
					}
				}
				$this->assign("indent",$indent);
				$this->assign("good",$god);
				$user=D("user_info")->where(array("uid"=>$_SESSION["uid"]))->find();
				$owner=D("user")->field("id,username")->find($god["ownerid"]);
				$this->assign("user",$user);
				$this->assign("owner",$owner);
				$this->display();
		}
		
		
		function insert(){
				islogin($this);
				$indent=D("car")->find($_POST["indent"]);
				$indent["userqq"]=$_POST["qq"];
				$indent["userphone"]=$_POST["phone"];
				$indent["userpostcode"]=$_POST["postcode"];
				$indent["useraddress"]=$_POST["address"];
				$good=D("goods")->find($indent["good"]);
				$user=D("user")->find($indent["uid"]);
				$owner=D("user")->find($indent["ownerid"]);
				/* if($user["id"]==$owner["id"]){
					$this->error("不能购买自己的商品哦！");
				} */
				$indent["ownerid"]=$owner["id"];
				$indent["ownername"]=$owner["username"];
				$indent["userid"]=$user["id"];
				$indent["username"]=$user["username"];
				$indent["goodid"]=$good["id"];
				$indent["goodsimg"]=$good["simg"];
				$indent["goodprice"]=$good["price"];
				$indent["sumprice"]=$good["price"]*$indent["num"];
				$indent["lastuptime"]=time();
				$indent["state"]=USER_CONFIRM;
				
				$db = D();                  //可以访问DB对象中非表的操作方法 
				$db->beginTransaction(); //开启事务 		
				//订单表插入数据
				if(D("indent")->insert($indent,1,1)){
							
				}else{
					$db->rollBack();           //事务回滚 
					$this->error("插入数据,订单确认失败！");
					
				}
				//商品数量减少
				$good=D("goods");
				$sql="UPDATE {$good->tabName} SET num = num - {$indent["num"]} WHERE id = ?";
				$num=$good->query($sql,"update",array($indent["goodid"]));
				if(!$num){
					$db->rollBack();           //事务回滚 
					$this->error("商品数量减少订单确认失败！");
				}
				//卖家获得信息
				$user=D("user");
				$sql="UPDATE {$user->tabName} SET indentmsg = 1 WHERE id = ?";
				$user->query($sql,"update",array($indent["ownerid"]));
				$num=D("user")->find($indent["ownerid"]);
				$num=$num["indentmsg"];
				if(!$num){
					$db->rollBack();           //事务回滚 
					$this->error("卖家获得信息订单确认失败！");
				}
				//删除购物车信息
				if(D("car")->where()->delete($indent["id"])){
					$db->commit();              //提交事务 
					//$db->rollBack(); 
					$this->success("订单确认成功！",3,"index");
				}else{
					$db->rollBack();           //事务回滚 
					$this->error("删除购物车信息,订单确认失败！");
				}
		}	
		
        function offline(){
            D("indent")->where(array("id"=>$_GET["id"]))->update(array("state"=>OFFLINE));
           $this->success("登记成功！");
        }

        function confirmoffline(){
            $indent=D("indent")->find($_GET["id"]);
            //p($indent);
            if($indent["state"]==OFFLINE){
                if($_SESSION["uid"]==$indent["userid"]){
                //	p("this!");
                    if(!D("indent")->where(array("id"=>$_GET["id"]))->update(array("state"=>OFFLINEUSERCONFIRM))){
                        $this->error("修改失败！");
                    }
                }elseif($_SESSION["uid"]==$indent["ownerid"]){
                    if(!D("indent")->where(array("id"=>$_GET["id"]))->update(array("state"=>OFFLINEOWNERCONFIRM))){
                        $this->error("修改失败！");
                    }
                }else{
                    $this->error("非法操作，不是订单相关用户！");
                }
            }elseif($indent["state"]==OFFLINEUSERCONFIRM){
            	//p("4");
                if($_SESSION["uid"]==$indent["ownerid"]){
                	p("this");
                    if(!D("indent")->where(array("id"=>$_GET["id"]))->update(array("state"=>OFFLINECONFIRM))){
                        $this->error("修改失败！");
                    }
                }else{
                    $this->error("修改失败！");
                }
            }elseif($indent["state"]==OFFLINEOWNERCONFIRM){
            	//p("this1");
                if($_SESSION["uid"]==$indent["userid"]){
                    if(!D("indent")->where(array("id"=>$_GET["id"]))->update(array("state"=>OFFLINECONFIRM))){
                        $this->error("修改失败！");
                    }
                    //成交一笔
                    	$gos=D("goods");
			            $sql="UPDATE {$gos->tabName} SET chengjiaonum = chengjiaonum + 1 WHERE id = ?";
			            $gos->query($sql,"update",array($indent["goodid"]));
                }else{
                    $this->error("修改失败！");
                }                
            }
            $this->redirect("index");
        }
        function allindentconfirm(){
        	foreach (D("car")->field("id")->where( array('uid' => $_SESSION['uid'] ))->find() as $key => $value) {
        		# code...islogin($this);
				$car=D("car");
				$indent=$car->find($value);
				$goods=D("goods");
				$god=$goods->find($indent["good"]);
				if($god["num"]<$indent["num"]){
					if($god["num"] <= 0 && $god["state"]){
						
						if(
							$car->delete($_GET["id"]) 
							&&
							$goods->where(array("id"=>$god["id"]))->update(array("state"=>0))
							){
							
							$this->error("sorry。已经卖完了亲。<br>商品已从购物车删除。<br>商品下架。");
						}else{
							$this->error("sorry。已经卖完了亲。<br>商品从购物车删除下架error。");
						
						}
					}else{
						if( $car->where($indent["id"])->update( array("num"=>$god["num"])) ){
							$this->error("没那么多了哦，已调整到最多可以买到的数量。");
						}else{
							$this->error("没那么多了哦，调整失败！");
						}
						
					
					}
				}
				//$this->assign("indent",$indent);
				//$this->assign("good",$god);
				$user=D("user_info")->where(array("uid"=>$_SESSION["uid"]))->find();
				$owner=D("user")->field("id,username")->find($god["ownerid"]);
				//$this->assign("user",$user);
				//$this->assign("owner",$owner);
				
        	}
        	//$this->display("index");
        }
	}