<?php
	class Goods{
		function cgoodslist($value){
			$cat=D("cat")->where("path")->find($value);
			return $this->where(array("cid"=>$value))->select();
		
		}		
		function fgoodslist($value){
			$good=$this->where(array("name"=>"%".$value."%"))->select();   
			return $good;
		}		

	}