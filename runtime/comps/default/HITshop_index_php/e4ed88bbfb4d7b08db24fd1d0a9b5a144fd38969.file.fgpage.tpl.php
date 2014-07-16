<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:10:29
         compiled from "./home/views/default\goodlist\fgpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436053c5c2f5a426c9-00647667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ed88bbfb4d7b08db24fd1d0a9b5a144fd38969' => 
    array (
      0 => './home/views/default\\goodlist\\fgpage.tpl',
      1 => 1404485052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436053c5c2f5a426c9-00647667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'good' => 0,
    'app' => 0,
    'root' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c2f5bd4ca5_73783469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c2f5bd4ca5_73783469')) {function content_53c5c2f5bd4ca5_73783469($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\HITshop\\brophp\\libs\\plugins\\modifier.date_format.php';
?>
	

	<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?> 
	<div class="panel panel-default" >
<div class="panel-body" >
			<div class="media" >
			<a href="<$app>/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
				<a class="pull-left" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
				<img width="160px" height="180px" class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"/></a>
				  <div class="media-body">
				   <h3 style="color:black" class="media-heading">
				   <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></h4>
                <h2 style=" font-weight:bolder;color:red;" class="media-heading">￥<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</h4>
				<h4 class="media-heading">原价：<del><?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
</del></h4>
				<h4 class="media-heading">剩余数量：<?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
</h4>
				<h4 class="media-heading">简单介绍：<?php echo $_smarty_tpl->tpl_vars['good']->value['jieshao'];?>
</h4>
				<h4 class="media-heading">已售：<?php echo $_smarty_tpl->tpl_vars['good']->value['chengjiaonum'];?>
</h4>
				<h4 class="media-heading">浏览：<?php echo $_smarty_tpl->tpl_vars['good']->value['checknum'];?>
</h4>
				<h4 class="media-heading">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['good']->value['fbtime'],"%Y-%m-%d");?>
</h4>
			</a>
			<h5 class="media-heading">
			<a href="/HITshop/index.php/message/add/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">联系卖家/</a>
			<a href="/HITshop/index.php/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">
			查看卖家信息</a></h4>
			</div>
			</div>
			</div>	
</div>

	<?php }
if (!$_smarty_tpl->tpl_vars['good']->_loop) {
?>
		<tr> <td colspan="7">没有商品 </td></tr>
	<?php } ?>	


    <center><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</center>

<?php }} ?>