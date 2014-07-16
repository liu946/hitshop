<?php /* Smarty version Smarty-3.1.8, created on 2014-07-16 00:38:41
         compiled from "./home/views/default\indent\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756253c5435d5f0c14-12497645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7468598155828353b6da3508620a01cfabb9e47f' => 
    array (
      0 => './home/views/default\\indent\\index.tpl',
      1 => 1405442262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756253c5435d5f0c14-12497645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53c5435d7ec911_57913855',
  'variables' => 
  array (
    'buyergoods' => 0,
    'buyergood' => 0,
    'app' => 0,
    'url' => 0,
    'sellergoods' => 0,
    'sellergood' => 0,
    'indent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5435d7ec911_57913855')) {function content_53c5435d7ec911_57913855($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel panel-default">
 <div class="panel-body">
  <div style="margin-left:60px;">
    <div id="reg" class="panel panel-default">
      <div class="panel-heading">
        <strong style="width:90%;">
          我的订单
        </strong>
      </div>
      
      <div class="panel-body">
        <div style="padding-left: 50px;padding-right: 50px;padding-top:50px">   
         <?php  $_smarty_tpl->tpl_vars['buyergood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['buyergood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buyergoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['buyergood']->key => $_smarty_tpl->tpl_vars['buyergood']->value){
$_smarty_tpl->tpl_vars['buyergood']->_loop = true;
?>
         <div class="panel panel-default" style="margin-left:40px;margin-right:40px;">
         <h3><span>卖家：</span>
          <?php echo $_smarty_tpl->tpl_vars['buyergood']->value['ownername'];?>
 
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['ownerid'];?>
"> 我要联系他</a>
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/add/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['ownerid'];?>
"> 
            给他留言</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['goodid'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['buyergood']->value['goodname'];?>

            </a>
            <strong>
            <font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['goodprice'];?>
</font>
            X <?php echo $_smarty_tpl->tpl_vars['buyergood']->value['num'];?>
 = ￥<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['sumprice'];?>

            </strong>
            <?php if ($_smarty_tpl->tpl_vars['buyergood']->value['state']==1){?>
              <a href="http://auth.alipay.com" class="btn btn-primary btn-lg" >
               去交款
              </a>
            
            <?php }elseif($_smarty_tpl->tpl_vars['buyergood']->value['state']==3){?>
            <span style="color: #00ff21"><b>已申请线下交易</b></span>
             <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['buyergood']->value['state']==3){?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/confirmoffline/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['id'];?>
">
               确认交易完成
             </a>
             <?php }elseif($_smarty_tpl->tpl_vars['buyergood']->value['state']==4){?>
             <span style="color: #00ff21"><b>已申请线下交易</b></span>
             
             完成线下交易确认等待卖方确认
             <?php }elseif($_smarty_tpl->tpl_vars['buyergood']->value['state']==5){?>
             <span style="color: #00ff21"><b>已申请线下交易</b></span>
              &nbsp;&nbsp;&nbsp;卖家已确认
            

            <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/confirmoffline/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['id'];?>
">
             确认交易完成
           </a>
           <?php }elseif($_smarty_tpl->tpl_vars['buyergood']->value['state']==6){?>
           线下交易成功！&nbsp;&nbsp;
           <a class="btn btn-success btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/evaluate/add/indent/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['id'];?>
">
            去评价！
          </a>
          <?php }?>
        </h3>

      </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['buyergood']->_loop) {
?>
        没有这样的订单！
        <?php } ?></div>

      </div>
    </div>
    <hr>
    <div id="reg" class="panel panel-default">
      <div class="panel-heading">
        <strong style="width:90%;">
         我收到的订单 
       </strong>
     </div>

     <div class="panel-body">
      <div style="padding-left: 50px;padding-right: 50px;padding-top:50px">   


        <?php  $_smarty_tpl->tpl_vars['sellergood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sellergood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sellergoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sellergood']->key => $_smarty_tpl->tpl_vars['sellergood']->value){
$_smarty_tpl->tpl_vars['sellergood']->_loop = true;
?>
        <div class="panel panel-default" style="margin-left:40px;margin-right:40px;">
          <h3>
       <span>买家：</span>

          <?php echo $_smarty_tpl->tpl_vars['sellergood']->value['username'];?>
 
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userid'];?>
"> 我要联系他</a>
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/add/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userid'];?>
">
            给他留言</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['goodid'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['sellergood']->value['goodname'];?>

            </a>
            <strong>
            <font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['goodprice'];?>
</font>
            X <?php echo $_smarty_tpl->tpl_vars['sellergood']->value['num'];?>
 = ￥<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['sumprice'];?>

            </strong>
            <br><br>
          <span>买方QQ：</span>
           <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userqq'];?>
</span> 
            <br>
           <span>买方电话：</span>
             <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userphone'];?>
</span> 
            <br>
            <span>买方邮编：</span>
               <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userpostcode'];?>
</span> 
            <br>
             <span>买方地址：</span>
                <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['useraddress'];?>
</span>
                <input name="indent" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['indent']->value['id'];?>
"> 


                <?php if ($_smarty_tpl->tpl_vars['sellergood']->value['state']==1){?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/offline/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['id'];?>
" class="btn btn-primary btn-lg">申请线下交易</a> 
                <?php }elseif($_smarty_tpl->tpl_vars['sellergood']->value['state']==3){?>
                <span style="color: #00ff21"><b>已申请线下交易</b></span>
              
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['sellergood']->value['state']==3){?>
              <a class="btn btn-success btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/confirmoffline/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['id'];?>
">
               确认交易完成
             </a>
             <?php }elseif($_smarty_tpl->tpl_vars['sellergood']->value['state']==4){?>
             <span style="color: #00ff21"><b>已申请线下交易</b></span>
              &nbsp;&nbsp;&nbsp;买家已确认
            <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/confirmoffline/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['id'];?>
">
             确认交易完成
           </a>
           <?php }elseif($_smarty_tpl->tpl_vars['sellergood']->value['state']==5){?>
           <span style="color: #00ff21"><b>已申请线下交易</b></span>
           
           完成线下交易确认等待买方确认
           <?php }elseif($_smarty_tpl->tpl_vars['sellergood']->value['state']==6){?>
           线下交易成功！&nbsp;&nbsp;
           <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/add">
            再去添加点商品来卖！
          </a>
          </h3>
          <?php }?>
         </div>
          <?php }
if (!$_smarty_tpl->tpl_vars['sellergood']->_loop) {
?>
          没有这样的订单！
          <?php } ?>
     
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>