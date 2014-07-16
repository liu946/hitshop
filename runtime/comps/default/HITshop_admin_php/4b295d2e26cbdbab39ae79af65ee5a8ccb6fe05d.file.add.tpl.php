<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:25:11
         compiled from "./admin/views/default\cat\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348553c5c6673eefc3-16108759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b295d2e26cbdbab39ae79af65ee5a8ccb6fe05d' => 
    array (
      0 => './admin/views/default\\cat\\add.tpl',
      1 => 1404103686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348553c5c6673eefc3-16108759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c66749ade7_84107422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c66749ade7_84107422')) {function content_53c5c66749ade7_84107422($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>添加栏目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">上级栏目</span>
							<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
	<label for="jz"><input id="jz" type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1"> 记住选项</label>
						</li>
					<li class="dark-row">
						<span class="col_width">分类标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="name" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">分类描述</span>
						<textarea class="text-box" name="info" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['info'];?>
</textarea>
					</li>
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>