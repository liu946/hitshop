<html>
	<head>
		<title>《HIT-shop》 后台管理系统</title>
		<meta http-equiv="Windows-Target" content="_top" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="Author" content="" />
		<meta name="Keywords" content="" />
		<meta http-equiv="Windows-Target" content="_top" />
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/style.css" />
	</head>

<body class="center" onload="document.getElementById('login-form').username.focus()">
<div id="login-box">
<div id="main">
	<div class="head-dark-box">
		&nbsp;<b>《HIT-shop》 后台管理系统</b>
	</div>

	<form method="post" action="<{$url}>/prologin" id="login-form">
		<ul>	
			<li style="height:25px" class="dark-row" >
				<span class="list_width">用户名</span>
				<input type="text" class="text-box" size="15" name="uname">
			</li>
			<li style="height:25px" class="light-row">
				<span class="list_width">密&nbsp;&nbsp;&nbsp;码</span>
				<input type="password" class="text-box" size="15" name="upwd">
			</li>
			<li style="height:25px" class="dark-row">
				<span class="list_width">验证码</span>
				<input type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();"  class="text-box" size="6" name="code" />
				<img style="cursor:pointer;" alt="看不清，换一张" onclick="this.src='<{$url}>/code/'+Math.random()" src="<{$url}>/code" />
			</li>
			<li style="height:25px" class="light-row">
				<input type="hidden" name="action" value="login"> 
				<span class="list_width">&nbsp;</span>
				<input type="submit" class="button" value="登录系统" />
			</li>
		</ul>
	</form>
</div>
</div>
</body>
</html>

