function headKaiCode(t){$(".numShow").empty();var n=t,e="";$(n).each(function(){e+="<li>"+this+"</li>"}),$(".numShow").append(e)}function defInterface(t,n){var e=[[65,25,.8],[74,50,.7],[117,45,.9],[55,100,.6],[130,80,.5],[108,130,.6],[25,30,.6],[37,64,.7],[130,25,.9],[60,135,.5],[112,100,.6],[87,120,.5]];$(".kaiBox").each(function(o){t=gxklsf.createArr();var i=$(this).find(".KaiUl").find("li").length;$(this).find(".KaiUl").find("li").each(function(a){a<i-1?($(this).text(t[a]),$(this).css({"margin-left":e[a][0],"margin-top":e[a][1],transform:"scale("+e[a][2]+")"})):$(this).addClass("actNum").text(n[o])})})}function recoverFun(){var t=[];$("#kaiNum").find("li").each(function(){t.push($(this).text())}),gxklsf.defBegin(t)}function tabDom(t){anyNum=createNum(0,11),$(t).each(function(){domitem=$(this).find("li"),$(domitem[anyNum]).removeClass("comNum").addClass("actNum").siblings(".actNum").removeClass("actNum").addClass("comNum").css({"margin-left":coordinate[anyNum][0],"margin-top":coordinate[anyNum][1],transform:"scale("+coordinate[anyNum][2]+")"})})}function stopAnimate(t){bgMusic(),clearInterval(moveDom1),clearInterval(moveDom2),clearInterval(moveDom3),clearInterval(moveDom4),clearInterval(moveDom5),$(".kaiBox").each(function(n){$(this).find("li").each(function(){$(this).hasClass("actNum")&&$(this).text(t[n])})})}function bgMusic(){audioType="b",gxklsf.sound.play("audioidBg"),gxklsf.sound.stop("audioidKai")}function kaiMusic(){audioType="r",gxklsf.sound.play("audioidKai"),gxklsf.sound.stop("audioidBg")}function createNum(t,n){var e=n-t,o=Math.random();return t+Math.round(o*e)}var gxklsf={},isTry=!1,ifopen=!1,audioType="b",animateId={},timer=null,ranTime=0,moveDom1=null,moveDom2=null,moveDom3=null,moveDom4=null,moveDom5=null,coordinate=[];$(function(){$("#soundBth").on("click",function(){"soundsOn"==$("#soundBth").attr("class")?($("#soundBth").removeClass("soundsOn").addClass("soundsOff"),gxklsf.sound.stop("audioidKai"),gxklsf.sound.stop("audioidBg")):($("#soundBth").removeClass("soundsOff").addClass("soundsOn"),"b"==audioType?(gxklsf.sound.play("audioidBg"),gxklsf.sound.stop("audioidKai")):(gxklsf.sound.play("audioidKai"),gxklsf.sound.stop("audioidBg")))}),$("#tryBtn").on("click",function(){if(isTry)return $(".jzCheck").show(),setTimeout(function(){$(".jzCheck").hide()},1e3),!1;isTry=!0,gxklsf.startAnimate(),gxklsf.tryKaiFun()})}),gxklsf.startVid=function(t){$("#hourtxt").show(),$("#opening").hide(),bgMusic(),gxklsf.Data(t),gxklsf.defBegin(t.numArr)},gxklsf.stopVid=function(t){$("#hourtxt").show(),$("#opening").hide(),gxklsf.Data(t),stopAnimate(t.numArr),gxklsf.defBegin(t.numArr),isTry=!1},gxklsf.Data=function(t){$("#nextIssue").text(t.nextIssue),$("#drawTime").text(t.drawTime);var n=t.cutdonwTime.split(":");n[0],n[1],n[2];headKaiCode(t.numArr),gxklsf.cutTime(gxklsf.getSecond(t.cutdonwTime))},gxklsf.defBegin=function(t){defInterface(0,t)},gxklsf.startAnimate=function(){kaiMusic();var t=[];coordinate=[[65,25,.8],[74,50,.7],[117,45,.9],[55,100,.6],[130,80,.5],[108,130,.6],[25,30,.6],[37,64,.7],[130,25,.9],[60,135,.5],[112,100,.6],[87,120,.5]],moveDom1=setInterval(function(){tabDom(t=$(".oneUl"))},createNum(60,100)),moveDom2=setInterval(function(){tabDom(t=$(".twoUl"))},createNum(60,100)),moveDom3=setInterval(function(){tabDom(t=$(".threeUl"))},createNum(60,100)),moveDom4=setInterval(function(){tabDom(t=$(".fourUl"))},createNum(60,100)),moveDom5=setInterval(function(){tabDom(t=$(".fiveUl"))},createNum(60,100))},gxklsf.tryKaiFun=function(){setTimeout(function(){stopAnimate(gxklsf.createArr()),setTimeout(function(){recoverFun(),isTry=!1},3e3)},6e3)},gxklsf.getSecond=function(t){var n=t.split(":"),e=n[0],o=n[1],i=n[2];return 3600*(e=e<10?e.substring(e.length-1,e.length):e)+60*(o=o<10?o.substring(o.length-1,o.length):o)+1*(i=i<10?i.substring(i.length-1,i.length):i)},gxklsf.cutTime=function(t){null!=timer&&clearInterval(timer);var t=t;timer=setInterval(function(){if(t>=1){t-=1;var n=Math.floor(t/3600),e=Math.floor(t/60%60),o=Math.floor(t%60),i="";if(i=(n<10?"0"+n:n)+" : ",i=i+""+(e<10?"0"+e:e)+" : "+(o<10?"0"+o:o),$("#hourtxt").text(i),t<10){var a=$(".linelist").find("li");$(a).eq(t).addClass("redli")}}else clearInterval(timer),$("#hourtxt").hide(),$("#opening").css("display","block"),gxklsf.startAnimate()},1e3)},gxklsf.clearTime=function(){clearInterval(timer)},gxklsf.sound={play:function(t){"soundsOn"==$("#soundBth").attr("class")&&document.getElementById(t).play()},stop:function(t){document.getElementById(t).pause()}},gxklsf.createArr=function(){for(var t=[],n=0;n<11;n++){var e=createNum(1,21);if(0!=n)for(var o=0,i=t.length-1;o<t.length;o++){if(e==t[o]){n--;break}if(o==i){t.push(e);break}}else t.push(e)}return t};