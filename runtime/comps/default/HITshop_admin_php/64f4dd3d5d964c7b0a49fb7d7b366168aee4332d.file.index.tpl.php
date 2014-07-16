<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:29:19
         compiled from "./admin/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2270853c52cafedb267-13328687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f4dd3d5d964c7b0a49fb7d7b366168aee4332d' => 
    array (
      0 => './admin/views/default\\index\\index.tpl',
      1 => 1399109575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2270853c52cafedb267-13328687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c52cb0083465_44569699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c52cb0083465_44569699')) {function content_53c52cb0083465_44569699($_smarty_tpl) {?><html>
	<head>
		<title>HIT-SHOP 后台管理</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="HIT-SHOP 制作组" />
	</head>

	<frameset rows="61,*,24" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu" name="menu" noresize="noresize" scrolling="no" />
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
  		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/bottom" name="bottom" scrolling="No" noresize="noresize" />
	</frameset>
</html>


<?php }} ?>