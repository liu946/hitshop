<?php
	class UserAction extends Common {
		function index(){
				islogin($this);
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				if(!$_GET['uid'])$_GET['uid']=$_SESSION["uid"];
				$user=D("user")->find($_GET['uid']);
				$user['regtime']=date("Y-m-d",$user['regtime']);
				$userinfo =D("user_info")->where(array("uid"=>$_GET['uid']))->find();
				$user['qq']=$userinfo['qq'];
				$user['phone']=$userinfo['phone'];
				$user['realname']=$userinfo['realname'];
				$user['shenfennum']=$userinfo['shenfennum'];
				$user['address']=$userinfo['address'];
				$user['postcode']=$userinfo['postcode'];
				//p($user);
				$this->assign('user',$user);
				$this->display();		
		}	
		function mod(){
				islogin($this);
				//p(D("user")->find($_SESSION['uid']));
				$user=D("user")->find($_SESSION['uid']);
				if(D("user_info")->where(array("uid"=>$_SESSION['uid']))->find()){
					foreach(D("user_info")->where(array("uid"=>$_SESSION['uid']))->find() as $key=> $value) {
						$user[$key]=$value;
					}
				}
				//$user = array_merge($user,D("user_info")->where(array("uid"=>$_SESSION['uid']))->find());
				//p($user);
				$this->assign("user",$user);
				$this->display();
		}
		function update(){
			islogin($this);
			$user=D("user");
			$user_info=D("user_info");
			$userup["id"]=$_SESSION["uid"];
			$userup["email"]=$_POST["email"];
			$userup["info"]=$_POST["info"];
			$userup["sex"]=$_POST["sex"];
			$user_infoup["id"]=$_POST["id"];
			$user_infoup["realname"]=$_POST["realname"];
			$user_infoup["shenfennum"]=$_POST["shenfennum"];
			$user_infoup["qq"]=$_POST["qq"];
			$user_infoup["phone"]=$_POST["phone"];
			$user_infoup["address"]=$_POST["address"];
			$user_infoup["postcode"]=$_POST["postcode"];
			$user->update($userup);
			$user_info->update($user_infoup,1,1);
			$this->redirect("index");
		}
		function showinfo(){
				$user=D("user")->field("id,gid,username,email,regtime,sex,upic")->find($_GET["id"]);
				$userinfo=D("user_info")->where(array(["uid"]=>$_GET["id"]))->find();
				$user=array_merge($userinfo,$user);
				$this->assign("owner",$user);
				$this->display();
		}
		
	}