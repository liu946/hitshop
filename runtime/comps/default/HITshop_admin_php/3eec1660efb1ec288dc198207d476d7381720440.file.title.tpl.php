<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:29:20
         compiled from "./admin/views/default\public\title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:803153c52cb0d54873-77845409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eec1660efb1ec288dc198207d476d7381720440' => 
    array (
      0 => './admin/views/default\\public\\title.tpl',
      1 => 1317277912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803153c52cb0d54873-77845409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mess' => 0,
    'tmess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c52cb0d54876_90466698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c52cb0d54876_90466698')) {function content_53c52cb0d54876_90466698($_smarty_tpl) {?><div id="outmess" class="tip-msg <?php if ($_smarty_tpl->tpl_vars['mess']->value=="error"){?>error-msg<?php }?><?php if ($_smarty_tpl->tpl_vars['mess']->value=="ok"){?>sucess-msg<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['tmess']->value;?>
		
</div>
<?php }} ?>