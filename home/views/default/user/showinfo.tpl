<{ include file="public/header.tpl" }>


<div style="margin:20px;">
<div class="panel panel-default">
<div class="panel-body">

          <div style="margin-left:45px;float:left">
			<img src="<{$root}>/upfile/user/<{ if $owner.upic }><{$user.upic}><{ else }>default.gif<{ /if }>"alt="..." width="100px" height="100px" class="img-circle"/>
          </div>
		  <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>用户名</strong>&nbsp;&nbsp;&nbsp;&nbsp;<{$owner.username}></p>
			<p><strong>E-mail</strong>&nbsp;&nbsp;&nbsp;&nbsp;<{$owner.email}></p>
		    <p><strong>性别</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{ if $owner.sex eq 0 }>女<{ else if $owner.sex eq 1 }>男<{ else }>保密<{ /if }></p>
		  </div>
		  <div style="width:250px;float:left;margin-left:20px;">
			<p><strong>QQ</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$owner.qq}></p>
			<p><strong>手机</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$owner.phone}></p>

		 </div>
		 <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>邮编</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{$owner.postcode}></p>
            <p><strong>个性签名</strong>&nbsp;&nbsp;<{$owner.info}></p>
        </div>		
</div>
	
</div>
</div>
<{ include file="public/footer.tpl" }>

