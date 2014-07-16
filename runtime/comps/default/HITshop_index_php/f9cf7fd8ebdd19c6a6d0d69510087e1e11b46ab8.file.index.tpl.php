<?php /* Smarty version Smarty-3.1.8, created on 2014-07-15 22:50:43
         compiled from "./home/views/default\good\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973153c5290e476258-40104489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9cf7fd8ebdd19c6a6d0d69510087e1e11b46ab8' => 
    array (
      0 => './home/views/default\\good\\index.tpl',
      1 => 1405435840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '973153c5290e476258-40104489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5290e6e7253_17878846',
  'variables' => 
  array (
    'res' => 0,
    'path' => 0,
    'app' => 0,
    'good' => 0,
    'root' => 0,
    'url' => 0,
    'own' => 0,
    'evaluate' => 0,
    'eva' => 0,
    'hotgoods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5290e6e7253_17878846')) {function content_53c5290e6e7253_17878846($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/dist/css/bootstrap-theme.css">
    
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/main.css">
	

<div class="panel panel-default">
<div class="panel-body">
	<ol class="breadcrumb">
		<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

	</ol>
<div>
   <div class="media" style="width:660px;float:left;">
    <a class="pull-left" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">

        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodbimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['bimg'];?>
" alt="..." width="280px" height="300px" class="media-object"/></a>
    <div class="media-body" style="border-bottom-color:grey;border-bottom-style:dashed;border-bottom-width:1px">	
        <h3 style="color:black" class="media-heading"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</h3>
		<h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['good']->value['jieshao'];?>
</h4>
	</div>
	    <div class="media-body">	
        <h4 style="color:black" class="media-heading">原价<font color=#777777>￥<del><?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
</del></font></h4>
	</div>
    <div class="media-body">	
       <h4 class="media-heading">现价<font color=#ff1111 size=6px>￥<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</font></h4>
	</div>
<!--     <div class="media-body">	
        <h4 style="color:black" class="media-heading">单位<?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
</h4>
	</div> -->
    <div class="media-body">
     <h5><font color=#777777>发布时间<?php echo $_smarty_tpl->tpl_vars['good']->value['fbtime'];?>
</font></h5>	
    <h5><font color=#777777>库存&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
</font></h5>
    <h5><font color=#777777>描述&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['state'];?>
</font></h5>
	<h5><font color=#777777>成交数量&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['chengjiaonum'];?>
</font></h5>
    <!--<h5><font color=#777777>开始时间&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['starttime'];?>
</font></h5>
    <h5><font color=#777777>结束时间&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['endtime'];?>
</font></h5>-->

	
			<?php if ($_SESSION['uid']==$_smarty_tpl->tpl_vars['good']->value['ownerid']){?> <div style="background-color:#ffd800 "><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">修改我的商品</a></div>
    <?php }else{ ?>
	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/shopcar/insert">
	<input type="hidden"  name="good"  value="<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
	<input type="hidden"  name="goodname"  value="<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
">
	<input type="hidden"  name="goodowner"  value="<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">
	
	<div class="col-lg-6" style="width:380">
    <div class="input-group">
	  <div style="font-size:18px;float:left;margin-top:10px;"><span class="label label-default">我想要</span></div> 
	  <div style="float:left"><input type="text" name="num"  class="form-control" style="width:40px" value="1"><?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
&nbsp;&nbsp;</div>
	  <div class="input-group-btn" style="float:left;">
        <input type="submit" class="btn btn-danger" name="mod" value="加入我的购物车"></input>
      </div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->	
	<!-- <div>我想要</div>
	<input type="text"  name="num"  value="1"><?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>

    <input type="submit" class="button" name="mod" value="加入我的购物车">&nbsp;&nbsp;
	 -->
	</form>	
	<?php }?>
   </div>
		  </div>
	<div style="float:right;margin-right:35px;">
	   <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php echo $_smarty_tpl->tpl_vars['own']->value['upic'];?>
" alt="..." class="img-circle" style="width:80px;height:80px;margin-left:30px;">
      <h5>卖家&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['own']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['own']->value['username'];?>
</a></h5>
	  <h5>邮箱&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['email'];?>
</h5>
      <h5>发布时间&nbsp;&nbsp;<?php echo date("Y_m_d",$_smarty_tpl->tpl_vars['own']->value['regtime']);?>
</h5>
      <h5>性别&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['sex'];?>
</h5>
      <h5>卖家信息&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['info'];?>
</h5>
	</div>		
		
</div>	
<div style="clear:both;">	

	

<div class="list-group" >
	  <div class="list-group-item default">
	  <div class="list-group-item default">
    <h4 class="list-group-item-heading">详细介绍</h4>
    <div class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['good']->value['xiangxi'];?>
</div>
</div>
					  <div class="list-group-item default">
    <h4 class="list-group-item-heading">评价</h4>
    <div class="list-group-item-text">       
    <?php  $_smarty_tpl->tpl_vars['eva'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eva']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['evaluate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eva']->key => $_smarty_tpl->tpl_vars['eva']->value){
$_smarty_tpl->tpl_vars['eva']->_loop = true;
?>
	          <h5>买家&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['eva']->value['username'];?>
</h5>
	       <h5><?php echo $_smarty_tpl->tpl_vars['eva']->value['evaluate'];?>
</h5>  
            <p>日期&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['eva']->value['time'];?>
</p>
            
			    
        <?php } ?>
		</div></div></div>



   
 
	<div class="nav"> </div><br>
<strong><span>你可能喜欢</span></strong><br>
	<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotgoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>

	<div class="cheapgood">
		
		
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"	>
				<img class="img-thumbnail" style="height:200px;width=180px"src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"/><br>
			</a>
		
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"	><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
<br>
				<font color=#777777>￥<del><?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
</del></font><br>
				<font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</font>
			</a>
		
	</div>

	<?php } ?>

	<div class="nav"> </div><br>
	</div>	
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>