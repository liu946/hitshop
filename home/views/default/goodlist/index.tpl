<{include "public/header.tpl"}>
<script src="<{$public}>/js/ajax3.0.js"> </script>


<div id="page">
	���ݼ�����....
</div>

<script>
	
	var pageobj = document.getElementById("page");
	//����һ��������Ϊ����
	var cache=new Array();

	function setPage(url) {
		if(!cache[url])	{	
			Ajax().get(url, function(data){
				pageobj.innerHTML=data;
				cache[url]=data;
			});
		}else {
			pageobj.innerHTML=cache[url];
		}
	}

	setPage('<{$url}>/fpage/page/1');
</script>

<{include "public/footer.tpl"}>