<{ include file="public/header.tpl" }>

			<a href="<{$url}>/add/id/<{$msg.uid}>">
                回信<br>
			</a>
		    来信人：<{$msg.uname}>
            <br>
			
                <h3><{$msg.title}></h3>
            
		    时间：<{$msg.time}>
            <br><{$msg.msg}>
<{ include file="public/footer.tpl" }>


