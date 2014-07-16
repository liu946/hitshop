<?php
	class Group {
		function index(){
			$this->mess('管理员用户组不能删除，否则将不能登录系统. ');
			$this->assign("groups", D("group")->select());
			$this->display();
		}
	
		function  add(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->display();
		}

		function insert(){
			$group=D("group");

			if($group->insert($_POST, 1, 1)){
				$this->mess("用户组{$_POST["description"]}添加成功！. ",true);
				$this->assign("groups", D("group")->select());
				$this->display('index');

			}else{
				$this->mess($group->getMsg(),false);
				$this->assign($_POST);
				$this->display('add');
			}
		}



		function del(){
			$group=D("group");
			if(D("user")->total(array('gid'=>$_GET['gid'])) > 0){
				$this->mess('请将该用户组中所有成员移动到其他组中再删除!', false);
			}else{
				if($group->delete($_GET['gid'])) {
					$this->mess('成功删除用户组！', true);
				}else{
					$this->mess($group->getMsg(), false);
				}
			}
			$this->assign("groups", D("group")->select());
			$this->display('index');

		}


		function mod(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign(D("group")->find($_GET['id']));
			$this->display();
		}

		function update(){
			$group=D("group");
			$_POST["puser"] = !empty($_POST["puser"]) ? $_POST["puser"] : 0;			
            $_POST["pgood"] = !empty($_POST["pgood"]) ? $_POST["pgood"] : 0;
            $_POST["pconfig"] = !empty($_POST["pconfig"]) ? $_POST["pconfig"] : 0;
            $_POST["pcolunm"] = !empty($_POST["pcolunm"]) ? $_POST["pcolunm"] : 0;

			$affectedrow=$group->update($_POST, 1, 1);	

			if($affectedrow){
				$this->mess('修改成功！',1);
			    $this->assign("groups", D("group")->select());
				$this->display('index');
			}else{
				if($affectedrow===0)
					$mess="数据没有改变";
				else
					$mess=$group->getMess();

				$this->mess($mess,false);
				$this->assign($_POST);
				$this->display('mod');
			}
		}
	}
