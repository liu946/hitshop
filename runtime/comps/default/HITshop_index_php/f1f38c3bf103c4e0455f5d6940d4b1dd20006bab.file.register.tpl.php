<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 22:11:29
         compiled from "./home/views/default\login\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:666653c535f01b4350-74929199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f38c3bf103c4e0455f5d6940d4b1dd20006bab' => 
    array (
      0 => './home/views/default\\login\\register.tpl',
      1 => 1405433483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '666653c535f01b4350-74929199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c535f02c5a58_53111393',
  'variables' => 
  array (
    'public' => 0,
    'url' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c535f02c5a58_53111393')) {function content_53c535f02c5a58_53111393($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
		<script>
			var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
		</script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/register.js"></script>
    <div style="padding:40px">

		<div id="reg" class="panel panel-default">
       			<div class="panel-heading">
              <strong style="width:90%;">
                <?php echo @APP_NAME;?>
-会员注册
              </strong>
            </div>
			
        	<div class="panel-body">
          <div style="padding-left: 50px;padding-right: 50px;padding-top:50px">
					<form name="form2" class="bs-example bs-example-form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post" onsubmit="return validate('click')">		
     					 
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
                    <span class="input-group-addon">验证码  <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code" alt="看不清楚，换一张" style="cursor: pointer;" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code/'+Math.random()" /></span>
  						 
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
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>