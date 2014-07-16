<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户组管理>修改用户组</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<{$id}>">
					<li class="light-row">
						<span class="col_width">用户组名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="groupname" type="text"  value="<{$groupname}>" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>
					
					<li class="dark-row">
						<span class="col_width" style="margin-top:30px">组描述<span class="red_font">*</span></span>
						<textarea class="text-box" name="description" cols="40" rows="5"><{ $description }></textarea>
					</li>

					
					<li class="light-row">
						<span class="col_width">设置权限</span>
						<span style="height:30px;">				
							<label for="q1"><input id="q1" <{if $useradmin eq 1}>checked<{/if}> type="checkbox" name="useradmin" value="1"> 用户管理</label>&nbsp;&nbsp;
							<label for="q2"><input id="q2" <{if $webadmin eq 1}>checked<{/if}> type="checkbox" name="webadmin" value="1"> 网站编辑</label>&nbsp;&nbsp;
							<label for="q3"><input id="q3" <{if $articleadmin eq 1}>checked<{/if}> type="checkbox" name="articleadmin" value="1"> 文章管理</label>
						</span><br>
						<span class="col_width">&nbsp;</span>
						<span  style="height:30px;">
							<label for="q4"><input id="q4" <{if $sendarticle eq 1}>checked<{/if}> type="checkbox" name="sendarticle" value="1"> 发表文章</label>&nbsp;&nbsp;
							<label for="q5"><input id="q5" <{if $sendcomment eq 1}>checked<{/if}> type="checkbox" name="sendcomment" value="1"> 发表评论</label>&nbsp;&nbsp;
							<label for="q6"><input id="q6" <{if $sendmessage eq 1}>checked<{/if}> type="checkbox" name="sendmessage" value="1"> 发站内信</label>
        					</span>
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button"  value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<{$url}>/del/id/<{$id}>'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


