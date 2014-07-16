<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 00:44:40
         compiled from "./admin/views/default\goods\quickconfirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1847053c55a78790767-74217358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b22ca16d92782ab49d664898f26ede91571d4a3' => 
    array (
      0 => './admin/views/default\\goods\\quickconfirm.tpl',
      1 => 1401276178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1847053c55a78790767-74217358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'page' => 0,
    'search' => 0,
    'gid' => 0,
    'disable' => 0,
    'select' => 0,
    'goods' => 0,
    'root' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c55a789da664_83104788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c55a789da664_83104788')) {function content_53c55a789da664_83104788($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\HITshop\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>商品管理>管理商品</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	  
			<div class="msg-box">
				<ul class="viewmess">
					  <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/confirm/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['search']->value){?>/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['gid']->value){?>/gid/<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['disable']->value){?>/disable/<?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
<?php }?>" onsubmit="return confirm('你确定要上架选中的商品吗?')" >
					<?php if ($_smarty_tpl->tpl_vars['disable']->value!=1){?>
					<!--
                        <li class="light-row">
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户组：<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
 &nbsp;&nbsp;

						输入需要查找的用户名：
						<input type="text" size="20" id="sea" name="username" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"> 
						<input onclick="search()" type="button" class="button" value="搜索用户">
					
					</li>
                        -->

					<script>
						var sel=document.getElementById("sel");
						
						sel.onchange=function(){
							var gid=this.options[this.selectedIndex].value;
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/gid/"+gid;
						}
						function search(){
							var gid=sel.options[sel.selectedIndex].value;
							var sval=document.getElementById("sea").value;	
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/gid/"+gid+"/search/"+sval;

						}
					</script>
					<?php }?>
					
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goods']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total']);
?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['state']==0){?>red-row<?php }elseif(!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:5px; padding-bottom:5px">
							<?php if ($_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['state']==0){?>
								<span class="list_width red_font">	
							<?php }else{ ?>
								<span class="list_width">
							<?php }?>
							
								<input type="checkbox" name="id[]"  value="<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">
						
						
						
							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php/good/index/id/<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['name'];?>
</a>
							</span>
							
							<span class="list_width" style="width:200px"><?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['email'];?>
</span>
							<span class="list_width"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['regtime'],"%Y-%m-%d");?>
</span>
				
							<span class="list_width" style="width:180px;">
						
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/confirm/id/<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">上架</a>】
                            
							【<a onclick="return confirm('确定要删除商品<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['username'];?>
吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['search']->value){?>/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['gid']->value){?>/gid/<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['disable']->value){?>/disable/<?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
<?php }?>">删除</a>】
							
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							没有等待确认的商品！
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:15px;width:240px"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							
							<input  name="cons" type="submit" title="上架" value="上架">&nbsp;&nbsp;
						 </span> 
					</li>
				
					<li class="dark-row" style="text-align:right">
						
							<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

					</li>
					 </form>
				</ul>	
			</div>
                   
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>