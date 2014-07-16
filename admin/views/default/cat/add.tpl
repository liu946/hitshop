<{include file="public/header.tpl"}>	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>添加栏目</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">上级栏目</span>
							<{ $select }>	<label for="jz"><input id="jz" type="checkbox" name="jz" <{$jz}> value="1"> 记住选项</label>
						</li>
					<li class="dark-row">
						<span class="col_width">分类标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="name" size="20" value="<{ $post.name }>">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">分类描述</span>
						<textarea class="text-box" name="info" cols="30" rows="5"><{ $post.info}></textarea>
					</li>
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>


<{include file="public/footer.tpl"}>	


