<?php
	class catAction extends Common {
		function index(){
			$cat=D("cat");
			$this->mess('注意：只能删除空分类，如果样目下有商品或子分类，请先删除.');
			$this->assign("list", $cat->parsetree());
			$this->display();
		}
		function add(){
			$cat=D("cat");
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("post", array("audit"=>1));
			$this->assign("select", $cat->formselect());
			$this->display();
		}
		function insert(){
			$cat=D("cat");
			$pid=$_POST["pid"];
			if($pid=='0') {
				$_POST["path"]="0";
			} else {
				$data=$cat->field('path')->find($pid);
				$_POST["path"]=$data["path"].','.$pid;
			}
			$jz=false;
			if($cat->insert($_POST, 1, 1)){
				$this->mess("新分类 <b>{$_POST["name"]}</b> 添加成功，可以继续添加！",true);	

			}else{
				$this->assign("post", $_POST);
				$this->mess($cat->getMsg(), false);
				$jz=true;
			}

			if(isset($_POST["jz"])){
				$this->assign("select", $cat->formselect("pid", $pid));
				$this->assign("jz", "checked");
			}else{
				if($jz)
					$this->assign("select", $cat->formselect("pid", $pid));
				else
					$this->assign("select", $cat->formselect());
			}			
			$this->display("add");			
		}

		function dis(){
			$data["id"]=$_GET["id"];
			$data["display"]=$_GET["con"];
			D("cat")->update($data);
		}

		function order(){
			$cat=D("cat");

			if($cat->corder($_POST)) {
				$this->mess($cat->getMsg(),true);
			}else{
				$this->mess($cat->getMsg(), false);
			}
			$this->assign("list", $cat->parsetree());
			$this->display("index");
		}
		function mod(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息。<br>注意：不能将类别移动到自己的子类中去. ');
			$cat=D("cat");
			$data=$cat->find($_GET["id"]);
			$image=D("image")->field("name")->find($data["picid"]);
			$data["picname"]=$image["name"];
			$this->assign("select", $cat->formselect("pid", $data["pid"]));
			$this->assign("post", $data);
			$this->display();
		}
		function update(){
			$cat=D("cat");
			
			if($cat->catMod($_POST)){
				$this->mess("修改分类成功！", true);
				$this->assign("list", $cat->parsetree());
				$this->display("index");
			}else{
				$this->mess($cat->getMsg(),false);
				$this->assign("select", $cat->formselect("pid", $_POST["pid"]));
				$this->assign("post", $_POST);
				$this->display("mod");
			}
		
		}
		function del(){
			$cat=D("cat");
			$good=D("good");
			if ($cat->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("只能删除空分类，分类中有子分类存在不能删除！", false);
			} else if($good->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("只能删除空分类，分类中有商品存在不能删除，请先删除本类中的文章！", false);
			} else {	
				if($cat->delete($_GET["id"])){
					$this->mess("分类删除成功！", true);
				}else{
					$this->mess("分类删除失败！", false);
				}
			}
			
			$this->assign("list", $cat->parsetree());
			$this->display("index");
		}

	}