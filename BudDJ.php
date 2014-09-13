<?php

header("Content-type:text/html; charset=utf-8");

$user_agent = $_SERVER['HTTP_USER_AGENT'];
   //var_dump($user_agent);
if(stristr($_SERVER['HTTP_USER_AGENT'],'Android')) {
   //echo '你的手机是：Android系统';
header('Location: http://fir.im/api/v2/app/install/54094943ed692cd2760006f4'); 
}else if(stristr($_SERVER['HTTP_USER_AGENT'],'iPhone')){
   //echo '你的手机是：ISO系统';
header('Location: itms-services://?action=download-manifest&url=https%3A%2F%2Ffir.im%2Fapi%2Fv2%2Fapp%2Finstall%2F53c7fdfd331576cc35000081');
}else{
   //echo '你使用的是其他系统';
header('Location: http://baidu.com/');
}


?>
