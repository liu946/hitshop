<?php
class cat{
	function formselect($name="pid", $value="0", $root="根分类", $change=""){
			$data=$this->field('id,pid,name title,concat(path,",",id) as abspath')->order("abspath,id asc")->select();

			$html='<select '.$change.' id="sel" name="'.$name.'">';
			$html.='<option value="0">'.$root.'</option>';
			foreach($data as $val){
				if($value==$val["id"])
					$html.='<option selected value="'.$val['id'].'">';
				else
					$html.='<option value="'.$val['id'].'">';

				$num=count(explode(",", $val["abspath"]))-2;
				$space=str_repeat("|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$num);	
				$name=$val["title"];
				$html.=$space."|-".$name;
				$html.='</option>';	
			}
			$html.='</select>';

			return $html;
		}
		function getPathById($id){
			if($id==0) {
				return "0";
			} else {
		
				$row=$this->field("path")->find($id);

				return $row["path"];
			}
		}	
		function catMod($post) {

			$ppath=$this->getPathById($post["pid"]);  //新选择的父节点的path
			$xpath=$this->getPathById($post["id"]);     //当前操作节点的path
		
			if($post["pid"]=="0")
				$post["path"]=0;
			else
				$post["path"]=$ppath.','.$post['pid'];	
			


			if(in_array($post["id"], explode(",", $post["path"]))) {
				$this->setMsg("不能将{$post['title']}移动到自己或自己的子类别中.");
				return false; 
			}
	
		

			$srcpath=$xpath.','.$post["id"];
			$cpath=$post["path"].','.$post['id'];	          //和现有的操作的分类Id相连
		
			
			$this->where("path like '{$srcpath}%'")->update("path=REPLACE(path, '{$srcpath}','{$cpath}')");
		
		
			if($this->update($post,1, 1) ){
				return true;
			}else{
				$this->setMsg("修改<b> ".$post["title"]."</b> 失败.");
				return false;
			} 
		}
		function parsetree() {	
			$option = $this->field('id,pid,name title,concat(path,",",id) as abspath')->order("abspath,id asc")->select();
			$html='<li class="dark-row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--根分类</li>';
			$i=0;
			foreach($option as $value) {
				$class=($i++%2==0)?'light-row':'dark-row';  //隔行换样式
				$html .= '<li class='.$class.'>';
					$input='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				$title = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|',count(explode(',',$value['abspath']))-2).$input. '|--'.$value['title'];
				$html .= '<span class="col_width2">'.$title.'</span>';
			
				$html .= '【<a href="'.B_URL.'/mod/id/'.$value["id"].'">修改</a>】';
				$html .= '【<a href="'.B_URL.'/del/id/'.$value["id"].'" onclick=\'return confirm("确定要删除'.$value['title'].'及子分类吗？")\'>删除</a>】';
			
				$html .= '</li>';
			}
			return $html; 
		}
		function corder($post){
			$affected_rows=0;
			for($i=0; $i<count($post["id"]); $i++){
				$data["id"]=$post["id"][$i];
				$data["ord"]=$post["ord"][$i];
				$affected_rows+=$this->update($data, 1, 0);
			}

			if($affected_rows > 0) {
				$this->setMsg("类别顺序修改成功.");
				return true;
			}else{
				$this->setMsg("没有需要修改的类别顺序.");
				return false;
			}
		}
}