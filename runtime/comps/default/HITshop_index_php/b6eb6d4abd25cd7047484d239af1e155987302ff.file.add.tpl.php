<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:35:03
         compiled from "./home/views/default\flink\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2496753c52b8493c714-68057486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6eb6d4abd25cd7047484d239af1e155987302ff' => 
    array (
      0 => './home/views/default\\flink\\add.tpl',
      1 => 1405431298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2496753c52b8493c714-68057486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c52b84b8e3a6_59164253',
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c52b84b8e3a6_59164253')) {function content_53c52b84b8e3a6_59164253($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel panel-default">
          	<div class="panel-body">
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>友情链接管理>添加友情连接</div>
			</div>	
		    
		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
			<table>
				<ul class="viewmess">
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">网站名称<span class="red_font">&nbsp;&nbsp;*</span></span>
						 <input type="text" class="text-box" name="webname" maxlength="30" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['webname'];?>
">
					</div>
					<div class="dark-row" style="margin-top:20px;">
						<span class="col_width">地&nbsp;&nbsp;址<span class="red_font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span>
							<input type="text" class="text-box" name="url" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"> &nbsp; 例如：http://www.HITshop.net
					
					</div>
					<!--
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">LOGO<span class="red_font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span>
						<input type="text" class="text-box" name="logo" maxlength="100" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['logo'];?>
">&nbsp;  网站LOGO图片的真实地址,会自动下载到本地。
					</div>
					-->
						
					<div class="dark-row" style="margin-top:20px;">
					<span class="col_width" style="margin-top:30px">网站描述&nbsp;&nbsp;&nbsp;*</span>
						<textarea class="text-box" name="msg" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['msg'];?>
</textarea>
					</div>
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">联系人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="rname" maxlength="30" size="10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['rname'];?>
">
					</div>
					<div class="dark-row" style="margin-top:20px;">
						<span class="col_width">站长Email<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="email" maxlength="60" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
">
					</div>

					<!--<div class="light-row" style="margin-top:20px;">
						<span class="col_width">显示方式</span>
						
						<input type="radio" name="list" <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="0"||$_smarty_tpl->tpl_vars['post']->value['list']==null){?> checked <?php }?> value="0"> 网站名称
						<input type="radio" name="list"  <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="1"){?> checked <?php }?> value="1"> LOGO图片
					</div>-->
					<input type="hidden" name="list" value="0">
<!--no done-->		<!--<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"||$_smarty_tpl->tpl_vars['post']->value['audit']==null){?> checked <?php }?> value="0"> 不显示
						<input type="radio" name="audit"  <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"){?> checked <?php }?> value="1"> 显示
					</li>-->
					<input type="hidden" name="audit" value="0">
					<div class="light-row" style="margin-top:20px;">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="btn btn-primary" name="mod" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="btn btn-primary" value="重 置">
					</div>
				</ul>
             </table>				
			</div>
                    </form>	
		</div>
		</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>