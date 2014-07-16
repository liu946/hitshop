<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">用户管理>用户组管理>编辑用户组</div>
			</div>	
		    <{ include file="public/title.tpl" }>	  
			<div class="msg-box">
				<ul class="viewmess">
				
				
					<li class="dark-row">
						<span class="list_width width_font">用户组</span>
						<span class="list_width width_font" style="width:400px">用户组权限</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <{ section name=doc loop=$groups }>
						<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="padding-top:10px; padding-bottom:10px">
						<form  method="post" action="<{$url}>/update">
                        <input type="hidden" name="gid" value="<{$groups[doc].gid}>">
						<span style="font-weight:bold" class="list_width">
						<input name="description" type="text"  value="<{ $groups[doc].description}>" class="text-box">      </span>
						<span class="list_width" style="width:400px"><!--<{ $groups[doc].description|truncate:"50" }>-->
                            <input  <{if $groups[doc].puser eq 1}>checked<{/if}> type="checkbox" name="puser" value="1">编辑用户  &nbsp;&nbsp;&nbsp;
                            <input  <{if $groups[doc].pgood eq 1}>checked<{/if}> type="checkbox" name="pgood" value="1">编辑商品 &nbsp;&nbsp;&nbsp;
                            <input <{if $groups[doc].pconfig eq 1}>checked<{/if}> type="checkbox" name="pconfig" value="1">编辑配置 &nbsp;&nbsp;&nbsp;
                            <input <{if $groups[doc].pcolunm eq 1}>checked<{/if}> type="checkbox" name="pcolunm" value="1">编辑公告链接 &nbsp;&nbsp;&nbsp;
                            
                          </span>
						  
							<span class="list_width" style="width:160px;">

						<input type="submit" class="button"  value="修改">&nbsp;
						<input type="reset" class="button" value="重置">&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<{$url}>/del/gid/<{$groups[doc].gid}>'" class="button" value="删除">
							</span>
                            </form>
						</li>
					<{ /section }>
				</ul>	
			</div>
                   
		</div>
<{include file="public/footer.tpl"}>	


