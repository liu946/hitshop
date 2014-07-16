<{ include file="public/header.tpl" }>
<div class="panel panel-default">
          	<div class="panel-body">
	<{foreach $goods as $good}>
	<div class="panel panel-default" style="margin-left:40px;margin-right:40px;">
	<div style="height:150px">
		 <div style="float:left">
		 <img src="<{$root}>/upfile/goods/goodsimg/<{$good.simg}>" alt="..." width="180px" height="180px" class="media-object"/></a></div>
		<div style="width:200px;float:left;margin-left:20px"><a href="<{$app}>/good/index/id/<{$good.id}>"><{$good.name}></a></div>
		<div style="width:200px;float:left">
		<div>单价&nbsp;&nbsp;<{$good.price}></div><br> 
		<div>单位&nbsp;&nbsp;<{$good.danwei}></div><br>
		<div>购买数量&nbsp;&nbsp;<{$good.buynum}></div><br>
		<div>总计&nbsp;&nbsp;<{$good.sprice}></div>
		</div>
		<div style="width:200px;float:left">
		<h5><a href="<{$app}>/message/add/id/<{$good.ownerid}>">联系卖家</a></h5>
		<h5><a href="<{$app}>/user/showinfo/id/<{$good.ownerid}>">查看卖家信息卖家</a></h5>
		<h5><a href="<{$url}>/del/id/<{$good.carid}>">删除</a></h4>
		<h5><a href="<{$app}>/indent/indentconfirm/id/<{$good.carid}>">确认订单</a></h5>
		</div>
		</div><hr>
	</div>
	<{/foreach}>
	<div>购物车结算&nbsp;共&nbsp;<{$sum}>&nbsp;元</div><!--<a href="<{$app}>/indent/allindentconfirm/">全部确认订单</a>-->
</div>
</div>
<{ include file="public/footer.tpl" }>