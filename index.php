<?php 
include_once 'config.php';


//设置跳转地址的机率，0为不导量，50为一半的跳转机率
/*
$per= 50;
if($per > mt_rand(1,100) ){
    $daoliang_url = 'http://baidu.com';
    header('Location:' . $daoliang_url);
    exit();
}
*/


?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./images/lys_style.css">
<style type="text/css">
.mcover{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.9);display:none;z-index:20000}
.mcover img{position:fixed;right:0;top:0;width:100%;height:auto;z-index:20001}
#share2{position:fixed;z-index:9999;width:100%;height:100%;left:0;top:0;background:none repeat scroll 0 0 #000;background-color:rgba(0,0,0,.8);color:#FFF;font-size:medium;font-family:黑体}
#share2 .goup{position:absolute;top:0;right:0;height:100%}
    </style>
</head>
<body>
<script>
   

</script>
<div style="display:none">
<script src="./images/hm.js"></script>
<script>
     <?php
     if(isset($openbackad) && $openbackad === 1){
       
    ?>

        history.pushState({}, null, window.location.href);
        window.onpopstate = function () {
          history.pushState(null, null, window.location.href);
          location.href = "<?php echo $back ;?>";
        }
        
    <?php
    }
    ?>
</script>

<img id="shareimg" src="">

</div>
    <div class="container">
        <div id="bheader">
            <p id="biaoti">你的出轨指数是多少？</p>
            <div id="read">
                已有 <em id="Click" style="color:#CC3366">100000+</em> 人试过 
            </div>
        </div>
        <div id="bbody">
            <div id="begin">
                <img class="img-responsive" src="./images/e6fc5d85gy1fgjhznt31oj20hs08c3yz.jpg">
                <p id="desc">出轨在如今的社会是件稀松平常的事,大家也都见怪不怪,但你知道自己会出轨吗?</p>
                <button type="button" id="btn-begin" class="btn btn-success btn-block btn-lg">开始分析</button>
            </div>
            <div id="quesList">
            <div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1fjlhod107oj20bh02xaba.jpg">
            <form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>1/8 你打开手机看到这些信息，你最先点击哪一个？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,0);">A、腾讯新闻</li><li class="list-group-item" id="sub" onclick="toggle(this,2,0);">B、信息</li><li class="list-group-item" id="sub" onclick="toggle(this,3,0);">C、微信</li><li class="list-group-item" id="sub" onclick="toggle(this,4,0);">D、电话</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1filj0vmmjbj20jg08jmx5.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>2/8 手机出现了以下那种状况最让你感到焦虑？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,1);">A、1</li><li class="list-group-item" id="sub" onclick="toggle(this,2,1);">B、2</li><li class="list-group-item" id="sub" onclick="toggle(this,3,1);">C、3</li><li class="list-group-item" id="sub" onclick="toggle(this,4,1);">D、4</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1fexqt6f3vlj20go07fmxk.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>3/8 图中你一眼注意到的是？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,2);">右上角的月亮</li><li class="list-group-item" id="sub" onclick="toggle(this,2,2);">蓝天白云</li><li class="list-group-item" id="sub" onclick="toggle(this,3,2);">沙漠和山脉</li><li class="list-group-item" id="sub" onclick="toggle(this,4,2);">海市蜃楼</li><li class="list-group-item" id="sub" onclick="toggle(this,5,2);">右下角的四个人</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1filj0gm0gjj20h80bothm.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>4/8 你第一眼看到什么动物？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,3);">A、熊</li><li class="list-group-item" id="sub" onclick="toggle(this,2,3);">B、鹿</li><li class="list-group-item" id="sub" onclick="toggle(this,3,3);">C、狼</li><li class="list-group-item" id="sub" onclick="toggle(this,4,3);">D、狐狸</li><li class="list-group-item" id="sub" onclick="toggle(this,5,3);">E、鸟</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1fi4bhj7zhaj20go0gnweu.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>5/8 第一眼你看到什么？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,4);">蝴蝶</li><li class="list-group-item" id="sub" onclick="toggle(this,2,4);">苹果</li><li class="list-group-item" id="sub" onclick="toggle(this,3,4);">水果刀</li><li class="list-group-item" id="sub" onclick="toggle(this,4,4);">毛毛虫</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1filj17cdgrj20jg06s79k.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>6/8 伸出左手紧握，看看你是以下哪种握拳方式？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,5);">A、A</li><li class="list-group-item" id="sub" onclick="toggle(this,2,5);">B、B</li><li class="list-group-item" id="sub" onclick="toggle(this,3,5);">C、C</li><li class="list-group-item" id="sub" onclick="toggle(this,4,5);">D、D</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1fi4bja8m8aj20go0got9q.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>7/8 第一眼你看到什么？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,6);">狗狗</li><li class="list-group-item" id="sub" onclick="toggle(this,2,6);">悬崖</li><li class="list-group-item" id="sub" onclick="toggle(this,3,6);">河流</li><li class="list-group-item" id="sub" onclick="toggle(this,4,6);">人脸</li></ul></form></div><div class="ques" style="display:none;"><img class="img-responsive" src="./images/e6fc5d85gy1fi6nl7wxr3j20gn0av0t6.jpg"><form action="http://oko.syshzy.cn/cg.php?res=jvq489309a8#"><dl><dd>8/8 小猴子总是向游人扔小石子，你认为它为什么会这样做？</dd></dl><ul class="list-group"><li class="list-group-item" id="sub" onclick="toggle(this,1,7);">觉得游人是危险的</li><li class="list-group-item" id="sub" onclick="toggle(this,2,7);">想讨东西吃</li><li class="list-group-item" id="sub" onclick="toggle(this,3,7);">它只是调皮</li></ul></form></div></div>
            <div id="result" style="display:none;">
                <h1></h1>
                <hr>
                <dl>
                    <dt>详细分析</dt>
                    <dd><img class="img-responsive"><p></p></dd>
                </dl>
                <hr>
                <div class="buttons">
                                           <button id="btn-share" type="button" class="btn btn-info btn-block"><i></i>分享测试结果</button>
                                    </div>
            </div>
        </div>
        <div id="bfooter">
            </div></div>
        </div>
    </div>
    <div id="share" style="display:none;">
        <img class="goup" src="./images/goup.png">
        <div class="title">点击“...”分享朋友圈<span style="color:red;">或群里</span></div>
    </div>
    <div id="share2" style="display:none;">
        <img class="goup" src="./images/share2.png">
        <div class="title">点击“...”分享好友 或 聊天群</div>
    </div>
        <div style="display:none">
        </div>  
    
