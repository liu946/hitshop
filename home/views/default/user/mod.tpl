<{ include file="public/header.tpl" }>
<div class="panel panel-default">
<div class="panel-body">
<center>
<table>
	<form  method="post" action="<{$url}>/update">
	<input type="hidden" name="id" value="<{$user.id}>">
						
		<img src="<{$root}>/upfile/user/<{ if $user.upic }><{$user.upic}><{ else }>default.gif<{ /if }>"alt="..." width="100px" height="100px" class="img-circle"/>
		
			<th>用户名</th><td><{$user.username}>&nbsp;</td>
		</tr>
		<tr>
			<th>E-mail</th><td><input type="text" name="email" maxlength="80" size="40" value="<{$user.email}>">&nbsp;</td>
		</tr>
		<tr>
			<th>性别</th>
			<td>
				<input type="radio" name="sex"  <{if $user.sex eq "1" }> checked <{/if}> value="1"> 男
				<input type="radio" name="sex" <{if $user.sex eq "0" }> checked <{/if}> value="0"> 女
				<input type="radio" name="sex" <{if $user.sex eq "2" }> checked <{/if}> value="2"> 保密
			</td>
		</tr>
		<tr>
			<th>QQ</th><td><input type="text" name="qq" maxlength="80" size="40" value="<{$user.qq}>">&nbsp;</td>
		</tr>
		<tr>
			<th>手机</th><td><input type="text" name="phone" maxlength="80" size="40" value="<{$user.phone}>">&nbsp;</td>
		</tr>
		<tr>
			<th>真实姓名</th><td><input type="text" name="realname" maxlength="80" size="40" value="<{$user.realname}>">&nbsp;</td>
		</tr>
		<tr>
			<th>身份证</th><td><input type="text" name="shenfennum" maxlength="80" size="40" value="<{$user.shenfennum}>">&nbsp;</td>
		</tr>
		<tr>
			<th>预设地址</th><td><input type="text" name="address" maxlength="80" size="40" value="<{$user.address}>">&nbsp;</td>
		</tr>
		<tr>
			<th>邮编</th><td><input type="text" name="postcode" maxlength="80" size="40" value="<{$user.postcode}>">&nbsp;</td>
		</tr>
		<tr>
			<th>个性签名</th><td><input type="text" name="info" maxlength="80" size="40" value="<{$user.info}>">&nbsp;</td>
		</tr>
		<tr>
		<center>
		<td>
			<input type="submit" class="btn btn-primary" role="button" value="确认修改"></td>
		</center></tr>
		

	</form>	
		</table>
	</center>
</div>
</div>
<{ include file="public/footer.tpl" }>

