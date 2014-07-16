<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 23:09:08
         compiled from "./home/views/default\indent\indentconfirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047553c5441410fc10-48674603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cb4c90b2d72aa9f3bcd0923ae7bdf0f559326b' => 
    array (
      0 => './home/views/default\\indent\\indentconfirm.tpl',
      1 => 1395931993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047553c5441410fc10-48674603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'indentmsg' => 0,
    'owner' => 0,
    'app' => 0,
    'good' => 0,
    'indent' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c54414221314_92181554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c54414221314_92181554')) {function content_53c54414221314_92181554($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form name="indentconfirm"  action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post">		
     					<ul>
       						
							<?php echo $_smarty_tpl->tpl_vars['indentmsg']->value;?>

        					<li> 确认订单信息 </li>
        					<li><span>卖家：</span>
          						<?php echo $_smarty_tpl->tpl_vars['owner']->value['username'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['owner']->value['id'];?>
"> 我要联系他</a></li>
								
       						<div>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
								<font color=#777777>￥<del><?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
</del></font>
								<font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</font>
								</a>
							</div>
       						<li><span>购买数量：</span>
         						 <?php echo $_smarty_tpl->tpl_vars['indent']->value['num'];?>

							</li>
       						<li><span>总价格：</span>
         						 <?php echo $_smarty_tpl->tpl_vars['indent']->value['num']*$_smarty_tpl->tpl_vars['good']->value['price'];?>

							</li>
        					<font color=#ff1111>请重点确认以下内容，这样才能快速得到宝贝哦！</font>
							
						<li><span>我的QQ：</span>
         					 <input name="qq" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
"></li>
 							
						<li><span>我的电话：</span>
         					 <input name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
"></li>
 							
						<li><span>我的邮编：</span>
         					 <input name="postcode" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
"></li>
 							
						<li><span>我的地址：</span>
         					<input name="address" type="text" size="50" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
"></li>
							<input name="indent" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['indent']->value['id'];?>
">
							


					</ul>
     					 <hr />
      					<ul>
      						  <li><span>&nbsp;</span>
          						<input class="button"  type="submit" value="确认订单"onclick="return confirm('提交订单后不可修改，确定提交吗？')">
       						 </li>
      					</ul>
   				 </form>		
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>