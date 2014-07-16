<{ include file="public/header.tpl" }>
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
         <{foreach $buyergoods as $buyergood}>
         <div class="panel panel-default" style="margin-left:40px;margin-right:40px;">
         <h3><span>卖家：</span>
          <{$buyergood.ownername}> 
          <a class="btn btn-primary" href="<{$app}>/user/showinfo/id/<{$buyergood.ownerid}>"> 我要联系他</a>
          <a class="btn btn-primary" href="<{$app}>/message/add/id/<{$buyergood.ownerid}>"> 
            给他留言</a>
            <a href="<{$app}>/good/index/id/<{$buyergood.goodid}>">
              <{$buyergood.goodname}>
            </a>
            <strong>
            <font color=#ff1111>￥<{$buyergood.goodprice}></font>
            X <{$buyergood.num}> = ￥<{$buyergood.sumprice}>
            </strong>
            <{if $buyergood.state eq 1}>
              <a href="http://auth.alipay.com" class="btn btn-primary btn-lg" >
               去交款
              </a>
            
            <{else if $buyergood.state eq 3}>
            <span style="color: #00ff21"><b>已申请线下交易</b></span>
             <{/if}>
             <{if $buyergood.state eq 3}>
             <a href="<{$url}>/confirmoffline/id/<{$buyergood.id}>">
               确认交易完成
             </a>
             <{else if $buyergood.state eq 4}>
             <span style="color: #00ff21"><b>已申请线下交易</b></span>
             
             完成线下交易确认等待卖方确认
             <{else if $buyergood.state eq 5}>
             <span style="color: #00ff21"><b>已申请线下交易</b></span>
              &nbsp;&nbsp;&nbsp;卖家已确认
            

            <a class="btn btn-primary btn-lg" href="<{$url}>/confirmoffline/id/<{$buyergood.id}>">
             确认交易完成
           </a>
           <{else if $buyergood.state eq 6}>
           线下交易成功！&nbsp;&nbsp;
           <a class="btn btn-success btn-lg" href="<{$app}>/evaluate/add/indent/<{$buyergood.id}>">
            去评价！
          </a>
          <{/if}>
        </h3>

      </div>
        <{foreachelse}>
        没有这样的订单！
        <{/foreach}></div>

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


        <{foreach $sellergoods as $sellergood}>
        <div class="panel panel-default" style="margin-left:40px;margin-right:40px;">
          <h3>
       <span>买家：</span>

          <{$sellergood.username}> 
          <a class="btn btn-primary" href="<{$app}>/user/showinfo/id/<{$sellergood.userid}>"> 我要联系他</a>
          <a class="btn btn-primary" href="<{$app}>/message/add/id/<{$sellergood.userid}>">
            给他留言</a>
            <a href="<{$app}>/good/index/id/<{$sellergood.goodid}>">
              <{$sellergood.goodname}>
            </a>
            <strong>
            <font color=#ff1111>￥<{$sellergood.goodprice}></font>
            X <{$sellergood.num}> = ￥<{$sellergood.sumprice}>
            </strong>
            <br><br>
          <span>买方QQ：</span>
           <span><{$sellergood.userqq}></span> 
            <br>
           <span>买方电话：</span>
             <span><{$sellergood.userphone}></span> 
            <br>
            <span>买方邮编：</span>
               <span><{$sellergood.userpostcode}></span> 
            <br>
             <span>买方地址：</span>
                <span><{$sellergood.useraddress}></span>
                <input name="indent" type="hidden" value="<{$indent.id}>"> 


                <{if $sellergood.state eq 1}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<{$url}>/offline/id/<{$sellergood.id}>" class="btn btn-primary btn-lg">申请线下交易</a> 
                <{else if $sellergood.state eq 3}>
                <span style="color: #00ff21"><b>已申请线下交易</b></span>
              
              <{/if}>
              <{if $sellergood.state eq 3}>
              <a class="btn btn-success btn-lg" href="<{$url}>/confirmoffline/id/<{$sellergood.id}>">
               确认交易完成
             </a>
             <{else if $sellergood.state eq 4}>
             <span style="color: #00ff21"><b>已申请线下交易</b></span>
              &nbsp;&nbsp;&nbsp;买家已确认
            <a class="btn btn-primary btn-lg" href="<{$url}>/confirmoffline/id/<{$sellergood.id}>">
             确认交易完成
           </a>
           <{else if $sellergood.state eq 5}>
           <span style="color: #00ff21"><b>已申请线下交易</b></span>
           
           完成线下交易确认等待买方确认
           <{else if $sellergood.state eq 6}>
           线下交易成功！&nbsp;&nbsp;
           <a class="btn btn-primary btn-lg" href="<{$app}>/good/add">
            再去添加点商品来卖！
          </a>
          </h3>
          <{/if}>
         </div>
          <{foreachelse}>
          没有这样的订单！
          <{/foreach}>
     
      </div>
    </div>
  </div>
</div>
<{ include file="public/footer.tpl" }>