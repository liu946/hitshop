
	

	<{foreach $goods as $good}> 
	<div class="panel panel-default" >
<div class="panel-body" >
			<div class="media" >
			<a href="<$app>/good/index/id/<{$good.id}>">
				<a class="pull-left" href="<{$app}>/good/index/id/<{$good.id}>">
				<img width="160px" height="180px" class="media-object" src="<{$root}>/upfile/goods/goodsimg/<{$good.simg}>"/></a>
				  <div class="media-body">
				   <h3 style="color:black" class="media-heading">
				   <a href="<{$app}>/good/index/id/<{$good.id}>"><{$good.name}></a></h4>
                <h2 style=" font-weight:bolder;color:red;" class="media-heading">￥<{$good.price}></h4>
				<h4 class="media-heading">原价：<del><{$good.proprice}></del></h4>
				<h4 class="media-heading">剩余数量：<{$good.num}></h4>
				<h4 class="media-heading">简单介绍：<{$good.jieshao}></h4>
				<h4 class="media-heading">已售：<{$good.chengjiaonum}></h4>
				<h4 class="media-heading">浏览：<{$good.checknum}></h4>
				<h4 class="media-heading">发布时间：<{$good.fbtime|date_format:"%Y-%m-%d"}></h4>
			</a>
			<h5 class="media-heading">
			<a href="/HITshop/index.php/message/add/id/<{$good.ownerid}>">联系卖家/</a>
			<a href="/HITshop/index.php/user/showinfo/id/<{$good.ownerid}>">
			查看卖家信息</a></h4>
			</div>
			</div>
			</div>	
</div>

	<{foreachelse}>
		<tr> <td colspan="7">没有商品 </td></tr>
	<{/foreach}>	


    <center><{$fpage}></center>

