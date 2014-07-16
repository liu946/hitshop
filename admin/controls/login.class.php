<?php
	class Login extends Action{
		function index(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
        function code(){
			echo new Vcode(50,18);
		}
        function prologin(){
            $this->caching=0;     //设置缓存关闭
			$stats=false;
			$errormess="登录失败：<br>";
			if(!preg_match('/^\S+$/i', $_POST["uname"])){
				$errormess.="用户名不能为空!<br>";
				$stats=true;	
			}
			if(!preg_match('/^\S+$/i', $_POST["uname"])){
				$errormess.="用户密码不能为空!<br>";
				$stats=true;	
			}
		
			if($stats){
				$this->error($errormess, 3);
			}

			$user=D("user")->field('id,gid,username,disable')
				       ->where(array("username"=>$_POST["uname"],"userpwd"=>md5($_POST["upwd"]), "disable"=>0))
					->find();
			if(!$user){
			$user=D("user")->field('id,gid,username,disable')
				       ->where(array("email"=>$_POST["uname"],"userpwd"=>md5($_POST["upwd"]), "disable"=>0))
					->find();
			}
			if($user){
				
				$_SESSION["uid"]=$user["id"];
				$_SESSION["username"]=$user["username"];
				$_SESSION["login"]=1;
				//$this->assign("indentmsg",$user["indentmsg"]);
				//$this->assign("msg",$user["msg"]);
				$this->success("你好 {$user["username"]}, 登录成功！",1,"/index/index");
			}else{
				$this->error("用户登录失败,请重新登录！", 3);
			}
		}
        function logout(){
			$this->caching=0;     //设置缓存关闭
			$username=$_SESSION["username"];
            $_SESSION=NULL;
			D("user", "admin")->logout();
			$_SESSION["login"]=0;
			$this->success("再见 $username , 退出成功!", 1, "index/index");
		}
    }