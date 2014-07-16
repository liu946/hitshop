<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:45:59
         compiled from "./home/views/default\goodlist\showclass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:992953c53097e892d6-81304609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b08481d706319b7c0e8134eae55454f7beb12a' => 
    array (
      0 => './home/views/default\\goodlist\\showclass.tpl',
      1 => 1399050828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992953c53097e892d6-81304609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'public' => 0,
    'message' => 0,
    'classshow' => 0,
    'url' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c53097f15cf7_07622607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c53097f15cf7_07622607')) {function content_53c53097f15cf7_07622607($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"> </script>
<div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<div ><h2><?php echo $_smarty_tpl->tpl_vars['classshow']->value;?>
</h2></div>

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
/fspage/page/1/id/'+'<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
</script>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>