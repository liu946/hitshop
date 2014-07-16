<{include file="public/header.tpl"}>
<div class="panel panel-default">
          	<div class="panel-body">
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>友情链接管理>添加友情连接</div>
			</div>	
		    
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
			<table>
				<ul class="viewmess">
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">网站名称<span class="red_font">&nbsp;&nbsp;*</span></span>
						 <input type="text" class="text-box" name="webname" maxlength="30" size="20" value="<{ $post.webname }>">
					</div>
					<div class="dark-row" style="margin-top:20px;">
						<span class="col_width">地&nbsp;&nbsp;址<span class="red_font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span>
							<input type="text" class="text-box" name="url" maxlength="60" size="40" value="<{ $post.url }>"> &nbsp; 例如：http://www.HITshop.net
					
					</div>
					<!--
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">LOGO<span class="red_font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span>
						<input type="text" class="text-box" name="logo" maxlength="100" size="40" value="<{ $post.logo }>">&nbsp;  网站LOGO图片的真实地址,会自动下载到本地。
					</div>
					-->
						
					<div class="dark-row" style="margin-top:20px;">
					<span class="col_width" style="margin-top:30px">网站描述&nbsp;&nbsp;&nbsp;*</span>
						<textarea class="text-box" name="msg" cols="50" rows="5"><{ $post.msg }></textarea>
					</div>
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">联系人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="rname" maxlength="30" size="10" value="<{ $post.rname }>">
					</div>
					<div class="dark-row" style="margin-top:20px;">
						<span class="col_width">站长Email<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="email" maxlength="60" size="30" value="<{ $post.email }>">
					</div>

					<!--<div class="light-row" style="margin-top:20px;">
						<span class="col_width">显示方式</span>
						
						<input type="radio" name="list" <{if $post.list eq "0" or $post.list eq null}> checked <{/if}> value="0"> 网站名称
						<input type="radio" name="list"  <{if $post.list eq "1"}> checked <{/if}> value="1"> LOGO图片
					</div>-->
					<input type="hidden" name="list" value="0">
<!--no done-->		<!--<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="audit" <{if $post.audit eq "0" or $post.audit eq null}> checked <{/if}> value="0"> 不显示
						<input type="radio" name="audit"  <{if $post.audit eq "1"}> checked <{/if}> value="1"> 显示
					</li>-->
					<input type="hidden" name="audit" value="0">
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="btn btn-primary" name="mod" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="btn btn-primary" value="重 置">
					</div>
				</ul>
             </table>				
			</div>
                    </form>	
		</div>
		</div>
</div>
<{include file="public/footer.tpl"}>	