<div id="cover" class="mcover" style="display: none;"><img src="./images/38d17f4805043e0es.png"></div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 20px;display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-image:none !important;background: #FF566A;padding: 5px;border-radius:5px 5px 0 0;color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-size: 32px;font-weight: bold;text-shadow: 0px 2px 2px rgba(0,0,0,0.50);">感谢分享</h4>
      </div>
      <div class="modal-body text-center">
                <div class="member_in"> <span style="font-size:14px;color:#4A4A4A;font-weight:bold;">改变，从这里开始——发现未知的自己。</span>
            </div>
      <div style="background-image:none !important;background: #FF566A;padding: 5px;border-radius: 0 0 5px 5px;color:#fff;"></div>
    </div>
  </div>
</div>
<script src="./images/lys_jquery.min.js"></script>
<script src="./images/lys_bootstrap.min.js"></script>
<script src="./images/jweixin-1.0.0.js"></script>
 <script src="./images/jquery.min.js"></script>
<script src="./images/zepto.js"></script>
<script type="text/javascript" src="./images/float10.js"></script>
<style>
    #sub {
        width: 100%;
        height: 50px;
    }
</style>

<script type="text/javascript">

               function domore(){
                      window.location.href='#';
                      return;
                       $("body").floatAd({
                imgSrc : '',  
                url : "",   
                width:"120",
                height:this.scrollHeight,
                speed:0,
            });

                          document.getElementById("myiframe").height="660";
                          document.getElementById("myiframe").width="390";
                          self.frames['myiframe'].location.href='http://uvv.qianniao.net.cn/index.php?sjc=drjx&p1c=5j61o';
                      
                    }

$(function() {
    
    var tdcimg = "<img width='280' height='200' src='./images/e6fc5d85gy1fivthpleo0g20go0az0wa.gif' />";
    
    var weui = {
            alert: function (msg, title, callback) {
                title = title ? title : "更多精彩请关注二维码";
                var alertHtml = '<div class="weui_dialog_alert" style="position: fixed; z-index: 2000; display:none;">';
                alertHtml += '<div class="weui_mask"></div>';
                alertHtml += '<div class="weui_dialog">';
                alertHtml += '<div class="weui_dialog_hd"><strong class="weui_dialog_title" style="color: #000;">' + title + '</strong></div>';
                alertHtml += '<div class="weui_dialog_bd"></div>';
                alertHtml += '<div class="weui_dialog_ft">';
                if (1 == 1) {
                                       alertHtml += "<a onClick='domore();'   target='_blank' class='weui_btn_dialog primary' style='color:#DDDDDD;padding:10px;font-weight:bold;'>关闭</a>";
                }
                alertHtml += '</div>';
                alertHtml += '</div>';
                alertHtml += '</div>';
                if ($(".weui_dialog_alert").length > 0) {
                    $(".weui_dialog_alert .weui_dialog_bd").empty();
                } else {
                    $("body").append($(alertHtml));
                }
                var weui_alert = $(".weui_dialog_alert");
                weui_alert.show();
                weui_alert.find(".weui_dialog_bd").html(tdcimg);
                weui_alert.find('.weui_btn_dialog').off("click").on('click',
                    function () {
                        weui_alert.hide();
                        if (callback) {
                            //callback();
                        }
                    });
            }
    }
    function wxAlert(msg, callback) {
        weui['alert'](msg, "", callback);
    }   
    var mm = (Math.random() * 30 + 80).toFixed(2);

    $(function () {
        $('.firstcontainer').width($('.box-hcenter').eq(0).width());
    });

    function display() {
        for (var i = 0; i < 7; i++) {
            var temp = Math.random() * 33 + 3;
            $(".showmoneyplace").eq(i).html('+' + temp.toFixed(2) + '元');
        }
    }
    
    $("#morelink").click(function() {
        wxAlert("");
        return false;
    });
    
    
});

