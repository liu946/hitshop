<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 22:18:12
         compiled from "./home/views/default\user\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:387553c53824453815-62259240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '920b74651085c3af55391c519b71420c74921e1b' => 
    array (
      0 => './home/views/default\\user\\mod.tpl',
      1 => 1404388080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387553c53824453815-62259240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'user' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c53824516d10_87501270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c53824516d10_87501270')) {function content_53c53824516d10_87501270($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel panel-default">
<div class="panel-body">
<center>
<table>
	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
						
		<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?>default.gif<?php }?>"alt="..." width="100px" height="100px" class="img-circle"/>
		
			<th>用户名</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&nbsp;</td>
		</tr>
		<tr>
			<th>E-mail</th><td><input type="text" name="email" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>性别</th>
			<td>
				<input type="radio" name="sex"  <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=="1"){?> checked <?php }?> value="1"> 男
				<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=="0"){?> checked <?php }?> value="0"> 女
				<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=="2"){?> checked <?php }?> value="2"> 保密
			</td>
		</tr>
		<tr>
			<th>QQ</th><td><input type="text" name="qq" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>手机</th><td><input type="text" name="phone" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>真实姓名</th><td><input type="text" name="realname" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>身份证</th><td><input type="text" name="shenfennum" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['shenfennum'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>预设地址</th><td><input type="text" name="address" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>邮编</th><td><input type="text" name="postcode" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>个性签名</th><td><input type="text" name="info" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
">&nbsp;</td>
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
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>