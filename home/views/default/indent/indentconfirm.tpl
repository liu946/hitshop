<{ include file="public/header.tpl" }>
		<form name="indentconfirm"  action="<{$url}>/insert" method="post">		
     					<ul>
       						
							<{$indentmsg}>
        					<li> 确认订单信息 </li>
        					<li><span>卖家：</span>
          						<{$owner.username}> <a href="<{$app}>/user/showinfo/id/<{$owner.id}>"> 我要联系他</a></li>
								
       						<div>
								<a href="<{$app}>/good/index/id/<{$good.id}>">
								<font color=#777777>￥<del><{$good.proprice}></del></font>
								<font color=#ff1111>￥<{$good.price}></font>
								</a>
							</div>
       						<li><span>购买数量：</span>
         						 <{$indent.num}>
							</li>
       						<li><span>总价格：</span>
         						 <{$indent.num * $good.price}>
							</li>
        					<font color=#ff1111>请重点确认以下内容，这样才能快速得到宝贝哦！</font>
							
						<li><span>我的QQ：</span>
         					 <input name="qq" type="text" value="<{$user.qq}>"></li>
 							
						<li><span>我的电话：</span>
         					 <input name="phone" type="text" value="<{$user.phone}>"></li>
 							
						<li><span>我的邮编：</span>
         					 <input name="postcode" type="text" value="<{$user.postcode}>"></li>
 							
						<li><span>我的地址：</span>
         					<input name="address" type="text" size="50" value="<{$user.address}>"></li>
							<input name="indent" type="hidden" value="<{$indent.id}>">
							


					</ul>
     					 <hr />
      					<ul>
      						  <li><span>&nbsp;</span>
          						<input class="button"  type="submit" value="确认订单"onclick="return confirm('提交订单后不可修改，确定提交吗？')">
       						 </li>
      					</ul>
   				 </form>		
	

<{ include file="public/footer.tpl" }>