<?php
$conf['qqjump']=1;
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false && $conf['qqjump']==1){
$siteurl='http://'.$_SERVER['SERVER_NAME'].''.$_SERVER["REQUEST_URI"];
echo '<html>
    <head>	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>请使用浏览器打开</title>
	<link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/css/htmleaf-demo.css">
  	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<meta name="format-detection" content="telephone=no">
	<meta content="false" name="twcClient" id="twcClient">
	<script type="text/javascript">
  function copyText() {
   var text = document.getElementById("text").innerText;
   var input = document.getElementById("input");
   input.value = text; // 修改文本框的内容
   input.select(); // 选中文本
   document.execCommand("copy"); // 执行浏览器复制命令
   alert("复制成功，请粘贴到浏览器打开！");
  }
 </script>
 <style type="text/css">
 button{
background: none;
border:none;
}
</style>
	<style type="text/css">
  .wrapper {position: relative;}
  #input {position: absolute;top: 0;left: 0;opacity: 0;z-index: -10;}
</style>
	<style> 
body{ text-align:center} 
.div{ margin:0 auto; width:400px; height:100px; border:0px solid #000} 
</style> 
	<style type="text/css">
		.loader {
		    width: 320px;
		    margin: 50px auto 70px;
		    position: relative;
		}
		.loader .loading-1 {
        	margin:0px auto;
		    position: relative;
		    width: 70%;
		    height: 10px;
		    border: 1px solid #69d2e7;
		    border-radius: 10px;
		    animation: turn 4s linear 1.75s infinite;
		}
		.loader .loading-1:before {
		    content: "";
		    display: block;
		    position: absolute;
		    width: 0%;
		    height: 100%;
		    background: #69d2e7;
		    box-shadow: 10px 0px 15px 0px #69d2e7;
		    animation: load 2s linear infinite;
		}
		.loader .loading-2 {
		    width: 100%;
		    position: absolute;
		    top: 20px;
		    color: #69d2e7;
		    font-size: 22px;
		    text-align: center;
		    animation: bounce 2s  linear infinite;
		}
		@keyframes load {
		    0% {
		        width: 0%;
		    }
		    87.5%, 100% {
		        width: 100%;
		    }
		}
		@keyframes turn {
		    0% {
		        transform: rotateY(0deg);
		    }
		    6.25%, 50% {
		        transform: rotateY(180deg);
		    }
		    56.25%, 100% {
		        transform: rotateY(360deg);
		    }
		}
		@keyframes bounce {
		    0%,100% {
		        top: 10px;
		    }
		    12.5% {
		        top: 30px;
		    }
		}
        footer img{
        width:50px;
        
        }
        footer{
        	text-align:center;
            margin-bottom:40px;
            margin-top:60%;
        }
        h5{
        	text-align:center;
        }
	</style>
<meta http-equiv="refresh" content="0.1;url=mttbrowser://url='.$siteurl.'">
</head>
<body>
	<div class="htmleaf-container">
	<header class="htmleaf-header">
			<h1>嘿嘿影视正在请求你<span>使用其他浏览器打开本站</span></h1>
		</header>
		<div class="demo">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="loader">
		                        <div class="loading-1"></div>
		                        <div class="loading-2">因QQ内置浏览器协议问题<br>请点击右上角使用其他浏览器</div>
		                    </div>
		                </div>
		                <div class="div"><br><div class="wrapper">
  <p id="text">'.$siteurl.'</p>
  <textarea id="input">这是幕后黑手</textarea>
  <button onclick="copyText()"><img src="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/img/home.png"></button>
</div></div>
		            </div>
		        </div>
		    </div>
	</div>
    <footer>
    <h5>点击下方已安装的浏览器图标直接跳转</h5>
    <a href="mttbrowser://url='.$siteurl.'"><img src="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/img/mtt.png"></a>
    <a href="googlechrome://browse?url='.$siteurl.'"><img src="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/img/360chrome.png"></a>
    <a href="googlechrome://browse?url='.$siteurl.'"><img src="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/img/chrome.png"></a>
    <a href="ucweb://'.$siteurl.'"><img src="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/img/UCMobile.png"></a>
    <a href="mibrowser:'.$siteurl.'"><img src="https://ysjtzy.oss-cn-beijing.aliyuncs.com/heihei/fh/img/Mbrowser.png"></a>
    </footer>
</body>
</html>';
exit; 
}
?>

<?php
header('Content-Type:text/html;charset=utf-8');
if(version_compare(PHP_VERSION,'5.5.0','<'))  die('PHP版本过低，最少需要PHP5.5，请升级PHP版本！');
@ini_set('max_execution_time', '0');
@ini_set("memory_limit",'-1');
define('ROOT_PATH', __DIR__ . '/');
define('APP_PATH', __DIR__ . '/application/');
define('MAC_COMM', __DIR__.'/application/common/common/');
define('MAC_HOME_COMM', __DIR__.'/application/index/common/');
define('MAC_ADMIN_COMM', __DIR__.'/application/admin/common/');
define('MAC_START_TIME', microtime(true) );
define('BIND_MODULE','index');
define('ENTRANCE', 'index');
$in_file = rtrim($_SERVER['SCRIPT_NAME'],'/');
if(substr($in_file,strlen($in_file)-4)!=='.php'){
    $in_file = substr($in_file,0,strpos($in_file,'.php')) .'.php';
}
define('IN_FILE',$in_file);
if(!is_file('./application/data/install/install.lock')) {
    header("Location: ./install.php");
    exit;
}
if (!@mb_check_encoding($_SERVER['PATH_INFO'    ], 'utf-8')){
    $_SERVER['PATH_INFO']=@mb_convert_encoding($_SERVER['PATH_INFO'], 'UTF-8', 'GBK');
}
require __DIR__ . '/thinkphp/start.php';