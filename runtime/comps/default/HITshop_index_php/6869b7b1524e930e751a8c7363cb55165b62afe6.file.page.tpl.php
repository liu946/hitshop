<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 23:37:27
         compiled from "./home/views/default\message\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260053c54ab7007145-87870909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6869b7b1524e930e751a8c7363cb55165b62afe6' => 
    array (
      0 => './home/views/default\\message\\page.tpl',
      1 => 1401802582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260053c54ab7007145-87870909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c54ab70f1745_46855029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c54ab70f1745_46855029')) {function content_53c54ab70f1745_46855029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/add/id/<?php echo $_smarty_tpl->tpl_vars['msg']->value['uid'];?>
">
                回信<br>
			</a>
		    来信人：<?php echo $_smarty_tpl->tpl_vars['msg']->value['uname'];?>

            <br>
			
                <h3><?php echo $_smarty_tpl->tpl_vars['msg']->value['title'];?>
</h3>
            
		    时间：<?php echo $_smarty_tpl->tpl_vars['msg']->value['time'];?>

            <br><?php echo $_smarty_tpl->tpl_vars['msg']->value['msg'];?>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>