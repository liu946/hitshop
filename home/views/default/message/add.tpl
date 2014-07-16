<{ include file="public/header.tpl" }>

	<form  method="post" action="<{$url}>/insert">
	<input type="hidden"  name="tarid" value="<{ $taruser.id }>">
	<ul>	
		<li class="light-row">
			<span class="col_width">收信人<span class="red_font"></span></span>
			<span class="col_width"><{$taruser.username}><span class="red_font"></span></span>
		</li>
		<li class="light-row">
			<span class="col_width">消息题目<span class="red_font">*</span></span>
			<input type="text" class="text-box" name="title" maxlength="30" size="50" value="<{ $post.name }>">
		</li>
		<li class="light-row" style="margin:0px; padding:0px">
			<span class="col_width" style="margin-top:30px">消息内容</span>
			<textarea cols="80" rows="10" name="messageck" style="display: none;" value="请在此处输入消息！"></textarea>
			<{$ck}>
		</li>
		<li class="light-row">
						<span class="col_width">&nbsp;</span><input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
		</li>
	</ul>
	

<{ include file="public/footer.tpl" }>

