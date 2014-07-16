<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 00:41:36
         compiled from "./admin/views/default\flink\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3264153c559c08a0e46-93886692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1e48e4129f87e9a88f4a176b4648612039f9fa' => 
    array (
      0 => './admin/views/default\\flink\\mod.tpl',
      1 => 1319350024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264153c559c08a0e46-93886692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c559c098b447_99039581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c559c098b447_99039581')) {function content_53c559c098b447_99039581($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>友情链接管理>修改友情连接</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="light-row">
						<span class="col_width">网站名称<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="webname" maxlength="30" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['webname'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">地&nbsp;&nbsp;址<span class="red_font">*</span></span>
							<input type="text" class="text-box" name="url" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"> &nbsp; 例如：http://www.lampbrother.net
					
					</li>
					<li class="light-row">
						<span class="col_width">LOGO<span class="red_font">*</span></span>
						<span id="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['post']->value['logo'];?>
" width="150" />
						 <input type="button" class="button" onclick="change()" value="换LOGO"></span>
						 <input type="hidden" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['logo'];?>
">
						<script>
							function change(){
								var logo=document.getElementById("logo");
								logo.innerHTML='<input type="text" class="text-box" name="logoc" maxlength="100" size="40" value=""> &nbsp; 网站LOGO图片的真实地址,会自动下载到本地。';
							}
						</script>
					</li>

						
					<li class="dark-row">
						<span class="col_width" style="margin-top:30px">网站描述</span>
						<textarea class="text-box" name="msg" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['msg'];?>
</textarea>
					</li>
					<li class="light-row">
						<span class="col_width">联系人<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="rname" maxlength="30" size="10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['rname'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">站长Email<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="email" maxlength="60" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
">
					</li>

					<li class="light-row">
						<span class="col_width">显示方式</span>
						
						<input type="radio" name="list" <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="0"||$_smarty_tpl->tpl_vars['post']->value['list']==null){?> checked <?php }?> value="0"> 网站名称
						<input type="radio" name="list"  <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="1"){?> checked <?php }?> value="1"> LOGO图片
					</li>
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"||$_smarty_tpl->tpl_vars['post']->value['audit']==null){?> checked <?php }?> value="0"> 不显示
						<input type="radio" name="audit"  <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"){?> checked <?php }?> value="1"> 显示
					</li>

					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" name="mod" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>