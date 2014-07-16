<?php
class evaluateAction extends Common {

    	function add(){
			islogin($this);
            $indent=D("indent")->field(" id , userid,username,ownerid,ownername,goodid ")->find($_GET["indent"]);
            if($_SESSION["uid"]!=$indent["userid"]){
                $this->error("非法评价人！");
            }
            $good=D("goods")->find($indent["goodid"]);
            $this->assign("good",$good);
			$this->assign("indent",$indent);
			$this->display();
		}

		function insert(){
            islogin($this);
			$indent=D("indent")->field("id,userid,state,goodid,ownerid")->find($_POST["indentid"]);
            if($_SESSION["uid"]!=$indent["userid"]||$indent["state"]!=6){
                $this->error("非法评价人不是评价状态！");
            }
			$data["indentid"]=$_POST["indentid"];
			$data["goodid"]=$indent["goodid"];
            $data["ownerid"]=$indent["ownerid"];
			$data["evaluate"]=$_POST["evaluate"];
			$data["userid"]=$_SESSION["uid"];
			$data["time"]=time();
			//p($data);
			$evaluate=D("evaluate");
			$lastid=$evaluate->insert($data, 1, 1);
			if($lastid){
                D("indent")->where(array("id"=>$data["indentid"]))->update(array("state"=>10));
				$this->redirect("indent/index");	
			}else{
				$this->error("评价添加失败",3,"evaluate/add/indent/".$indent["id"]);
			} 
		}
}