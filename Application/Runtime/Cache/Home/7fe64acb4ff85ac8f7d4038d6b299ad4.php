<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>后台管理系统</title>
    <base href="/test/index.php/Home" />
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="/test/Public/Min/?f=/test/Public/stylesheets/admin/base.css|/test/Public/stylesheets/admin/layout.css|/test/Public/javascripts/admin/asyncbox/skins/default.css" />

    <!-- js -->
    <script type="text/javascript" src="/test/Public/Min/?f=/test/Public/javascripts/admin/jquery-1.7.2.min.js|/test/Public/javascripts/admin/jquery.lazyload.js|/test/Public/javascripts/admin/functions.js|/test/Public/javascripts/admin/base.js|/test/Public/javascripts/admin/jquery.form.js|/test/Public/javascripts/admin/asyncbox/asyncbox.js|/test/Public/javascripts/admin/jquery.watermark.js|/test/Public/javascripts/admin/datepicker/datetimepicker_css.js">
</script>

<script type="text/javascript">
    $(window).resize(autoSize);
    $(function(){
        autoSize();
        $(".loginOut").click(function(){
            var url=$(this).attr("href");
            popup.confirm('你确定要退出吗？','你确定要退出吗',function(action){
                if(action == 'ok'){ window.location=url; }
            });
            return false;
        });

        var time=self.setInterval(function(){$("#today").html(date("Y-m-d H:i:s"));},1000);
    });
</script>

    <!--<link href="/test/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/test/Public/javascripts/admin/jquery-1.7.2.min.js"></script>
    <script src="/test/Public/bootstrap/js/bootstrap.min.js"></script>-->
</head>

<body>
    <div class="wrap">
        <!-- header -->
        <div id="Top">
    <div class="logo">
        <a href="<?php echo U('Public/index');?>"><img src="/test/Public/images/admin/logo.png" />
        </a>
    </div>

     <div class="help">
        <a href="#">使用帮助</a><span><a href="#">关于</a></span>
    </div>

    <!-- menu -->
    <div class="menu">
    <ul>
        <?php if(is_array($main_menu)): $i = 0; $__LIST__ = $main_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_item): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="fisrt <?php echo activedLink($key, null, 'fisrt_current');?>">
                    <span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li>
                <?php elseif($i == count($main_menu)): ?>
                <li class="end <?php echo activedLink($key, null, 'end_current');?>">
                    <span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li>
                <?php else: ?>
                <li class="<?php echo activedLink($key, null, 'current');?>">
                    <span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

</div>

<!-- tab -->
<div id="Tags">
    <div class="userPhoto"><img src="https://secure.gravatar.com/avatar/bbd865d76f0eac057d0263c929c22355.png" /> </div>
    <div class="navArea">
        <div class="userInfo">
            <div>
                <a href="<?php echo U('Public/logout');?>" class="loginOut"><span>&nbsp;</span>退出系统</a>
            </div>
            欢迎您，<?php echo ($_SESSION['current_account']['email']); ?>
        </div>
        <div class="nav">
            <font id="today"><?php echo date("Y-m-d H:i:s");?></font>
            您的位置：<?php echo ($breadcrumbs); ?>
        </div>
    </div>
</div>


<div class="clear"></div>


        <!-- main -->
        <div class="mainBody">
            <!-- left -->
            <div id="Left">
    <div id="control" class=""></div>
    <div class="subMenuList">
        <div class="itemTitle">
            常用操作
        </div>
        <ul>
            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_item): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($key);?>"><?php echo ($menu_item); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>


            <!-- right -->
            <div id="Right">
                <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
</html>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</body>
</html>