<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:29:20
         compiled from "./admin/views/default\index\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1709953c52cb04f0164-98860857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40884c84f6947c4fb1979c0c5a5c0439eab1473c' => 
    array (
      0 => './admin/views/default\\index\\menu.tpl',
      1 => 1404100999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1709953c52cb04f0164-98860857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'res' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c52cb06ebe69_11833238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c52cb06ebe69_11833238')) {function content_53c52cb06ebe69_11833238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="menu">
			<div class="option">
				<div class="menutitle">【管理选项】</div>
				<div class="content">
					<ul>
						<li class="opt">
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" onclick="switchmenu('optionmenu','menulist',0)" target="main">
							<img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/system_d.gif"><br>
							 系统管理</a></a>
						</li>
						<li class="opt">
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" onclick="switchmenu('optionmenu','menulist',1)" target="main">
							<img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/article_d.gif"><br>
							内容管理</a>
						</li>
						<li class="opt">	
							 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" onclick="switchmenu('optionmenu','menulist',2)" target="main">
							 <img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/user_d.gif"><br>
							 用户管理</a>
						</li>
					</ul>
				 </div>
			</div>
			<div class="nav"> </div>
			<div class="option">
				<div id="optionmenu" class="menutitle">【系统管理】</div>
				<div id="menulist" class="content"> 
				    	<div style="display:block">
						<?php if ($_SESSION['configadmin']){?>					
						<h4 onclick="domenu(this, 'list1')" class="tit">--常规管理--</h4>
						<ul id="list1">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/sysinfo" target="main">系统信息</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/baseset" target="main">基本设置</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/upcache" target="main">更新缓存</a></li>
							
						</ul>

						<?php }else{ ?>
							<h4>没有网站编辑权限</h4>
						<?php }?>
				
					</div>

					<div>
						<?php if ($_SESSION['goodadmin']){?>
						<h4 onclick="domenu(this, 'list21')" class="tit">--商品管理--</h4>
						<ul id="list21">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/quickconfirm" target="main">商品确认</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods" target="main">商品下架</a></li>
						
						</ul>

						<?php }else{ ?>
							<h4>没有商品编辑权限</h4>
						<?php }?>
						<?php if ($_SESSION['goodadmin']){?>
						<h4 onclick="domenu(this, 'list21')" class="tit">--商品分类管理--</h4>
						<ul id="list21">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cat" target="main">管理商品分类</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cat/add" target="main">添加分类</a></li>
						
						</ul>

						<?php }else{ ?>
							<h4>没有商品分类编辑权限</h4>
						<?php }?>
						<?php if ($_SESSION['colunmadmin']){?>
                        <h4 onclick="domenu(this, 'list2')" class="tit">--公告管理--</h4>
						<ul id="list2">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice/add" target="main">添加公告</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice" target="main">管理公告</a></li>
						</ul>

						<h4 onclick="domenu(this, 'list3')" class="tit">--友情链接管理--</h4>
						<ul id="list3">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink/add" target="main">添加友情链接</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink" target="main">管理友情链接</a></li>
						</ul>
						
						<?php }else{ ?>
							<h4>没有内容管理权限</h4>
						<?php }?>
					</div>

					<div>
					<?php if ($_SESSION['useradmin']){?>
						<h4 onclick="domenu(this, 'list31')" class="tit">--用户组管理--</h4>
						<ul id="list31">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group/add" target="main">添加用户组</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group" target="main">编辑用户组</a></li>
						</ul>
						<h4 onclick="domenu(this, 'list32')" class="tit">--用户管理--</h4>
						<ul id="list32">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/add" target="main">添加用户</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user" target="main">编辑用户</a></li>
						</ul>
					<?php }else{ ?>
						<h4>没有用户管理权限</h4>
					<?php }?>
					</div>
					
					
				</div>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>