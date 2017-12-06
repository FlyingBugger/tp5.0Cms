<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"C:\Users\flyingBugger\Desktop\ar\cms/application/../public/default/category.html";i:1490619938;s:26:"public/default/header.html";i:1490619860;s:26:"public/default/footer.html";i:1508209680;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(!(empty($neirong['biaoti']) || ($neirong['biaoti'] instanceof \think\Collection && $neirong['biaoti']->isEmpty()))): ?><?php echo $neirong['biaoti']; ?> | <?php endif; ?><?php echo $title; ?> | <?php echo $subtitle; ?></title>
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="icon" href="<?php if(!(empty($ico) || ($ico instanceof \think\Collection && $ico->isEmpty()))): ?><?php echo $ico; else: ?><?php echo $domain; ?>public/common/images/favicon.ico<?php endif; ?>">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/<?php echo $template; ?>/css/<?php echo $template; ?>.css">
    <script src="<?php echo $domain; ?>public/common/js/jquery.min.js"></script>
    <script src="<?php echo $domain; ?>public/common/js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 70px; background-color:#f1f1f1;">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $url['href']; ?>">
                <img alt="Catfish(鲶鱼)" src="<?php if($logo == ''): ?><?php echo $domain; ?>public/<?php echo $template; ?>/images/catfish.png<?php else: ?><?php echo $logo; endif; ?>" width="20" height="20">
            </a>
            <a class="navbar-brand" href="<?php echo $url['href']; ?>"><?php echo $title; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="daohangcaidan">
                <?php if(!(empty($menu) || ($menu instanceof \think\Collection && $menu->isEmpty()))): if(is_array($menu['menu1']) || $menu['menu1'] instanceof \think\Collection): $i = 0; $__LIST__ = $menu['menu1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(empty($vo['children']) || ($vo['children'] instanceof \think\Collection && $vo['children']->isEmpty())): ?>
                <li<?php if($pageUrl == $vo['href']): ?> class="active"<?php endif; ?>><a href="<?php echo $vo['href']; ?>" target="<?php echo $vo['target']; ?>"><?php if($vo['icon'] != ''): ?><?php echo $vo['icon']; endif; ?><?php echo $vo['label']; ?></a></li>
                <?php else: ?>
                <li class="dropdown">
                    <a href="<?php echo $vo['href']; ?>" class="dropdown-toggle" data-toggle="dropdown" target="<?php echo $vo['target']; ?>"><?php if($vo['icon'] != ''): ?><?php echo $vo['icon']; endif; ?><?php echo $vo['label']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voc): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $voc['href']; ?>" target="<?php echo $voc['target']; ?>"><?php if($voc['icon'] != ''): ?><?php echo $voc['icon']; endif; ?><?php echo $voc['label']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search" method="get" action="<?php echo $url['search']; ?>">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="关键字">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> 搜索</button>
                </form>
                <?php if(empty($notAllowLogin) || ($notAllowLogin instanceof \think\Collection && $notAllowLogin->isEmpty())): ?>
                <li class="weidenglu<?php if(!(empty($login) || ($login instanceof \think\Collection && $login->isEmpty()))): ?> hidden<?php endif; ?>"><a href="<?php echo $url['register']; ?>">注册</a></li>
                <li class="weidenglu<?php if(!(empty($login) || ($login instanceof \think\Collection && $login->isEmpty()))): ?> hidden<?php endif; ?>"><a href="<?php echo $url['login']; ?>">登录</a></li>
                <li class="dropdown yidenglu<?php if(empty($login) || ($login instanceof \think\Collection && $login->isEmpty())): ?> hidden<?php endif; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="dengluyonghuming"><?php echo $login; ?></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $url['userCenter']; ?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;用户中心</a></li>
                        <li><a href="<?php echo $url['quit']; ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;退出</a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php if(!(empty($top) || ($top instanceof \think\Collection && $top->isEmpty()))): ?><?php echo $top; endif; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <ol class="breadcrumb">
                <li><a href="<?php echo $url['href']; ?>">首页</a></li>
                <li id="daohang1" class="active"><?php if(!(empty($daohang1) || ($daohang1 instanceof \think\Collection && $daohang1->isEmpty()))): ?><?php echo $daohang1; endif; ?></li>
            </ol>
            <?php if(!(empty($category_top) || ($category_top instanceof \think\Collection && $category_top->isEmpty()))): ?><?php echo $category_top; endif; if(!(empty($article_list_top) || ($article_list_top instanceof \think\Collection && $article_list_top->isEmpty()))): ?><?php echo $article_list_top; endif; if(!(empty($search_top) || ($search_top instanceof \think\Collection && $search_top->isEmpty()))): ?><?php echo $search_top; endif; if(!(empty($sousuo) || ($sousuo instanceof \think\Collection && $sousuo->isEmpty()))): ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo $sousuo; ?>
                </div>
            </div>
            <?php endif; if(is_array($fenlei) || $fenlei instanceof \think\Collection): $i = 0; $__LIST__ = $fenlei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php if(!(empty($vo['suolvetu']) || ($vo['suolvetu'] instanceof \think\Collection && $vo['suolvetu']->isEmpty()))): ?>
                    <div class="col-xs-12 col-md-3">
                        <a href="<?php echo $vo['href']; ?>" title="<?php echo $vo['biaoti']; ?>">
                            <img src="<?php echo $vo['suolvetu']; ?>" class="img-responsive thumbnail center-block" alt="Responsive image">
                        </a>
                    </div>
                    <?php endif; ?>
                    <div<?php if(!(empty($vo['suolvetu']) || ($vo['suolvetu'] instanceof \think\Collection && $vo['suolvetu']->isEmpty()))): ?> class="col-xs-12 col-md-9"<?php endif; ?>>
                        <h4><a href="<?php echo $vo['href']; ?>" title="<?php echo $vo['biaoti']; ?>"><?php echo $vo['biaoti']; ?></a></h4>
                        <p><?php echo subtext($vo['zhaiyao'],148); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php echo $pages; if(!(empty($category_bottom) || ($category_bottom instanceof \think\Collection && $category_bottom->isEmpty()))): ?><?php echo $category_bottom; endif; if(!(empty($article_list_bottom) || ($article_list_bottom instanceof \think\Collection && $article_list_bottom->isEmpty()))): ?><?php echo $article_list_bottom; endif; if(!(empty($search_bottom) || ($search_bottom instanceof \think\Collection && $search_bottom->isEmpty()))): ?><?php echo $search_bottom; endif; ?>
        </div>
        <div class="col-md-4">
            <?php if(!(empty($side_top) || ($side_top instanceof \think\Collection && $side_top->isEmpty()))): ?><?php echo $side_top; endif; if(!(empty($category_side_top) || ($category_side_top instanceof \think\Collection && $category_side_top->isEmpty()))): ?><?php echo $category_side_top; endif; if(!(empty($article_list_side_top) || ($article_list_side_top instanceof \think\Collection && $article_list_side_top->isEmpty()))): ?><?php echo $article_list_side_top; endif; if(!(empty($search_side_top) || ($search_side_top instanceof \think\Collection && $search_side_top->isEmpty()))): ?><?php echo $search_side_top; endif; if(!(empty($tuijian) || ($tuijian instanceof \think\Collection && $tuijian->isEmpty()))): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">推荐</h3>
                </div>
                <div class="panel-body">
                    <?php if(is_array($tuijian) || $tuijian instanceof \think\Collection): $i = 0;$__LIST__ = is_array($tuijian) ? array_slice($tuijian,0,6, true) : $tuijian->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <p>
                        <a href="<?php echo $vo['href']; ?>" class="list-group-item" title="<?php echo $vo['biaoti']; ?>">
                            <?php echo $vo['biaoti']; ?>
                        </a>
                    </p>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="list-group">
                <?php if(is_array($hunhe['hunhe2']['neirong']) || $hunhe['hunhe2']['neirong'] instanceof \think\Collection): $i = 0;$__LIST__ = is_array($hunhe['hunhe2']['neirong']) ? array_slice($hunhe['hunhe2']['neirong'],0,6, true) : $hunhe['hunhe2']['neirong']->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $vo['href']; ?>" class="list-group-item" title="<?php echo $vo['biaoti']; ?>">
                    <h4 class="list-group-item-heading"><?php echo subtext($vo['biaoti'],17); ?></h4>
                    <p class="list-group-item-text"><?php echo subtext($vo['zhaiyao'],22); ?></p>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php if(!(empty($tuwen['tuwen2']['neirong']) || ($tuwen['tuwen2']['neirong'] instanceof \think\Collection && $tuwen['tuwen2']['neirong']->isEmpty()))): ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php if(is_array($tuwen['tuwen2']['neirong']) || $tuwen['tuwen2']['neirong'] instanceof \think\Collection): $i = 0;$__LIST__ = is_array($tuwen['tuwen2']['neirong']) ? array_slice($tuwen['tuwen2']['neirong'],0,6, true) : $tuwen['tuwen2']['neirong']->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="col-xs-12 col-md-6">
                        <a href="<?php echo $vo['href']; ?>" class="thumbnail" title="<?php echo $vo['biaoti']; ?>">
                            <img src="<?php echo $vo['suolvetu']; ?>" class="img-responsive" alt="Responsive image">
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <?php endif; if(!(empty($category_side_bottom) || ($category_side_bottom instanceof \think\Collection && $category_side_bottom->isEmpty()))): ?><?php echo $category_side_bottom; endif; if(!(empty($article_list_side_bottom) || ($article_list_side_bottom instanceof \think\Collection && $article_list_side_bottom->isEmpty()))): ?><?php echo $article_list_side_bottom; endif; if(!(empty($search_side_bottom) || ($search_side_bottom instanceof \think\Collection && $search_side_bottom->isEmpty()))): ?><?php echo $search_side_bottom; endif; if(!(empty($side_bottom) || ($side_bottom instanceof \think\Collection && $side_bottom->isEmpty()))): ?><?php echo $side_bottom; endif; ?>
        </div>
    </div>
