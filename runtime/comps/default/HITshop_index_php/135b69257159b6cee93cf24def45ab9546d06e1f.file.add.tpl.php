<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 23:23:40
         compiled from "./home/views/default\message\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2662953c5477c2dfde6-97534813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135b69257159b6cee93cf24def45ab9546d06e1f' => 
    array (
      0 => './home/views/default\\message\\add.tpl',
      1 => 1396070976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2662953c5477c2dfde6-97534813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'taruser' => 0,
    'post' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5477c3ca419_98237739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5477c3ca419_98237739')) {function content_53c5477c3ca419_98237739($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
	<input type="hidden"  name="tarid" value="<?php echo $_smarty_tpl->tpl_vars['taruser']->value['id'];?>
">
	<ul>	
		<li class="light-row">
			<span class="col_width">收信人<span class="red_font"></span></span>
			<span class="col_width"><?php echo $_smarty_tpl->tpl_vars['taruser']->value['username'];?>
<span class="red_font"></span></span>
		</li>
		<li class="light-row">
			<span class="col_width">消息题目<span class="red_font">*</span></span>
			<input type="text" class="text-box" name="title" maxlength="30" size="50" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
">
		</li>
		<li class="light-row" style="margin:0px; padding:0px">
			<span class="col_width" style="margin-top:30px">消息内容</span>
			<textarea cols="80" rows="10" name="messageck" style="display: none;" value="请在此处输入消息！"></textarea>
			<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

		</li>
		<li class="light-row">
						<span class="col_width">&nbsp;</span><input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
		</li>
	</ul>
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>