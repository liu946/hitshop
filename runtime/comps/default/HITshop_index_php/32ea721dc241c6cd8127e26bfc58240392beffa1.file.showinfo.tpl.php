<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 23:22:51
         compiled from "./home/views/default\user\showinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2465153c5474bc819f5-68763069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ea721dc241c6cd8127e26bfc58240392beffa1' => 
    array (
      0 => './home/views/default\\user\\showinfo.tpl',
      1 => 1405434152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2465153c5474bc819f5-68763069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'owner' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5474bd410a5_25088830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5474bd410a5_25088830')) {function content_53c5474bd410a5_25088830($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div style="margin:20px;">
<div class="panel panel-default">
<div class="panel-body">

          <div style="margin-left:45px;float:left">
			<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php if ($_smarty_tpl->tpl_vars['owner']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?>default.gif<?php }?>"alt="..." width="100px" height="100px" class="img-circle"/>
          </div>
		  <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>用户名</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['username'];?>
</p>
			<p><strong>E-mail</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['email'];?>
</p>
		    <p><strong>性别</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['owner']->value['sex']==0){?>女<?php }elseif($_smarty_tpl->tpl_vars['owner']->value['sex']==1){?>男<?php }else{ ?>保密<?php }?></p>
		  </div>
		  <div style="width:250px;float:left;margin-left:20px;">
			<p><strong>QQ</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['qq'];?>
</p>
			<p><strong>手机</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['phone'];?>
</p>

		 </div>
		 <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>邮编</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['postcode'];?>
</p>
            <p><strong>个性签名</strong>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['info'];?>
</p>
        </div>		
</div>
	
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>