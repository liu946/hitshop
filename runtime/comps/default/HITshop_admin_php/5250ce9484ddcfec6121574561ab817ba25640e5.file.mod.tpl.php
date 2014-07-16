<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:25:05
         compiled from "./admin/views/default\cat\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1581253c5c6610fbb17-31855231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5250ce9484ddcfec6121574561ab817ba25640e5' => 
    array (
      0 => './admin/views/default\\cat\\mod.tpl',
      1 => 1404103574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581253c5c6610fbb17-31855231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c6611e9fd0_58221325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c6611e9fd0_58221325')) {function content_53c5c6611e9fd0_58221325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>修改栏目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="light-row">
						<span class="col_width">上级分类</span>
							<?php echo $_smarty_tpl->tpl_vars['select']->value;?>

						</li>
					<li class="dark-row">
						<span class="col_width">分类标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="name" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">栏目描述</span>
						<textarea class="text-box" name="info" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['info'];?>
</textarea>
					</li>
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>