<?php
	class Common extends Action {
		function init(){
			
            if($_SESSION["uid"]){
                if(!(isset($_SESSION["isadminLogin"]) && $_SESSION["isadminLogin"]==1)){
                    $user=D("user")->field("id ,gid")->find($_SESSION["uid"]);
                    $group=D("group")->find($user["gid"]);
                    if($group["puser"]){
                        $_SESSION["useradmin"]=1;
                    }     
                    if($group["pgood"]){
                        $_SESSION["goodadmin"]=1;
                    }
                    if($group["pconfig"]){
                        $_SESSION["configadmin"]=1;
                    }
                    if($group["pcolunm"]){
                        $_SESSION["colunmadmin"]=1;
                    }
                    if($group["pcolunm"]||$group["pconfig"]||$group["pgood"]||$group["puser"]){
                        $_SESSION["isadminLogin"]=1;
                        $_SESSION["groupdis"]=$group["description"];
                    }else{
                        $this->error("您无权进入后台！");
                    }
                }
            }else{
                $this->redirect("login/index");
            }
		}		
        function mess($mess="ok", $is=null){
			$message="";
			if(is_array($mess)){
				foreach($mess as $m){
					$message.=$m;
				}	
			}else{
				$message=$mess;
			}

			if(is_null($is)){
				$this->assign("mess", "");
			}else if($is){
				$this->assign("mess", "ok");
			}else{
				$this->assign("mess", "error");
			}
			$this->assign("tmess", $message);
		}
	}