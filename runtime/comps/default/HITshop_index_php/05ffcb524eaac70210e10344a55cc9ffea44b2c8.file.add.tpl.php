<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 07:12:50
         compiled from "./home/views/default\evaluate\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258053c5b57273b1d0-02802759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ffcb524eaac70210e10344a55cc9ffea44b2c8' => 
    array (
      0 => './home/views/default\\evaluate\\add.tpl',
      1 => 1401789538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258053c5b57273b1d0-02802759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'indent' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5b5727b81e9_28300106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5b5727b81e9_28300106')) {function content_53c5b5727b81e9_28300106($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
	<input type="hidden"  name="indentid" value="<?php echo $_smarty_tpl->tpl_vars['indent']->value['id'];?>
">
	<ul>	
		<li class="light-row">
			<span class="col_width">商家<span class="red_font"></span></span>
			<span class="col_width"><?php echo $_smarty_tpl->tpl_vars['indent']->value['ownername'];?>
<span class="red_font"></span></span>
            
		</li>
		<li class="light-row">
			<span class="col_width">商品</span>
            <?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>

            
		</li>
		<li class="light-row" style="margin:0px; padding:0px">
			<span class="col_width" style="margin-top:30px">消息内容 500字以内 请勿输入html标签</span>
			<br>
            <textarea name="evaluate" rows="5" cols="80">请在此处输入评价！</textarea>
		</li>
		<li class="light-row">
						<span class="col_width">&nbsp;</span><input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
		</li>
	</ul>
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>