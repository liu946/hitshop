<html>
	<head>
		<title><{ $appname|truncate:200 }></title>
		<meta name="Author" content="HIT-team" />
		<meta name="Keywords" content="<{$keywords}>" />
		<meta name="description" content="<{$description}>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<!--	<link rel="stylesheet" type="text/css" href="<{$res}>/css/head.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/global.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/print.css">-->
        <link rel="stylesheet" type="text/css" href="<{$res}>/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<{$res}>/dist/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/welcome.css" />
	
		<script src="<{$public}>/js/ajax3.0.js"></script>
		<script src="<{$res}>/js/common.js"></script>
		<script src="<{$res}>/js/win.js"></script>
				<script>
					Ajax().get("<{$app}>/message/getnum",function(data){
										document.getElementById("msg").innerHTML=data;
									});
					Ajax().get("<{$app}>/message/getindentnum",function(data){
								document.getElementById("indentmsg").innerHTML=data;
							});
								</script>
	</head>
	<body>
			<div id="content" style="margin-left:80px;margin-right:80px;">
		
                <div id="header">
						<{nocache}>
						<{ if $smarty.session.login eq 1 }>
          						&nbsp;欢迎回来 <b><a href="<{$app}>/user/index/uid/<{$smarty.session.uid}>"><{ $smarty.session.username }>&nbsp;&nbsp;用户中心</a></b>&nbsp;｜&nbsp;<a class="btn btn-primary" href="<{$app}>/login/logout">退出</a>&nbsp;｜&nbsp;
							
									<a href="<{$app}>/indent/"><span class="indentmsg" id="indentmsg" font-style="color:red"></span></a>&nbsp;&nbsp;&nbsp;
						
									<a href="<{$app}>/message/"><span class="msg" id="msg" font-style="color:red"></span></a>

						<{ else }>
						<form action="<{$app}>/login" method="post">
							<div class="row">
								<div class="col-xs-2">
									<input placeholder="用户名" class="form-control"  name="uname" type="text">
								</div>
								<div class="col-xs-2">
								<input placeholder="密码" class="form-control" name="upwd" type="password" >
								</div>
								<input type="submit" class="btn btn-primary"  name="loginsubmit" value="登录" >&nbsp;
								<input type="button" onclick="window.location.href='<{$app}>/login/register'" class="btn btn-primary" value="注册">
							</div>
						</form>
						<{ /if }>
						<{/nocache}>
				</div>
				
				
				
                <div id="logo" style="width:200px;float:left;">
					 <a href="<{$app}>"><img border="0" style="width:200px" alt="HIT-ego_logo" src="<{$public}>/images/logo.jpg"></a>
			    </div>
                <div id="search"  style="width:500px;float:left;margin-top:30px">
					<form action="<{$app}>/goodlist/find" id="searchform" method="get">
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
                            		<a href="<{$app}>/shopcar/">
                            		<span class="label label-success" >&nbsp;购 物 车&nbsp;</span></a>
                            	</div>
							
								<div style="width:65;height:25px;font-size:18px">
									<a href="<{$app}>/user/">
									<span class="label label-info">用户中心</span></a>
								</div>
				     </div>
					<div id="tool2"  style="width:80px;float:right;margin-top:30px;margin-right:40px;" >
                          
                          	<div style="width:65;height:25px;font-size:18px"><a href="<{$app}>/good/add">
                          		<span class="label label-warning">添加商品</span></a>
                          	</div>
						  
						  	<div style="width:65;height:25px;font-size:18px"><a href="<{$app}>/indent/">
						  		<span class="label label-danger">
						  			我的订单</span></a>
						  	</div>
					</div>
		       </div>
			
			
			</div>
		
   			<div style="clear:both;margin-left:40px;margin-right:40px">
