<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>商品管理>管理商品</div>
			</div>	
		    <{ include file="public/title.tpl" }>	  
			<div class="msg-box">
				<ul class="viewmess">
					  <form  method="post" action="<{$url}>/unconfirm/page/<{$page}><{if $search}>/search/<{$search}><{/if}><{if $gid}>/gid/<{$gid}><{/if}><{if $disable}>/disable/<{$disable}><{/if}>" onsubmit="return confirm('你确定要下架选中的商品吗?')" >
					<{if $disable ne 1}>
					<!--
                        <li class="light-row">
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户组：<{$select}> &nbsp;&nbsp;

						输入需要查找的用户名：
						<input type="text" size="20" id="sea" name="username" value="<{$search}>"> 
						<input onclick="search()" type="button" class="button" value="搜索用户">
					
					</li>
                        -->

					<script>
						var sel=document.getElementById("sel");
						
						sel.onchange=function(){
							var gid=this.options[this.selectedIndex].value;
							window.location="<{$url}>/index/gid/"+gid;
						}
						function search(){
							var gid=sel.options[sel.selectedIndex].value;
							var sval=document.getElementById("sea").value;	
							window.location="<{$url}>/index/gid/"+gid+"/search/"+sval;

						}
					</script>
					<{/if}>
					
				        <{ section name=doc loop=$goods }>
						<li class="<{if $goods[doc].state eq 0}>red-row<{elseif $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="padding-top:5px; padding-bottom:5px">
							<{ if $goods[doc].state eq 0 }>
								<span class="list_width red_font">	
							<{ else }>
								<span class="list_width">
							<{/if}>
							
								<input type="checkbox" name="id[]"  value="<{ $goods[doc].id }>">
						
						
						
							<a target="_blank" href="<{$root}>/index.php/good/index/id/<{$goods[doc].id}>"><{ $goods[doc].name }></a>
							</span>
							
							<span class="list_width" style="width:200px"><{ $goods[doc].email }></span>
							<span class="list_width"><{ $goods[doc].regtime|date_format:"%Y-%m-%d" }></span>
				
							<span class="list_width" style="width:180px;">
						  <{if $goods[doc].state eq 0}>
							【<a href="<{$url}>/confirm/id/<{ $goods[doc].id }>/page/<{$page}>">上架</a>】 <del>【下架】</del>
                          <{else if}>
                              <del>【上架】</del>
                            【<a href="<{$url}>/unconfirm/id/<{ $goods[doc].id }>/page/<{$page}>">下架</a>】
                          <{/if}>
							【<a onclick="return confirm('确定要删除商品<{ $goods[doc].username }>吗？')" href="<{$url}>/del/id/<{ $goods[doc].id }>/page/<{$page}><{if $search}>/search/<{$search}><{/if}><{if $gid}>/gid/<{$gid}><{/if}><{if $disable}>/disable/<{$disable}><{/if}>">删除</a>】
							
							</span>
						</li>
					<{ sectionelse }>
						<li class="light-row">
							该页没有商品
						</li>
					<{ /section }>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:15px;width:240px"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							
							<input  name="cons" type="submit" title="下架" value="下架">&nbsp;&nbsp;
						 </span> 
					</li>
				
					<li class="dark-row" style="text-align:right">
						
							<{$fpage}>
					</li>
					 </form>
				</ul>	
			</div>
                   
		</div>
<{include file="public/footer.tpl"}>	


