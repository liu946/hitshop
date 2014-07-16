<?php
	class MessageAction extends Common {
		function index(){
				islogin($this);
				//分配环境变量
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				//
                D("user")->where(array("id"=>$_SESSION["uid"]))->update(array("msg"=>0));
				$message=D("message")->field("id,uname,tarid,time,title,uid,state")->where(array("tarid"=>$_SESSION["uid"]))->select();
                for($i=0;$i<count($message);$i++){
                    $message[$i]["time"]=date("Y-m-d",$message[$i]["time"]);
                }
                $this->assign("message",$message);
				$this->display();
		}	
		function page(){
            islogin($this);
		    if(!$_GET["id"]){
		        $this->error("没有这条消息");
		    }
            $message=D("message")->find($_GET["id"]);
            if($message["tarid"]!=$_SESSION["uid"]){
                $this->error("无权查看！");
            }

            D("message")->where(array('id'=>$_GET["id"]))->update(array("state"=>0));
            $message["time"]=date("Y-m-d",$message["time"]);
            $message["msg"]=html_entity_decode($message["msg"]);
            $this->assign("msg",$message);
			$this->display();
		}
		function mod(){
		
			/* 	islogin($this);
				//p($_SESSION);
				$user=D("user")->find($_SESSION['uid']);
				$user = array_merge($user,D("user_info")->where(array(["uid"]=>$_SESSION['uid']))->find());
				$this->assign("user",$user);
				$this->display(); */
				
		}
		function add(){
			islogin($this);
			$taruser=D("user")->field(" id , username ")->find($_GET["id"]);
			//p($taruser);
			$this->assign("taruser",$taruser);
			$this->assign("ck", Form::editor("messageck", "basicnoup", "500", "#FAFAFA",false));
			$this->display();
		}
		function insert(){
			islogin($this);
			$data["tarid"]=$_POST["tarid"];
			$data["title"]=$_POST["title"];
			$data["msg"]=$_POST["messageck"];
			$data["uid"]=$_SESSION["uid"];
			$data["uname"]=$_SESSION["username"];
			$data["time"]=time();
			$data["state"]=1;
			D("user")->where(array('id' =>$data["tarid"]))->update(array('msg' => 1));
			//p($data);
			$message=D("message");
			$lastid=$message->insert($data, 1, 1);
			if($lastid){
				$this->success("消息添加成功",1);	
			}else{
				$this->display();
				$this->error("消息添加失败",3,"message/add/id/".$data["tarid"]);
			} 
		}
		function getnum(){
			//islogin($this);
			debug(0);
			$user=D("user")->field('id,msg')
					->find($_SESSION["uid"]);
			$html="";
			if($user["msg"]){
				$html.='您有新留言了！';
			}
			echo $html;
		}
		function getindentnum(){
			debug(0);
			//islogin($this);
			$user=D("user")->field('id,msg,indentmsg')
					->find($_SESSION["uid"]);
			$html="";
			if($user["indentmsg"]){
				$html.='订单信息有变化哦！';
			}
			echo $html;
		}
	}