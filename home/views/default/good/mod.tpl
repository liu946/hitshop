<{ include file="public/header.tpl" }>
	<form  method="post" action="<{$url}>/update" enctype="multipart/form-data">
	
	
	
    <div>cid&nbsp;&nbsp;<{$select}></div><br>
    <input type="text"   name="id" value="<{$good.id}>">
    <div>name&nbsp;&nbsp;<input type="text"   name="name" value="<{$good.name}>"></div><br> 
    
    <div>simg&nbsp;&nbsp;<input type="file"   name="simg" value="<{$good.simg}>"></div><br> 
    <div>bimg&nbsp;&nbsp;<input type="file"   name="bimg" value="<{$good.bimg}>"></div><br>
    <div>price&nbsp;&nbsp;<input type="text"   name="price" value="<{$good.price}>"></div><br> 
    <div>proprice&nbsp;&nbsp;<input type="text"   name="proprice" value="<{$good.proprice}>"></div><br>
    <div>danwei&nbsp;&nbsp;<input type="text"   name="danwei" value="<{$good.danwei}>"></div><br>
    <div>num&nbsp;&nbsp;<input type="text"   name="num" value="<{$good.num}>"></div><br>
	<div>jieshao&nbsp;&nbsp;<input type="text"   name="jieshao" value="<{$good.jieshao}>"></div><br>
	<div >
	<span>起始日期<span class="red_font">*</span></span>
		<{$starttime}> &nbsp;请选择开始时间！	
	</li>
	
	<span class="col_width">截止日期<span class="red_font">*</span></span>
	<{$endtime}> &nbsp;请选择下线时间,<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
	<span class="col_width" style="margin-top:30px">详细介绍</span>

	
	<li class="light-row" style="margin:0px; padding:0px">
		<textarea cols="80" rows="10" name="xiangxi" style="display: none;" value="<{$good.xiangxi}>"><{$good.xiangxi}></textarea>
		<{$ck}>
	</li>
	<input type="submit" class="button" value="保存">
    </form>

<{ include file="public/footer.tpl" }>

