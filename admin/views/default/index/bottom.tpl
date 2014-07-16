<{include file="public/header.tpl"}>	
		<div id="bottom">
			<ul>
				<li class="left">版本：1.0beta&nbsp;&nbsp;作者：HIT-SHOP 制作组</li>
					<li class="right"> 
						本系统现有： &nbsp; 

						<{if $smarty.session.goodsadmin}>
							<a target="main" href="<{$app}>/article">商品【<span class="red_font"><{$goods}></span>】篇</a>&nbsp; &nbsp; 
							<a target="main" href="<{$app}>/play">成交量【<span class="red_font"><{$chengjiaonum}></span>】个</a>
						<{/if}>
						<{if $smarty.session.webadmin}>
							<a target="main" href="<{$app}>/flink">友情链接【<span class="red_font"><{$flinks}></span>】个</a>
						<{/if}>
						<{if $smarty.session.useradmin}>
							<a target="main" href="<{$app}>/user">用户【<span class="red_font"><{$users}></span>】个 </a>&nbsp; &nbsp; 
						<{/if}>
					</li>	
			</ul>	
		</div>
<{include file="public/footer.tpl"}>	


