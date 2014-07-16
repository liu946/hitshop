<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 22:46:09
         compiled from "./home/views/default\good\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3173353c53eb1821d33-67894982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09a7e5405e719a71400bf89331afba933ee28c1f' => 
    array (
      0 => './home/views/default\\good\\mod.tpl',
      1 => 1401287224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3173353c53eb1821d33-67894982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'good' => 0,
    'starttime' => 0,
    'endtime' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c53eb195a534_85376979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c53eb195a534_85376979')) {function content_53c53eb195a534_85376979($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update" enctype="multipart/form-data">
	
	
	
    <div>cid&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
</div><br>
    <input type="text"   name="id" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
    <div>name&nbsp;&nbsp;<input type="text"   name="name" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
"></div><br> 
    
    <div>simg&nbsp;&nbsp;<input type="file"   name="simg" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"></div><br> 
    <div>bimg&nbsp;&nbsp;<input type="file"   name="bimg" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['bimg'];?>
"></div><br>
    <div>price&nbsp;&nbsp;<input type="text"   name="price" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
"></div><br> 
    <div>proprice&nbsp;&nbsp;<input type="text"   name="proprice" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
"></div><br>
    <div>danwei&nbsp;&nbsp;<input type="text"   name="danwei" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
"></div><br>
    <div>num&nbsp;&nbsp;<input type="text"   name="num" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
"></div><br>
	<div>jieshao&nbsp;&nbsp;<input type="text"   name="jieshao" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['jieshao'];?>
"></div><br>
	<div >
	<span>起始日期<span class="red_font">*</span></span>
		<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
 &nbsp;请选择开始时间！	
	</li>
	
	<span class="col_width">截止日期<span class="red_font">*</span></span>
	<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
 &nbsp;请选择下线时间,<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
	<span class="col_width" style="margin-top:30px">详细介绍</span>

	
	<li class="light-row" style="margin:0px; padding:0px">
		<textarea cols="80" rows="10" name="xiangxi" style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['xiangxi'];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['xiangxi'];?>
</textarea>
		<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

	</li>
	<input type="submit" class="button" value="保存">
    </form>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>