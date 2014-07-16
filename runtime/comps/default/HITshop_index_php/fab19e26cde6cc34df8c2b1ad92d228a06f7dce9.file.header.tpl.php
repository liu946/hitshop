<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 21:13:50
         compiled from "./home/views/default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1881653c5290e6e7256-29774973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab19e26cde6cc34df8c2b1ad92d228a06f7dce9' => 
    array (
      0 => './home/views/default\\public\\header.tpl',
      1 => 1404388744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881653c5290e6e7256-29774973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'keywords' => 0,
    'description' => 0,
    'res' => 0,
    'public' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5290e81fa57_44534186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5290e81fa57_44534186')) {function content_53c5290e81fa57_44534186($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\HITshop\\brophp\\libs\\plugins\\modifier.truncate.php';
?><html>
	<head>
		<title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['appname']->value,200);?>
</title>
		<meta name="Author" content="HIT-team" />
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<!--	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/head.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/global.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/print.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/dist/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/welcome.css" />
	
		<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/win.js"></script>
				<script>
					Ajax().get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/getnum",function(data){
										document.getElementById("msg").innerHTML=data;
									});
					Ajax().get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/getindentnum",function(data){
								document.getElementById("indentmsg").innerHTML=data;
							});
								</script>
	</head>
	<body>
			<div id="content" style="margin-left:80px;margin-right:80px;">
		
                <div id="header">
						
						<?php if ($_SESSION['login']==1){?>
          						&nbsp;欢迎回来 <b><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['uid'];?>
"><?php echo $_SESSION['username'];?>
&nbsp;&nbsp;用户中心</a></b>&nbsp;｜&nbsp;<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout">退出</a>&nbsp;｜&nbsp;
							
									<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/"><span class="indentmsg" id="indentmsg" font-style="color:red"></span></a>&nbsp;&nbsp;&nbsp;
						
									<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/"><span class="msg" id="msg" font-style="color:red"></span></a>

						<?php }else{ ?>
						<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login" method="post">
							<div class="row">
								<div class="col-xs-2">
									<input placeholder="用户名" class="form-control"  name="uname" type="text">
								</div>
								<div class="col-xs-2">
								<input placeholder="密码" class="form-control" name="upwd" type="password" >
								</div>
								<input type="submit" class="btn btn-primary"  name="loginsubmit" value="登录" >&nbsp;
								<input type="button" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/register'" class="btn btn-primary" value="注册">
							</div>
						</form>
						<?php }?>
						
				</div>
				
				
				
                <div id="logo" style="width:200px;float:left;">
					 <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
"><img border="0" style="width:200px" alt="HIT-ego_logo" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/logo.jpg"></a>
			    </div>
                <div id="search"  style="width:500px;float:left;margin-top:30px">
					<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goodlist/find" id="searchform" method="get">
					  <div class="col-lg-6" style="width:500px;">
					    <div class="input-group"  style="width:500px;">
					      <div class="input-group-btn">
					        <select  name="serType" class="btn btn-danger dropdown-toggle">
					          <option value="good">商品</option>
					          <option value="user">店铺</option>
					          <option value="class">分类</option>
					     	</select>
					      </div><!-- /btn-group -->
						  <div>
					      <input type="text" name="search" class="form-control"></div>
						  <div class="input-group-btn">
					        <input type="submit" class="btn btn-danger" value="搜索">
					      </div>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->		
					</form> 	
			    </div>				
              	<div>
					<div id="tool1"  style="width:80px;float:right;margin-top:30px;margin-right:40px;" >
                            
                            	<div style="width:65;height:25px;font-size:18px">
                            		<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/shopcar/">
                            		<span class="label label-success" >&nbsp;购 物 车&nbsp;</span></a>
                            	</div>
							
								<div style="width:65;height:25px;font-size:18px">
									<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/">
									<span class="label label-info">用户中心</span></a>
								</div>
				     </div>
					<div id="tool2"  style="width:80px;float:right;margin-top:30px;margin-right:40px;" >
                          
                          	<div style="width:65;height:25px;font-size:18px"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/add">
                          		<span class="label label-warning">添加商品</span></a>
                          	</div>
						  
						  	<div style="width:65;height:25px;font-size:18px"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/">
						  		<span class="label label-danger">
						  			我的订单</span></a>
						  	</div>
					</div>
		       </div>
			
			
			</div>
		
   			<div style="clear:both;margin-left:40px;margin-right:40px">
<?php }} ?>