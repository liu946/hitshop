<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:29:20
         compiled from "./admin/views/default\index\bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3041653c52cb0ae3874-66373554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35a882e4855ddbc5937126a2c3a9991a06585725' => 
    array (
      0 => './admin/views/default\\index\\bottom.tpl',
      1 => 1399114521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3041653c52cb0ae3874-66373554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'goods' => 0,
    'chengjiaonum' => 0,
    'flinks' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c52cb0bf4f75_84617855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c52cb0bf4f75_84617855')) {function content_53c52cb0bf4f75_84617855($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="bottom">
			<ul>
				<li class="left">版本：1.0beta&nbsp;&nbsp;作者：HIT-SHOP 制作组</li>
					<li class="right"> 
						本系统现有： &nbsp; 

						<?php if ($_SESSION['goodsadmin']){?>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article">商品【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['goods']->value;?>
</span>】篇</a>&nbsp; &nbsp; 
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/play">成交量【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['chengjiaonum']->value;?>
</span>】个</a>
						<?php }?>
						<?php if ($_SESSION['webadmin']){?>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink">友情链接【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['flinks']->value;?>
</span>】个</a>
						<?php }?>
						<?php if ($_SESSION['useradmin']){?>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user">用户【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</span>】个 </a>&nbsp; &nbsp; 
						<?php }?>
					</li>	
			</ul>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>