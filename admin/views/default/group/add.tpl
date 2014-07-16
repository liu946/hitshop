<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">用户管理>用户组管理>添加用户组</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">用户组名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="description" type="text"  value="" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>

					<li class="light-row">
						<span class="col_width">设置权限</span>
						<span style="height:30px;">				
					                            <input  <{if $groups[doc].puser eq 1}>checked<{/if}> type="checkbox" name="puser" value="1">编辑用户  &nbsp;&nbsp;&nbsp;
                            <input  <{if $groups[doc].pgood eq 1}>checked<{/if}> type="checkbox" name="pgood" value="1">编辑商品 &nbsp;&nbsp;&nbsp;
                            <input <{if $groups[doc].pconfig eq 1}>checked<{/if}> type="checkbox" name="pconfig" value="1">编辑配置 &nbsp;&nbsp;&nbsp;
                            <input <{if $groups[doc].pcolunm eq 1}>checked<{/if}> type="checkbox" name="pcolunm" value="1">编辑公告链接 &nbsp;&nbsp;&nbsp;
        					</span>
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


