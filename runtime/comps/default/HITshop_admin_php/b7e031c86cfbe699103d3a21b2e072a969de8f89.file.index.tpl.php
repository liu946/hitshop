<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:25:00
         compiled from "./admin/views/default\cat\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2888753c5c65ca60f71-82094300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7e031c86cfbe699103d3a21b2e072a969de8f89' => 
    array (
      0 => './admin/views/default\\cat\\index.tpl',
      1 => 1404102744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2888753c5c65ca60f71-82094300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c65cb01218_79149742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c65cb01218_79149742')) {function content_53c5c65cb01218_79149742($_smarty_tpl) {?><script>
	var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>编辑栏目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">栏目名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php echo $_smarty_tpl->tpl_vars['list']->value;?>


				</ul>	
			</div>
           
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>