<{ include file="public/header.tpl" }>
<div class="panel panel-default">
          	<div class="panel-heading">
              <strong style="width:90%;">
                <{$smarty.const.APP_NAME}>-添加商品
              </strong>
            </div>
	<div class="panel-body">
	<form  method="post" action="<{$url}>/insert" enctype="multipart/form-data">
 
	  <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">cid</span>
    	<{$select}>
  </div>
  
	<div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	<span class="input-group-addon">品名</span>
    <input  type="text" class="form-control" name="name" value="<{$good.name}>">
  </div>
    
    	<div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px"><span class="input-group-addon">小图</span>
	<input type="file"   name="simg" value="<{$good.simg}>"></div>
	

	   <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px"><span class="input-group-addon">大图</span>
	<input type="file"   name="bimg" value="<{$good.bimg}>"></div>

	<div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	<span class="input-group-addon">现价</span>
    <input  type="text" class="form-control" name="price" value="<{$good.price}>">
  </div>
     
	 <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">原价</span>
    <input  type="text" class="form-control" name="proprice" value="<{$good.proprice}>">
  </div>
  
  	 <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">单位</span>
    <input  type="text" class="form-control" name="danwei" value="<{$good.danwei}>">
  </div>
  
  
     <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">数量</span>
    <input  type="text" class="form-control" name="num" value="<{$good.num}>">
  </div>
  
  
     <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">介绍</span>
    <input  type="text" class="form-control" name="jieshao" value="<{$good.jieshao}>">
  </div>
  
  
   	  <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">起始日期</span>
    	<{$starttime}>  &nbsp;请选择开始时间！	
  </div>
	
	  <div  class="input-group" style="padding-left: 50px;padding-right: 50px;padding-top:50px">
	 <span class="input-group-addon">截止日期</span>
    	<{$endtime}> &nbsp;请选择下线时间,	
 
    <input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
	 </div>


	
	 <div  class="input-group" style="margin-left: 50px;margin-right: 50px;padding-top:50px">
	    <span class="input-group-addon">详细介绍</span></div>
		<center>
		<div style='margin:50px'>
		<textarea cols="80" rows="10" name="xiangxi" style="display: none;padding-left: 50px;padding-right: 50px;" value="<{$good.xiangxi}>"></textarea>
		<{$ck}>
		</div>
	<input type="submit" class="btn btn-primary"  value="提交">
	</center>
    </form>
</div>
</div>
<{ include file="public/footer.tpl" }>