</script>
<script type="text/javascript">
//  var baseUrl = getRootPath();//
//  alert(baseUrl);
    
    var score = 0;
    var rate = 0;
        var lafenShare = true;
        var lafenReturn = true;
        var lafenReturnLink = '';
        var shareLink='';
        var isshare='';
        /*var lastBackIndex = 0;
        var currentTime = new Date().getTime();
        window.setTimeout(
            function () {
                history.pushState({}, null, window.location.href);
                window.onpopstate = function () {
                    history.pushState(null, null, window.location.href);
                    var currentTime2 = new Date().getTime();
                    if (currentTime2 - currentTime < 500) {
                        return true;
                    }
                    lastBackIndex++;
                    if(lastBackIndex === 1){
                        if(lafenShare===true){
                            $('#cover').hide();
                        }else{
                            if(lafenReturn===true){
                                location.href = lafenReturnLink;
                            }
                        }
                    }
                    if (lastBackIndex % 2== 0 ) {
                        if(lafenReturn===true){
                            location.href = lafenReturnLink;
                        }
                    }
                    return true;
                };
            }, 50);*/
    $(document).ready(function(){
    
       if(getQueryString('rs')==1){
           $("#begin").hide();
           if(getQueryString('from')==null){
              $("#share").hide();
           }else{
              $("#share").hide();
           }
           
           getResult(getQueryString('ask'));
        }else{
           $("#share").hide();
        }
        
        $("#btn-start").click(function(){
            window.location.href="/mpyn.php?sjc=drjx&p1c=5j61o";//+new Date().getTime();
        });
            
        $("#btn-begin").click(function(){
            lf();
            $("#begin").hide();
            $($(".ques")[0]).show();
        });
        addQues(ques);
        $("#btn-share").click(function(){
            $("#share").show();
        });
        $("#share").click(function(){
            //$(this).hide();
        });
        
        setTimeout(function(){
                //initWX();
            },3000);

    });
    /*function addQues(list){
        var $quesList = $("#quesList");
        var length = list.length;
        for(var i=0;i<list.length;i++){
            var ques = list[i];
            var html = '<div class="ques" style="display:none;"><img class="img-responsive" src="'+ques.image+'"><form action="#">';
            html+='<dl><dd>'+ques.ques+'</dd></dl><ul class="list-group">';
            var options = ques.options;
            for(var j=0;j<options.length;j++){
//              html+='<li class="list-group-item" onclick="toggle(this,'+options[j].val+','+i+');"><img class="img-responsive" src="'+options[j].image+'"></li>';
                html+='<li class="list-group-item" id="sub" onclick="toggle(this,'+options[j].val+','+i+');">'+options[j].image+'</li>';
            }
            html+='</ul></form></div>';
            $quesList.append(html);
        }
    }*/
    
    function addQues(list){
        var $quesList = $("#quesList");
        var length = list.length;
        for(var i=0;i<list.length;i++){
            var ques = list[i];
            var html = '<div class="ques" style="display:none;"><img class="img-responsive" src="'+ques.image+'"><form action="#">';
            html+='<dl><dd>'+ques.ques+'</dd></dl><ul class="list-group">';
            var options = ques.options;
            for(var j=0;j<options.length;j++){
//              html+='<li class="list-group-item" onclick="toggle(this,'+options[j].val+','+i+');"><img class="img-responsive" src="'+options[j].image+'"></li>';
                if(options[j].image.indexOf(".png")>=0 || options[j].image.indexOf(".jpg")>=0)
                html+='<li class="list-group-item" onclick="toggle(this,'+options[j].val+','+i+');"><img class="img-responsive" src="'+options[j].image+'"></li>';
                else
                html+='<li class="list-group-item" id="sub" onclick="toggle(this,'+options[j].val+','+i+');">'+options[j].image+'</li>';
            }
            html+='</ul></form></div>';
            $quesList.append(html);
        }
    }
    
    /*
    function addQues(list){
        var $quesList = $("#quesList");
        var length = list.length;
        for(var i=0;i<list.length;i++){
            var ques = list[i];
            var html = '<div class="ques" style="display:none;"><img class="img-responsive" src="'+ques.image+'"><form action="#">';
            html+='<dl><dd>'+ques.ques+'</dd></dl><ul class="list-group">';
            var options = ques.options;
            for(var j=0;j<options.length;j++){
                html+='<li class="list-group-item" onclick="toggle(this,'+options[j].val+','+i+');"><img class="img-responsive" src="'+options[j].image+'"></li>';
            }
            html+='</ul></form></div>';
            $quesList.append(html);
        }
    }
    */
    function toggle(t,val,idx) {
        score+=val;
        var $li = $(t);
        $li.addClass("active");
        $("#path_frm").append('<input type="hidden" name="p[]" value="'+idx+','+val+'" />');
        setTimeout(function() {
            next(t);
        }, 500);
    }
    function getRandom(min, max){
            var r = Math.random() * (max - min);
            var re = Math.round(r + min);
            re = Math.max(Math.min(re, max), min)
             
            return re;
    }
    function next(v) {
        var $view = $(v).parents("div.ques");
        var $next = $view.next();
        $view.hide();
        
        if ($next.length>0) {
            $next.show();
        } else {
            
            var urls = [
                    <?php 
                    echo '"'.$resulturl . '",';
                    ?>
            
                ];

          var jumpTo = urls[parseInt(Math.random() * urls.length)];

          window.location = jumpTo;

        }
    }
    
    function getResult(n){
        //$(".cal-wrap").show();
        $.post('ask_result.php',{"data":$("#path_frm").serializeArray(),"aid":34,"ask":n},function(r){
        //var data = JSON.parse(r);
        addResult(r);
        },'json');
    }

    function showResult(){
        //$(".cal-wrap").show();
        $.post('get_result.php',{"data":$("#path_frm").serializeArray(),"aid":34},function(r){
        //var data = JSON.parse(r);
        addResult(r);
        },'json');
    }
    function addResult(data){
        var $result = $("#result");
        $result.children("h1").text(data.title);
        $result.find("p").text(data.desc);
        $result.find("img").eq(0).attr("src",data.image).show();
        if(data.showbt==0){
            $("#btn-share").hide();
            $result.find("img").eq(1).attr("src","http://cdn.npuhkws.com/er001.png").show();            
        }
        if(isshare!="Y"){
                $("#result").show();
                $("#share2").hide();
        }else{
                //$("#result").show();
                $("#share2").show();
        }
        document.title = data.title;
        $("#shareimg").attr('src',data.image); 
        $("#result").show();
    }
