<{ include file="public/header.tpl" }>
<div style="margin:20px;">
<div class="panel panel-default">
<div class="panel-body">

          <div style="margin-left:45px;float:left">
			<img src="<{$root}>/upfile/user/<{ if $user.upic }><{$user.upic}><{ else }>default.gif<{ /if }>"alt="..." width="100px" height="100px" class="img-circle"/>
          </div>
		  <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>用户名</strong>&nbsp;&nbsp;&nbsp;&nbsp;<{$user.username}></p>
			<p><strong>E-mail</strong>&nbsp;&nbsp;&nbsp;&nbsp;<{$user.email}></p>
		    <p><strong>性别</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{ if $user.sex eq 0 }>女<{ else if $user.sex eq 1 }>男<{ else }>保密<{ /if }></p>
		  </div>
		  <div style="width:250px;float:left;margin-left:20px;">
			<p><strong>QQ</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$user.qq}></p>
			<p><strong>手机</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$user.phone}></p>
		    <p><strong>真实姓名</strong>&nbsp;&nbsp;&nbsp;<{$user.realname}></p>
		    <p><strong>身份证</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$user.shenfennum}></p>
		 </div>
		 <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>预设地址</strong>&nbsp;&nbsp;&nbsp;&nbsp;<{$user.address}></p>
			<p><strong>邮编</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$user.postcode}></p>
            <p><strong>个性签名</strong>&nbsp;&nbsp;<{$user.info}></p>
       		<td colspan="2"><a href="<{$url}>/mod" class="btn btn-primary" role="button">修改</a></td>
        </div>		
</div>
	
</div>
</div>
<{ include file="public/footer.tpl" }>

