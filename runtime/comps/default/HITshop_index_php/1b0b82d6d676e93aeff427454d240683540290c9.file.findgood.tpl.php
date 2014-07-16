<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:10:29
         compiled from "./home/views/default\goodlist\findgood.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196253c5c2f52a5178-54024922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b0b82d6d676e93aeff427454d240683540290c9' => 
    array (
      0 => './home/views/default\\goodlist\\findgood.tpl',
      1 => 1398697214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196253c5c2f52a5178-54024922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'public' => 0,
    'message' => 0,
    'url' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c2f558b520_29218939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c2f558b520_29218939')) {function content_53c5c2f558b520_29218939($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"> </script>
<div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<div id="page">
	数据加载中....
</div>

<script>
	
	var pageobj = document.getElementById("page");
	//声明一个数组做为缓存
	var cache=new Array();

	function setPage(url) {
		if(!cache[url])	{	
			Ajax().get(url, function(data){
				pageobj.innerHTML=data;
				cache[url]=data;
			});
		}else {
			pageobj.innerHTML=cache[url];
		}
	}
	
	setPage('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/fgpage/page/1/search/'+'<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
');
</script>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>