<?php
	class car {
		function getgoods($uid){
			$good=$this->where( array( "uid"=>$uid ) )->select();
			foreach($good as $values){
				$temp=D("goods")->find($values['good']);
				$temp["buynum"]=$values['num'];
				$temp["sprice"]=$values['num']*$temp['price'];
				$temp["carid"]=$values['id'];
				$goods[]=$temp;
			}
			
			return $goods;
			
		}
	}