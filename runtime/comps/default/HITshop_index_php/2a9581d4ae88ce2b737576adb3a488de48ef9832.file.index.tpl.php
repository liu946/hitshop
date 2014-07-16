<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 23:11:21
         compiled from "./home/views/default\shopcar\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3135953c53ef58ce153-96531935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9581d4ae88ce2b737576adb3a488de48ef9832' => 
    array (
      0 => './home/views/default\\shopcar\\index.tpl',
      1 => 1405437076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135953c53ef58ce153-96531935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c53ef5991655_95199788',
  'variables' => 
  array (
    'goods' => 0,
    'root' => 0,
    'good' => 0,
    'app' => 0,
    'url' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c53ef5991655_95199788')) {function content_53c53ef5991655_95199788($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel panel-default">
          	<div class="panel-body">
	<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
	<div class="panel panel-default" style="margin-left:40px;margin-right:40px;">
	<div style="height:150px">
		 <div style="float:left">
		 <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
" alt="..." width="180px" height="180px" class="media-object"/></a></div>
		<div style="width:200px;float:left;margin-left:20px"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></div>
		<div style="width:200px;float:left">
		<div>单价&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</div><br> 
		<div>单位&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
</div><br>
		<div>购买数量&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['buynum'];?>
</div><br>
		<div>总计&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['sprice'];?>
</div>
		</div>
		<div style="width:200px;float:left">
		<h5><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/add/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">联系卖家</a></h5>
		<h5><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">查看卖家信息卖家</a></h5>
		<h5><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['carid'];?>
">删除</a></h4>
		<h5><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/indentconfirm/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['carid'];?>
">确认订单</a></h5>
		</div>
		</div><hr>
	</div>
	<?php } ?>
	<div>购物车结算&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
&nbsp;元</div><!--<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/allindentconfirm/">全部确认订单</a>-->
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>