</div>
<?php if(!(empty($bottom) || ($bottom instanceof \think\Collection && $bottom->isEmpty()))): ?><?php echo $bottom; endif; ?>
<div class="container">
    <div class="row">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center"><?php echo $copyright; ?><?php echo $statistics; if(!(empty($openMessage) || ($openMessage instanceof \think\Collection && $openMessage->isEmpty()))): if($openMessage == 1): ?>&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#catfishModal"><span class="glyphicon glyphicon-edit"></span>&nbsp;我要留言</a><?php endif; endif; if(!(empty($record) || ($record instanceof \think\Collection && $record->isEmpty()))): ?><br><?php echo $record; endif; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hidden" id="webroot"><?php echo $domain; ?><?php echo $root; ?></div>
<div class="pull-right"><?php echo $catfish; ?></div>
<div class="modal fade" id="catfishModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">留言</h4>
            </div>
            <div class="modal-body">
                <form id="catfishliuyan">
                    <div class="form-group">
                        <label>留言标题：</label>
                        <input type="text" class="form-control" name="biaoti" placeholder="留言标题">
                    </div>
                    <div class="form-group">
                        <label>留言内容：</label>
                        <textarea class="form-control" name="neirong" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>留言人姓名：</label>
                        <input type="text" class="form-control" name="xingming" placeholder="留言人姓名">
                    </div>
                    <div class="form-group">
                        <label>留言人邮箱：</label>
                        <input type="text" class="form-control" name="youxiang" placeholder="留言人邮箱">
                    </div>
                    <p class="text-danger" id="catfishliuyantishi"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" id="catfishtijiaoliuyan" class="btn btn-primary">提交留言<span class="hidden">&nbsp;<img src="<?php echo $domain; ?>public/common/images/zhixing_bai.gif" width="14" height="14"></span><span class="glyphicon glyphicon-ok hidden"></span></button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $domain; ?>public/<?php echo $template; ?>/js/footer.js"></script>
</body>
</html>