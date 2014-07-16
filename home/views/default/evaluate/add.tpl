<{ include file="public/header.tpl" }>

	<form  method="post" action="<{$url}>/insert">
	<input type="hidden"  name="indentid" value="<{ $indent.id }>">
	<ul>	
		<li class="light-row">
			<span class="col_width">商家<span class="red_font"></span></span>
			<span class="col_width"><{$indent.ownername}><span class="red_font"></span></span>
            
		</li>
		<li class="light-row">
			<span class="col_width">商品</span>
            <{$good.name}>
            
		</li>
		<li class="light-row" style="margin:0px; padding:0px">
			<span class="col_width" style="margin-top:30px">消息内容 500字以内 请勿输入html标签</span>
			<br>
            <textarea name="evaluate" rows="5" cols="80">请在此处输入评价！</textarea>
		</li>
		<li class="light-row">
						<span class="col_width">&nbsp;</span><input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
		</li>
	</ul>
	

<{ include file="public/footer.tpl" }>

