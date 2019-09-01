<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/www/wwwroot/heiheiys.top/application/admin/view/gbook/info.html";i:1520561216;s:65:"/www/wwwroot/heiheiys.top/application/admin/view/public/head.html";i:1522628860;s:65:"/www/wwwroot/heiheiys.top/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">
    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="gbook_id" name="gbook_id" type="hidden" value="<?php echo $info['gbook_id']; ?>">
        <input id="gbook_rid" name="gbook_rid" type="hidden" value="<?php echo $info['gbook_rid']; ?>">
        <div class="layui-form-item">

            <label class="layui-form-label">昵称：</label>
            <div class="layui-input-inline w80">
                <input type="text" class="layui-input" value="<?php echo $info['gbook_name']; ?>" readonly="readonly" name="gbook_name" >
            </div>
            <label class="layui-form-label">留言时间：</label>
            <div class="layui-input-inline w130">
                <input type="text" class="layui-input" value="<?php echo date('Y-m-d H:i:s',$info['gbook_time']); ?>" readonly="readonly">
            </div>
            <label class="layui-form-label">回复时间：</label>
            <div class="layui-input-inline w130">
                <input type="text" class="layui-input" value="<?php echo date('Y-m-d H:i:s',$info['gbook_reply_time']); ?>" readonly="readonly">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">留言内容：</label>
            <div class="layui-input-block">
                <textarea type="text" class="layui-textarea" lay-verify="gbook_content" placeholder="请输入评论内容" name="gbook_content"><?php echo $info['gbook_content']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">回复内容：</label>
            <div class="layui-input-block">
                <textarea type="text" class="layui-textarea" lay-verify="gbook_reply" placeholder="请输入回复内容" name="gbook_reply"><?php echo $info['gbook_reply']; ?></textarea>
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            gbook_content: function (value) {
                if (value == "") {
                    return "请输入留言内容";
                }
            }
        });


    });
</script>

</body>
</html>