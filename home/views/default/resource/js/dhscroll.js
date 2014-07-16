
function dhscroll(){
    //author:dh20156
    var dh = this;
    this.autoid = null;
    //块1
    this.scrollDOM = null;
    //块2
    this.scrollCDOM = null;
    //展示宽度（和块1宽度一致）
    this.showwidth = 0;
    //每次滚动长度
    this.steplength = 51;
    var oldlength = this.steplength;
    //滚动时间间隔
    this.steptime = 1;
    //停顿时间
    this.resttime = 3000;
    //滚动长度
    this.uvwidth = 0;

    //无缝设置过程
    this.getsw = function(){
        var tempw = this.scrollCDOM.offsetWidth;
        var temps = this.scrollCDOM.innerHTML;
        this.scrollCDOM.innerHTML = [temps,temps].join("");
        this.scrollCDOM.style.width = tempw*2+"px";
        if(document.attachEvent){
            this.scrollDOM.attachEvent("onmouseover",dh.pause);
            this.scrollDOM.attachEvent("onmouseout",dh.goon);
        }else{
            this.scrollDOM.addEventListener("mouseover",dh.pause,true);
            this.scrollDOM.addEventListener("mouseout",dh.goon,true);
        }
        this.uvwidth = Math.ceil(this.scrollDOM.scrollWidth / 2);
    }

    //从右到左
    this.scrollleft = function(){
        if(this.autoid!=null){
            window.clearTimeout(this.autoid);
        }
        var uvleft = this.scrollDOM.scrollLeft;
        uvleft += this.steplength;

        this.scrollDOM.scrollLeft = uvleft;

        if(uvleft>=this.uvwidth){
            this.scrollDOM.scrollLeft = 0;
        }

        if(uvleft % this.showwidth == 0){
            this.autoid = window.setTimeout(function(){dh.scrollleft()},dh.resttime);
        }else{
            this.autoid = window.setTimeout(function(){dh.scrollleft()},dh.steptime);
        }
        document.getElementById("s").innerHTML = this.uvwidth+","+uvleft;
    }

    //从左到右
    this.scrollright = function(){
        if(this.autoid!=null){
            window.clearTimeout(this.autoid);
        }
        var uvleft = this.scrollDOM.scrollLeft;
        uvleft -= this.steplength;

        this.scrollDOM.scrollLeft = uvleft;

        if(uvleft <= 0){
            this.scrollDOM.scrollLeft = this.uvwidth;
        }

        if(uvleft % this.showwidth == 0){
            this.autoid = window.setTimeout(function(){dh.scrollright()},dh.resttime);
        }else{
            this.autoid = window.setTimeout(function(){dh.scrollright()},dh.steptime);
        }
        document.getElementById("s").innerHTML = this.uvwidth+","+uvleft;
    }

    //开始滚动，参数为方向，首屏是否停顿
    this.go = function(direction,rest){
        if(this.autoid!=null){
            window.clearTimeout(this.autoid);
        }
        if(direction=="left"){
            if(rest){
                this.autoid = window.setTimeout(function(){dh.scrollleft()},5000);
            }else{
                dh.scrollleft();
            }
        }else{
            if(rest){
                this.autoid = window.setTimeout(function(){dh.scrollright()},5000);
            }else{
                dh.scrollright();
            }
        }
    }

    //往右
    this.pre = function(){
            this.scrollright();
    }
    //往左
    this.next = function(){
            this.scrollleft();
    }
    //暂停
    this.pause = function(){
        dh.oldlength = dh.steplength;
        dh.steplength = 0;
    }
    //继续
    this.goon = function(){
        dh.steplength = dh.oldlength;
    }
}
/* <dl>
<dt><h1>dhScroll Ver2.0.0 左右横向无缝滚动</h1></dt>
<dd>支持从左到右，从右到左两个方向的无缝滚动；</dd>
<dd>支持手动更改滚动方向；</dd>
<dd>支持连续/停顿方式滚动；</dd>
<dd>鼠标指向暂停滚动，移开继续；</dd>
<dt><h1>滚动对象模型</h1></dt>
<dd><块1><块2><块2的子元素>内容</块2的子元素></块2></块1></dd>
<dt><h1>滚动模型设置样式要点</h1></dt>
<dd>块1设置的宽度为展示宽度；overflow:hidden;</dd>
<dd>块2设置的宽度为块2子元素累计宽度（确保块2所有子元素排在一排）；</dd>
<dd>由于脚本中无缝部分采用innerHTML重写块2子元素，导致IE和FF在样式渲染上有所区别，FF下块2的宽度应设置为块2宽度的两倍；</dd>
<dd>块2子元素必须确保排在一排，非表格的话最好float:left;</dd>
</dl> */