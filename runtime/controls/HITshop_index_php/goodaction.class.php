<?php
	class goodAction extends Common {
		function index(){
			//获取商品信息
			 
			if(!$_GET["id"])$this->error("没有选择商品");
			$gos=D("goods");
			$goods=$gos->find($_GET["id"]);
			$sql="UPDATE {$gos->tabName} SET checknum = checknum + 1 WHERE id = ?";
			$num=$gos->query($sql,"update",array($_GET["id"]));
			//echo $num."11111111111111111".$sql."111111111111111";
			if(!($goods) or $goods["state"]==0 or $goods["num"]<=0){
				$this->error("sorry! 没有该商品了 !_!", 3);
			}
			
			/*时间检验
			if()
			//*/
			$goods["xiangxi"]=html_entity_decode($goods["xiangxi"]);
			$goods["fbtime"]=date("Y-m-d",$goods["fbtime"]);
			$goods["starttime"]=date("Y-m-d",$goods["starttime"]);
			$goods["endtime"]=date("Y-m-d",$goods["endtime"]);
			$this->assign("good",$goods);
			
			//获取分类列表
			$cat=D("cat");
			$path=$cat->namestring($goods['cid']);
			$this->assign("path",$path);
			
			//获取买家信息
			
			$own=D("user")->find($goods["ownerid"]);
			$this->assign("own",$own);
			//获取评价
            $evaluate=D("evaluate")->where(array("goodid"=>$goods["id"]))->select();
            for($i=0;$i<count($evaluate);$i++){
                $evaluate[$i]["time"]=date("Y-m-d",$evaluate[$i]["time"]);

                $user=D("user")->field("username")->find($evaluate[$i]["userid"]);
                $evaluate[$i]["username"]=$user["username"];
            }
            $this->assign("evaluate",$evaluate);
            //热门商品
            $hotgoods=D("goods")->field('id ,name ,price ,proprice ,simg,chengjiaonum')->order("chengjiaonum desc");
				$hotgoods=$hotgoods->limit(5)->select();
				$this->assign("hotgoods",$hotgoods);

			$this->display();
			
		}
        function mod(){
            islogin($this);
            $good=D("goods")->find($_GET["id"]);
            if($good["ownerid"]!=$_SESSION["uid"]){
                $this->error("这个商品不是您的，您无权修改！");
            }else{
                $this->assign("good",$good);
                $this->assign("select", D("cat")->formselect());
			    $this->assign("post", array("recommend"=>0, "allow"=>1));
                $this->showform();
                $this->display();
            }
        }
		function add() {
			islogin($this);
			$goods=D("goods");
			$this->assign("select", D("cat")->formselect());
			$this->assign("post", array("recommend"=>0, "allow"=>1));
			$this->showform();
			$this->display();
		}
		
		function insert(){
			islogin($this);
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			$_POST["endtime"]=strtotime($_POST["endtime"]);
			$data=$_POST;
			$data['state']=1;//实验阶段没有审核
			$data["chengjiaonum"]=0;
			$data["fbtime"]=time();
			$data["ownerid"]=$_SESSION["uid"];
			
			//上传大图
			$upbimg=new FileUpload();
			$upbimg->set("path",GOOD_PATH ."goodbimg/")
					->set("allowtype",explode(',',IMG_ALLOW_TYPE))
					->set("maxsize",BIMG_ALLOW_SIZE)
					->set('israndname',IMG_RANDNAME);
			if($upbimg->upload('bimg')){
				//p($upbimg->getFileName());
				$data["bimg"]=$upbimg->getFileName();
				//图缩放，加水印；
				$img = new Image(GOOD_PATH ."goodbimg/");
				$img->thumb($data["bimg"],BIMG_THUMB_SIZE_W,BIMG_THUMB_SIZE_H);
				$img->waterMark($data["bimg"],'.'.ltrim(ltrim(B_RES,'/'),APP_NAME) ."/images/goodwater.gif",9);

			}else{
				$this->error($upbimg->getErrorMsg(),0,'index');
			}
			
			//上传小图
			$upsimg=new FileUpload();
			$upsimg->set("path",GOOD_PATH ."goodsimg/")
					->set("allowtype",explode(',',IMG_ALLOW_TYPE))
					->set("maxsize",SIMG_ALLOW_SIZE)
					->set('israndname',IMG_RANDNAME);
			if($upsimg->upload('simg')){
				//p($upsimg->getFileName());
				$data["simg"]=$upsimg->getFileName();
				//图缩放，加水印；
				$img = new Image(GOOD_PATH ."goodsimg/");
				$img->thumb($data["simg"],SIMG_THUMB_SIZE_W,SIMG_THUMB_SIZE_H);
				$img->waterMark($data["simg"],'.'.ltrim(ltrim(B_RES,'/'),APP_NAME) ."/images/goodwater.gif",9);

			}else{
				$this->error($upsimg->getErrorMsg(),0,'index');
			}
			
			
			//p($data);
			$good=D("goods");
			$lastid=$good->insert($data, 1, 1);
			if($lastid){
				$this->success("添加成功",1,"good/index/id/".$lastid);	
			}else{
				$this->assign("good", $_POST);
				$this->showform($_POST["starttime"], $_POST["endtime"]);
				$this->display("add");
			} 
	    } 

        function update(){
            islogin($this);
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			$_POST["endtime"]=strtotime($_POST["endtime"]);
			$data=$_POST;
			$data['state']=1;//实验阶段没有审核
			$data["chengjiaonum"]=0;
			$data["fbtime"]=time();
			$data["ownerid"]=$_SESSION["uid"];
           // p($data["bimg"]);
            
			if($data["bimg"]){
			//上传大图
			    $upbimg=new FileUpload();
			    $upbimg->set("path",GOOD_PATH ."goodbimg/")
					    ->set("allowtype",explode(',',IMG_ALLOW_TYPE))
					    ->set("maxsize",BIMG_ALLOW_SIZE)
					    ->set('israndname',IMG_RANDNAME);
			    if($upbimg->upload('bimg')){
				    //p($upbimg->getFileName());
				    $data["bimg"]=$upbimg->getFileName();
				    //图缩放，加水印；
				    $img = new Image(GOOD_PATH ."goodbimg/");
				    $img->thumb($data["bimg"],BIMG_THUMB_SIZE_W,BIMG_THUMB_SIZE_H);
				    $img->waterMark($data["bimg"],'.'.ltrim(ltrim(B_RES,'/'),APP_NAME) ."/images/goodwater.gif",9);

			    }else{
				    $this->error($upbimg->getErrorMsg(),0,"index/id/".$_POST["id"]);
			    }
			}else{
			    unset($data["bimg"]);
			}
            if($data["simg"]){
			    //上传小图
			    $upsimg=new FileUpload();
			    $upsimg->set("path",GOOD_PATH ."goodsimg/")
					    ->set("allowtype",explode(',',IMG_ALLOW_TYPE))
					    ->set("maxsize",SIMG_ALLOW_SIZE)
					    ->set('israndname',IMG_RANDNAME);
			    if($upsimg->upload('simg')){
				    $upsimg->getFileName();
				    $data["simg"]=$upsimg->getFileName();
				    //图缩放，加水印；
				    $img = new Image(GOOD_PATH ."goodsimg/");
				    $img->thumb($data["simg"],SIMG_THUMB_SIZE_W,SIMG_THUMB_SIZE_H);
				    $img->waterMark($data["simg"],'.'.ltrim(ltrim(B_RES,'/'),APP_NAME) ."/images/goodwater.gif",9);

			    }else{
				    $this->error($upsimg->getErrorMsg(),0,"index/id/".$_POST["id"]);
			    }
            }else{
                unset($data["simg"]);
            }
            
			
			$good=D("goods");
			$change=$good->where(array("id"=>$_POST["id"]))->update($data, 1, 1);
			if($change){
				$this->success("修改成功",3,"good/index/id/".$_POST["id"]);	
			}else{
				$this->assign("good", $_POST);
				$this->showform($_POST["starttime"], $_POST["endtime"]);
				$this->redirect("good/mod/id/".$_POST["id"]);
			} 
			

			
        }
		private function showform($start="", $end=""){
			if($start=="")
				$start=time();
			$this->assign("starttime", Form::date("starttime", date("Y-m-d H:i:s", $start), 1));
			if($end!="" && $end !="0")
				$end=date("Y-m-d H:i:s", $end);
			else
				$end="";
			$this->assign("endtime", Form::date("endtime", $end, 1));
			$this->assign("ck", Form::editor("xiangxi", "full", "500", "#FAFAFA"));
		}
		
		
		function goodslist(){
			
			if($_GET["mode"]){
				$data=$_GET;
			}else if($_POST["mode"]){
				$data=$_POST;
			}else{
				$this->error("查找模式非法！");
			}
			//p($data);
			if(!$data['value']){$this->error("查找非法值！");}
			switch ($data["mode"]){
				case ("class"):
					$good=D("goods");
					$goods=$good->cgoodslist($_GET["value"]);
					break;
				case ("find"):
					$good=D("goods");
					$goods=$good->fgoodslist($_GET["value"]);
					break;
				default:
					$this->error("访问了非法页面");
			}
			//p($goods);
		
		}
		
		function upimage() {

	
			$up = new FileUpload('./upfile/tmp'); 

			$up->set("allowtype", array('jpg', 'png', 'gif'));
			$up->set('thumb', array('width'=>300, 'height'=>300));

			if($up->upload('upload')) {
				$filename = $up->getFileName();
				$_SESSION['article'][]=$filename;
				$path = B_ROOT."/upfile/tmp/".$filename;
				die('<script>window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', "'.$path.'", "");</script>');
			} else {
				$mess = strip_tags($up->getErrorMsg());

				die('<script>window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', "", "'.$mess.'");</script>');
			}

		}
		
		function upflash(){
			$up = new FileUpload('./upfile/tmp'); 

			$up->set("allowtype", array('swf'));
			//$up->set('thumb', array('width'=>300, 'height'=>300));

			if($up->upload('upload')) {
				$filename = $up->getFileName();
				$_SESSION['article'][]=$filename;
				$path = B_ROOT."/upfile/tmp/".$filename;
				die('<script>window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', "'.$path.'", "");</script>');
			} else {
				$mess = strip_tags($up->getErrorMsg());

				die('<script>window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', "", "'.$mess.'");</script>');
			}
		
		}
		
		
		
	}