<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 22:40:26
         compiled from "./home/views/default\good\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2999653c53d5a37c704-95998860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e91d923a99920629ae0510a5c049ec642f5bc719' => 
    array (
      0 => './home/views/default\\good\\add.tpl',
      1 => 1404381230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2999653c53d5a37c704-95998860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'good' => 0,
    'starttime' => 0,
    'endtime' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c53d5a43fc01_15885798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c53d5a43fc01_15885798')) {function content_53c53d5a43fc01_15885798($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel panel-default">
          	<div class="panel-heading">
              <strong style="width:90%;">
                <?php echo @APP_NAME;?>
-添加商品
              </strong>
            </div>
	<div class="panel-body">
	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
 
	  <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">cid</span>
    	<?php echo $_smarty_tpl->tpl_vars['select']->value;?>

  </div>
  
	<div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	<span class="input-group-addon">品名</span>
    <input  type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
">
  </div>
    
    	<div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px"><span class="input-group-addon">小图</span>
	<input type="file"   name="simg" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"></div>
	

	   <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px"><span class="input-group-addon">大图</span>
	<input type="file"   name="bimg" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['bimg'];?>
"></div>

	<div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	<span class="input-group-addon">现价</span>
    <input  type="text" class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
">
  </div>
     
	 <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">原价</span>
    <input  type="text" class="form-control" name="proprice" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
">
  </div>
  
  	 <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">单位</span>
    <input  type="text" class="form-control" name="danwei" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
">
  </div>
  
  
     <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">数量</span>
    <input  type="text" class="form-control" name="num" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
">
  </div>
  
  
     <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">介绍</span>
    <input  type="text" class="form-control" name="jieshao" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['jieshao'];?>
">
  </div>
  
  
   	  <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">起始日期</span>
    	<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
  &nbsp;请选择开始时间！	
  </div>
	
	  <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">截止日期</span>
    	<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
 &nbsp;请选择下线时间,	
 
    <input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
	 </div>


	
	 <div  class="input-group" style="margin-left: 50px;margin-right: 50px;padding-top:50px">
	    <span class="input-group-addon">详细介绍</span></div>
		<center>
		<div style='margin:50px'>
		<textarea cols="80" rows="10" name="xiangxi" style="display: none;padding-left: 50px;padding-right: 50px;" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['xiangxi'];?>
"></textarea>
		<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

		</div>
	<input type="submit" class="btn btn-primary"  value="提交">
	</center>
    </form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>