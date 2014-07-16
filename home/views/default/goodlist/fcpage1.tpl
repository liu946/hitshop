<table border="1" width="800" align="center">
	<tr>
		<th>商品图片</th><th>商品名称</th> <th>商品价格</th><th>数量</th><th>添加时间</th><th>操作</th>
	</tr>
	
	<{foreach $goods as $good}> 
		<tr>
			
			<a href="<$app>/good/index/id/<{$good.id}>">
				<td><a href="<{$app}>/good/index/id/<{$good.id}>">
				<img width="160px" height="180px" src="<{$root}>/upfile/goods/goodsimg/<{$good.simg}>"/></a></td>
				<td><a href="<{$app}>/good/index/id/<{$good.id}>">
				<{$good.name}></a></td>
				<td>￥<{$good.price}></td>
				<td><{$good.num}></td>
				<td><{$good.fbtime|date_format:"%Y-%m-%d"}></td>
			</a>
			<td><a href="/HITshop/index.php/message/add/id/<{$good.ownerid}>">    联系卖家</a>
			/
			<a href="/HITshop/index.php/user/showinfo/id/<{$good.ownerid}>">
			查看卖家信息</a></td>
		</tr>
	<{foreachelse}>
		<tr> <td colspan="7">没有商品 </td></tr>
	<{/foreach}>

	<tr>
		 <td colspan="7" text-align="center" ><center><{$fpage}></center></td>
	</tr>
</table>
