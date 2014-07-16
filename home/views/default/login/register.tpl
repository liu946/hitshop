<{ include file="public/header.tpl" }>

		<script src="<{$public}>/js/ajax3.0.js"></script>
		<script>
			var url='<{$url}>';
		</script>
		<script src="<{$res}>/js/common.js"></script>
		<script src="<{$res}>/js/register.js"></script>
    <div style="padding:40px">

		<div id="reg" class="panel panel-default">
       			<div class="panel-heading">
              <strong style="width:90%;">
                <{$smarty.const.APP_NAME}>-会员注册
              </strong>
            </div>
			
        	<div class="panel-body">
          <div style="padding-left: 50px;padding-right: 50px;padding-top:50px">
					<form name="form2" class="bs-example bs-example-form" action="<{$url}>/insert" method="post" onsubmit="return validate('click')">		
     					 
                  <div class="input-group">
                                  <span class="input-group-addon">用户名</span>
                                  <input name="username"  type="text" id="username" class="form-control">
                                  <span class="input-group-addon">请输入用户名</span>
                                  
                               </div>
                             <br>
       						<div class="input-group">
                      <span class="input-group-addon">登录密码</span>
          						<input name="userpwd" type="password" id="userpwd" class="form-control">
                      <span class="input-group-addon">请输入密码</span>
                                   
                  </div>
                  <br>
       						<div class="input-group">
                      <span class="input-group-addon">确认密码</span>
         						  <input name="repwd" type="password" id="repwd" value="" size="20"  class="form-control">
                      <span class="input-group-addon">请输入确认</span>
                  </div>  
                 <br>
        					<div class="input-group">
                                  <span class="input-group-addon">电子邮箱</span>
         						  <input name="email" type="text" id="email" class="form-control">
                                  <span class="input-group-addon">请输入邮箱</span>
                  </div>
                  <br>           
        					<div class="col-lg-6" style="width: 50%">
                      <div class="input-group">
                                        <span class="input-group-addon">性别：</span>
                                        <span class="input-group-addon">
        						            <input type="radio" name="sex" value="1" /> 男 &nbsp;
                                        </span>
                                            <span class="input-group-addon">
        						                <input type="radio" name="sex" value="2" /> 女 &nbsp;
                                            </span>
                                            <span class="input-group-addon">
         						  <input name="sex" type="radio" value="0" checked="checked" /> 保密 
                                            </span>
						          </div>
                  </div>
                  <br><br><br>
                  <div class="input-group">
                    <span class="input-group-addon">验证码  <img src="<{$url}>/code" alt="看不清楚，换一张" style="cursor: pointer;" onclick="this.src='<{$url}>/code/'+Math.random()" /></span>
  						 
         						<input name="code" type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();" id="vdcode" size="6"  class="form-control" />
         						 
							      <span class="input-group-addon">请输入验证码</span>
      					  </div>
        					
             					 <hr >
              					<span>&nbsp;&nbsp;</span>
                  						<input style="height:30px" class="btn btn-primary" type="submit" value="注 册">
           				 </form>		
			         </div>
          </div>
		</div>

</div>
<{ include file="public/footer.tpl" }>


