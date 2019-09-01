<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"template/vfed/html/label/notice.html";i:1558953336;}*/ ?>
<?php $__TAG__ = '{"num":"1","order":"desc","by":"time","level":"3","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<div class="fed-tips-info fed-part-rows fed-back-whits">
	<a class="fed-tips-close fed-text-muted" href="javascript:;">×</a>
	<div class="fed-col-sm5 fed-hide-xs">
		<a class="fed-list-pics fed-lazy fed-part-2by3" href="<?php echo mac_default($vo['art_jumpurl'],'javascript:;'); ?>" style="background-image: url(<?php echo $vo['art_pic']; ?>)"></a>
	</div>
	<div class="fed-col-xs12 fed-col-sm7 fed-padding-x">
		<h2 class="fed-text-center fed-text-bold fed-padding"><?php echo mac_substring($vo['art_name'],10); ?></h2>
		<span class="fed-text-center fed-text-muted fed-visible"><?php echo $vo['art_remarks']; ?></span>
		<div class="fed-padding">
			<?php echo mac_substring(mac_url_content_img($vo['art_content']),250); ?>
		</div>
		<div class="fed-text-center fed-padding">
			<a class="fed-btns-info fed-tips-btns fed-back-green fed-padding-x fed-font-xvii fed-visible" href="javascript:;" data-href="<?php echo $vo['art_jumpurl']; ?>"><?php echo mac_default($vo['art_from'],'确定'); ?></a>
		</div>
	</div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>