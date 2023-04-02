<?php 
/**
 *
 *  出轨趣味配置文件
 *
 *  @author     kpteam@126.com
 *  @date       2017-09-22
 *  @version    v1.0
 * 
 */


//活动使用的域名列表
$eventDomainList = array(

        //createNonceStr(3) . '.aa.com',
       'www.baidu1.com',

);


$eventRand  = array_rand($eventDomainList);
//获取随机域名
$currentDomain = $eventDomainList[$eventRand];
$currentDomain = trim($currentDomain);


$jumpPerTime = 60;  //间隔多少时间再重新随机新域名，单位秒
$nowtime = time();
if( isset($_GET['t']) && !empty($_GET['t']) ){
    $get_v = $_GET['t'];
   // $get_time = base64_decode($get_v);
    $get_time = $get_v;
    $get_time = intval($get_time);


    if($nowtime - $get_time > $jumpPerTime){        //如果当前时间大于请求的时间一定值时，开始选择新的域名
    //if(true){
        //$base_nowtime = base64_encode($nowtime);
        $base_nowtime = $nowtime;
        $param = str_replace('t='.$get_v, 't='.$base_nowtime, $_SERVER['REQUEST_URI']);
        $jump_url = 'http://'.$currentDomain . $param;
        header('Location:' . $jump_url);
        exit();
    }

}else{
    //$base_nowtime = base64_encode($nowtime);
    $base_nowtime = $nowtime;
    if(strpos($_SERVER['REQUEST_URI'],'?' ) === false){  //如果请求参数没有？
        $new_url = 'http://'.$currentDomain . $_SERVER['REQUEST_URI'] . '?t='. $base_nowtime;
    }else{
        $new_url = 'http://'.$currentDomain. $_SERVER['REQUEST_URI'] . '&t='. $base_nowtime ;
    }
    header('Location:' . $new_url);
    exit();

}


//结果页地址，测试结果是从以下链接随机出来的
$resultPageList = array(
        //下面是公众号对应的结果页
        "http://mp.weixin.qq.com/s/m2MlnXN6ndsrCK6uY7sJZw",
        "http://mp.weixin.qq.com/s/LI1rz8x2W60-GSzWsjUPIQ",
        "http://mp.weixin.qq.com/s/REaTZix7d0qsel-nI4fXmg",
        "http://mp.weixin.qq.com/s/7aujlTBhX6-fgI4LnBpuyw",

        //下面是域名方式的结果页
        //'1.php',
       // '2.php',
        //'3.php',
        //'4.php',

);
$resulturl = $resultPageList [array_rand($resultPageList)];



//统计代码，这里填写了，可以不在每个结果页再次添加统计代码
$cnzzcode = '<script src="https://s19.cnzz.com/z_stat.php?id=123&web_id=123" language="JavaScript"></script>';

//是否开启返回广告位,1为开启，0为关闭
$openbackad = 1;

//返回广告位的跳转链接地址，一行为一个地址，支持多个
$backurlList = array(

    'www.baidu2.com',
    

);
$backurl = $backurlList [array_rand($backurlList)];
$back = 'http://' . $backurl;