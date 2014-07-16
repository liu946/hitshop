<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 08:15:37
         compiled from "./admin/views/default\public\success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243553c5c4296d9c81-47449265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49eb09835cf63becc7ce0192ae118e2fd48f13f3' => 
    array (
      0 => './admin/views/default\\public\\success.tpl',
      1 => 1336729976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243553c5c4296d9c81-47449265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mess' => 0,
    'mark' => 0,
    'timeout' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5c4298877e7_59262894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5c4298877e7_59262894')) {function content_53c5c4298877e7_59262894($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>提示消息 - BroPHP</title>

		<style type="text/css">
			body { font: 75% Arail; text-align: center; }
			#notice { width: 300px; background: #FFF; border: 1px solid #BBB; background: #EEE; padding: 3px;
			position: absolute; left: 50%; top: 50%; margin-left: -155px; margin-top: -100px; }
			#notice div { background: #FFF; padding: 30px 0 20px; font-size: 1.2em; font-weight:bold }
			#notice p { background: #FFF; margin: 0; padding: 0 0 20px; }
			a { color: #f00} a:hover { text-decoration: none; }
			
		</style>
	</head>
	<body>
		<div id="notice">
	
			<div style="width:100%;text-align:left;padding-left:10px;padding-right:10px"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</div>
				
			<?php if ($_smarty_tpl->tpl_vars['mark']->value){?>
				<p style="font: italic bold 2cm cursive,serif; color:green">
					ok 
				</p>
			<?php }else{ ?>
				<p style="font: italic bold 2cm cursive,serif; color:red">
					×
				</p>

			<?php }?>		
			<p>
				 在( <span id="sec" style="color:blue;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['timeout']->value;?>
</span> )秒后自动跳转，或直接点击 <a href="javascript:<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
">这里</a> 跳转<br>
				 <span style="display:block;text-decoration:underline;cursor:pointer;line-height:25px" onclick="stop(this)">停止</span>
	
			</p>
		 </div>
						
		 <script>
		 		var seco=document.getElementById("sec");
				var time=<?php echo $_smarty_tpl->tpl_vars['timeout']->value;?>
;
				var tt=setInterval(function(){
						time--;
						seco.innerHTML=time;	
						if(time<=0){
							<?php echo $_smarty_tpl->tpl_vars['location']->value;?>

							return;
						}
					}, 1000);
				function stop(obj){
					clearInterval(tt);
					obj.style.display="none";
				}
		</script>
	</body>
</html>
<?php }} ?>