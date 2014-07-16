<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 23:37:56
         compiled from "./home/views/default\message\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9053c54aa4e85eb9-30529944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd314ed8fb161312becd951cbe7c70a9d77e1b232' => 
    array (
      0 => './home/views/default\\message\\index.tpl',
      1 => 1405438673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9053c54aa4e85eb9-30529944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c54aa507c2b6_27233821',
  'variables' => 
  array (
    'message' => 0,
    'url' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c54aa507c2b6_27233821')) {function content_53c54aa507c2b6_27233821($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


     <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
     <div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/add/id/<?php echo $_smarty_tpl->tpl_vars['msg']->value['uid'];?>
">
                回信<br>
			</a>
		    来信人：<?php echo $_smarty_tpl->tpl_vars['msg']->value['uname'];?>

            <br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/id/<?php echo $_smarty_tpl->tpl_vars['msg']->value['id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['msg']->value['state']==1){?><strong><?php echo $_smarty_tpl->tpl_vars['msg']->value['title'];?>
</strong><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['msg']->value['title'];?>
<?php }?>
            </a>
		    时间：<?php echo $_smarty_tpl->tpl_vars['msg']->value['time'];?>

	</div>
	<hr>
	<?php } ?>	
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>