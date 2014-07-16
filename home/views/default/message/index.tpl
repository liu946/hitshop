<{ include file="public/header.tpl" }>

     <{foreach $message as $msg}>
     <div>
			<a href="<{$url}>/add/id/<{$msg.uid}>">
                回信<br>
			</a>
		    来信人：<{$msg.uname}>
            <br>
			<a href="<{$url}>/page/id/<{$msg.id}>">
                <{if $msg.state eq 1}><strong><{$msg.title}></strong><{else}><{$msg.title}><{/if}>
            </a>
		    时间：<{$msg.time}>
	</div>
	<hr>
	<{/foreach}>	
<{ include file="public/footer.tpl" }>