<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:15:48
         compiled from "./admin/views/default\base\sysinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3020153c5c434d9ece5-47125530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6515122820e6c59a5ed206e3638f166453f99002' => 
    array (
      0 => './admin/views/default\\base\\sysinfo.tpl',
      1 => 1308903824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3020153c5c434d9ece5-47125530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sysinfo' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c434e3ef99_12663361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c434e3ef99_12663361')) {function content_53c5c434e3ef99_12663361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理>常规设置>系统信息</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="msg-box">
			<ul class="viewmess">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sysinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['iteration']++;
?>
					<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['info']['iteration'])){?>
						<li class="dark-row">
					<?php }else{ ?>
						<li class="light-row">
					<?php }?> 
						<span class="col_width"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

					</li>
				<?php } ?>
			</ul>		
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>