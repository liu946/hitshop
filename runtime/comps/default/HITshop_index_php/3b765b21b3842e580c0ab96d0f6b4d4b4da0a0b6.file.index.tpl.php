<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 22:18:08
         compiled from "./home/views/default\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1646653c5382064f4c4-49798937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b765b21b3842e580c0ab96d0f6b4d4b4da0a0b6' => 
    array (
      0 => './home/views/default\\user\\index.tpl',
      1 => 1404388435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646653c5382064f4c4-49798937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'user' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c538207129c7_88822886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c538207129c7_88822886')) {function content_53c538207129c7_88822886($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="margin:20px;">
<div class="panel panel-default">
<div class="panel-body">

          <div style="margin-left:45px;float:left">
			<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?>default.gif<?php }?>"alt="..." width="100px" height="100px" class="img-circle"/>
          </div>
		  <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>用户名</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</p>
			<p><strong>E-mail</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
		    <p><strong>性别</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==0){?>女<?php }elseif($_smarty_tpl->tpl_vars['user']->value['sex']==1){?>男<?php }else{ ?>保密<?php }?></p>
		  </div>
		  <div style="width:250px;float:left;margin-left:20px;">
			<p><strong>QQ</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
</p>
			<p><strong>手机</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</p>
		    <p><strong>真实姓名</strong>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
</p>
		    <p><strong>身份证</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['shenfennum'];?>
</p>
		 </div>
		 <div style="width:200px;float:left;margin-left:20px;">
			<p><strong>预设地址</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</p>
			<p><strong>邮编</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
</p>
            <p><strong>个性签名</strong>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
</p>
       		<td colspan="2"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod" class="btn btn-primary" role="button">修改</a></td>
        </div>		
</div>
	
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>