 <{ include file="public/header.tpl" }>
 <link rel="stylesheet" type="text/css" href="<{$res}>/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<{$res}>/dist/css/bootstrap-theme.css">
    
<link rel="stylesheet" type="text/css" href="<{$res}>/css/main.css">
	

<div class="panel panel-default">
<div class="panel-body">
	<ol class="breadcrumb">
		<{$path}>
	</ol>
<div>
   <div class="media" style="width:660px;float:left;">
    <a class="pull-left" href="<{$app}>/good/index/id/<{$good.id}>">

        <img src="<{$root}>/upfile/goods/goodbimg/<{$good.bimg}>" alt="..." width="280px" height="300px" class="media-object"/></a>
    <div class="media-body" style="border-bottom-color:grey;border-bottom-style:dashed;border-bottom-width:1px">	
        <h3 style="color:black" class="media-heading"><{$good.name}></h3>
		<h4 class="media-heading"><{$good.jieshao}></h4>
	</div>
	    <div class="media-body">	
        <h4 style="color:black" class="media-heading">原价<font color=#777777>￥<del><{$good.proprice}></del></font></h4>
	</div>
    <div class="media-body">	
       <h4 class="media-heading">现价<font color=#ff1111 size=6px>￥<{$good.price}></font></h4>
	</div>
<!--     <div class="media-body">	
        <h4 style="color:black" class="media-heading">单位<{$good.danwei}></h4>
	</div> -->
    <div class="media-body">
     <h5><font color=#777777>发布时间<{$good.fbtime}></font></h5>	
    <h5><font color=#777777>库存&nbsp;&nbsp;<{$good.num}></font></h5>
    <h5><font color=#777777>描述&nbsp;&nbsp;<{$good.state}></font></h5>
	<h5><font color=#777777>成交数量&nbsp;&nbsp;<{$good.chengjiaonum}></font></h5>
    <!--<h5><font color=#777777>开始时间&nbsp;&nbsp;<{$good.starttime}></font></h5>
    <h5><font color=#777777>结束时间&nbsp;&nbsp;<{$good.endtime}></font></h5>-->

	
			<{if $smarty.session.uid eq $good.ownerid}> <div style="background-color:#ffd800 "><a href="<{$url}>/mod/id/<{$good.id}>">修改我的商品</a></div>
    <{else if}>
	<form  method="post" action="<{$app}>/shopcar/insert">
	<input type="hidden"  name="good"  value="<{$good.id}>">
	<input type="hidden"  name="goodname"  value="<{$good.name}>">
	<input type="hidden"  name="goodowner"  value="<{$good.ownerid}>">
	
	<div class="col-lg-6" style="width:380">
    <div class="input-group">
	  <div style="font-size:18px;float:left;margin-top:10px;"><span class="label label-default">我想要</span></div> 
	  <div style="float:left"><input type="text" name="num"  class="form-control" style="width:40px" value="1"><{$good.danwei}>&nbsp;&nbsp;</div>
	  <div class="input-group-btn" style="float:left;">
        <input type="submit" class="btn btn-danger" name="mod" value="加入我的购物车"></input>
      </div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->	
	<!-- <div>我想要</div>
	<input type="text"  name="num"  value="1"><{$good.danwei}>
    <input type="submit" class="button" name="mod" value="加入我的购物车">&nbsp;&nbsp;
	 -->
	</form>	
	<{/if}>
   </div>
		  </div>
	<div style="float:right;margin-right:35px;">
	   <img src="<{$root}>/upfile/user/<{$own.upic}>" alt="..." class="img-circle" style="width:80px;height:80px;margin-left:30px;">
      <h5>卖家&nbsp;&nbsp;<a href="<{$app}>/user/showinfo/id/<{$own.id}>"><{$own.username}></a></h5>
	  <h5>邮箱&nbsp;&nbsp;<{$own.email}></h5>
      <h5>发布时间&nbsp;&nbsp;<{date("Y_m_d",$own.regtime)}></h5>
      <h5>性别&nbsp;&nbsp;<{$own.sex}></h5>
      <h5>卖家信息&nbsp;&nbsp;<{$own.info}></h5>
	</div>		
		
</div>	
<div style="clear:both;">	

	

<div class="list-group" >
	  <div class="list-group-item default">
	  <div class="list-group-item default">
    <h4 class="list-group-item-heading">详细介绍</h4>
    <div class="list-group-item-text"><{$good.xiangxi}></div>
</div>
					  <div class="list-group-item default">
    <h4 class="list-group-item-heading">评价</h4>
    <div class="list-group-item-text">       
    <{foreach $evaluate as $eva}>
	          <h5>买家&nbsp;&nbsp;<{$eva.username}></h5>
	       <h5><{$eva.evaluate}></h5>  
            <p>日期&nbsp;&nbsp;<{$eva.time}></p>
            
			    
        <{/foreach}>
		</div></div></div>



   
 
	<div class="nav"> </div><br>
<strong><span>你可能喜欢</span></strong><br>
	<{foreach $hotgoods as $good}>

	<div class="cheapgood">
		
		
			<a href="<{$app}>/good/index/id/<{$good.id}>"	>
				<img class="img-thumbnail" style="height:200px;width=180px"src="<{$root}>/upfile/goods/goodsimg/<{$good.simg}>"/><br>
			</a>
		
			<a href="<{$app}>/good/index/id/<{$good.id}>"	><{$good.name}><br>
				<font color=#777777>￥<del><{$good.proprice}></del></font><br>
				<font color=#ff1111>￥<{$good.price}></font>
			</a>
		
	</div>

	<{/foreach}>

	<div class="nav"> </div><br>
	</div>	
<{ include file="public/footer.tpl" }>

