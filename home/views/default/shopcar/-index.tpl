<{ include file="public/header.tpl" }>

	<{foreach $goods as $good}>
		<div><a href="<{$app}>/good/index/id/<{$good.id}>">name&nbsp;&nbsp;<{$good.name}></a></div><br> 
		<div>simg&nbsp;&nbsp;<{$good.simg}></div><br> 
		<div>单价&nbsp;&nbsp;<{$good.price}></div><br> 
		<div>danwei&nbsp;&nbsp;<{$good.danwei}></div><br>
		<div>buynum&nbsp;&nbsp;<{$good.buynum}></div><br>
		<div>sumprice&nbsp;&nbsp;<{$good.sprice}></div>
		<a href="<{$app}>/message/add/id/<{$good.ownerid}>">联系卖家</a>
		<a href="<{$app}>/user/showinfo/id/<{$good.ownerid}>">查看卖家信息卖家</a>
		<a href="<{$url}>/del/id/<{$good.carid}>">删除</a>
		<a href="<{$app}>/indent/indentconfirm/id/<{$good.carid}>">确认订单</a>
		<hr>
	<{/foreach}>
	<div>购物车结算&nbsp;共&nbsp;<{$sum}>&nbsp;元</div><a href="<{$app}>/info/allindentconfirm/">全部确认订单</a>

<{ include file="public/footer.tpl" }>