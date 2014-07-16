<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:29:20
         compiled from "./admin/views/default\index\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1967753c52cb07af360-18941198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87773a172c0f24b03596bf8b19df49057bfe2b31' => 
    array (
      0 => './admin/views/default\\index\\top.tpl',
      1 => 1402908347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1967753c52cb07af360-18941198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'root' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c52cb0872863_17967458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c52cb0872863_17967458')) {function content_53c52cb0872863_17967458($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	<div id="top">
			<div class="left">
				<a herf="index.php"><img  border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.gif"></a>
			</div>

		
			<div class="right_tool">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit4.gif"></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout" onclick="return confirm('你确定要退出系统吗？')" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit3.gif"></a></li>
					</ul>
			</div>
			<div class="right_user">
				<b>欢迎您-</b><a title="<?php echo $_SESSION['description'];?>
" target="_top" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php/user/index/uid/<?php echo $_SESSION['id'];?>
"><?php echo $_SESSION['username'];?>
</a>&nbsp;【<?php echo $_SESSION['groupdis'];?>
】 &nbsp;&nbsp;
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>