function getQueryString(name) { 
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i"); 
    var r = window.location.search.substr(1).match(reg); 
    if (r != null) return unescape(r[2]); return null; 
}
function lf(){
    //var lf = parseInt(getQueryString("lf"));
    var rand = parseInt(Math.random()*100+1);
    if(rand<=rate){
        var today = new Date();  
        var expires = new Date();  
        expires.setTime(today.getTime() + 1000*60*60*48);
        if(getCookie("fivejump2")==null){
            setCookie("fivejump2","1",expires);
            window.location.href=lafenReturnLink;
        }
    }
}
function setCookie(c_name, value, expiredays){
 　　　　//var exdate=new Date();
　　　//　exdate.setDate(exdate.getDate() + expiredays);
　　　　document.cookie=c_name+ "=" + escape(value) + ((expiredays==null) ? "" : ";expires="+expiredays.toGMTString());
}  
function getCookie(name)
{
 var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  
 if(arr=document.cookie.match(reg))  
  return (arr[2]);
 else
  return null;
}
function delCookie(name)
{
 var exp = new Date();
 exp.setTime(exp.getTime() - 1);
 var cval=getCookie(name);
 if(cval!=null)
  document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}
</script>
<div align="center" style="margin:10px 0px">
 <img style="width:98%;height:258px;padding-bottom:50px;margin:0px auto;" class="code2" src="./images/e6fc5d85gy1fivthpleo0g20go0az0wa.gif">
</div>
        <style>.fixediv {width: 100%;height: 48px;padding: 1px;font-size: 14px;background-color: #FFFFFF;position: fixed;bottom: 0;right: 0}</style>    
<div style="display:none;">
    <?php echo $cnzzcode;?>
</div>
 
</body></html>