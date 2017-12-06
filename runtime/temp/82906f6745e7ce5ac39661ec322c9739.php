<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\slideshow.html";i:1505963768;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\header.html";i:1512526280;s:78:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\sidebar.html";i:1493449308;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\footer.html";i:1504339462;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Catfish CMS All Rights Reserved">
    <meta name="robots" content="noindex,noarchive">
    <title>后台管理系统</title>
    <link rel="icon" href="<?php echo $domain; ?>public/common/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/bootstrap.min.css">
    <script src="<?php echo $domain; ?>public/common/js/jquery.min.js"></script>
    <script src="<?php echo $domain; ?>public/common/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#eee;">
<div class="row">
    <nav id="navbar-example" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Url('/admin'); ?>">
                    <img alt="<?php echo lang('Catfish Management Center'); ?>" src="<?php echo $domain; ?>public/common/images/catfish_white.png" width="20" height="20">
                </a>
                <a class="navbar-brand" href="<?php echo Url('/admin'); ?>">管理中心</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo Url('/index'); ?>" title="<?php echo lang('Home'); ?>" target="_blank"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="<?php echo Url('/admin/Index/write'); ?>" title="<?php echo lang('Write an article'); ?>"><span class="glyphicon glyphicon-pencil"></span></a></li>
                    <li><a href="<?php echo Url('/admin/Index/personal'); ?>" title="<?php echo lang('Modify personal information'); ?>"><span class="glyphicon glyphicon-list-alt"></span></a></li>
                    <li><a href="<?php echo Url('/admin/Index/change'); ?>" title="<?php echo lang('Modify the login password'); ?>"><span class="glyphicon glyphicon-lock"></span></a></li>
                    <li><a href="<?php echo Url('/admin/Index/pinglun'); ?>" title="<?php echo lang('My comments'); ?>"><span class="glyphicon glyphicon-edit"></span></a></li>
                    <li><a href="<?php echo Url('/admin/Index/shoucang'); ?>" title="<?php echo lang('My collection'); ?>"><span class="glyphicon glyphicon-heart"></span></a></li>
                    <?php if($permissions < 6): ?>
                    <li><a href="<?php echo Url('/admin/Index/clearcache'); ?>" title="<?php echo lang('Clear cache'); ?>"><span class="glyphicon glyphicon-repeat"></span></a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo Url('/admin/Common/quit'); ?>" title="<?php echo lang('Sign out'); ?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="fat-menu" class="dropdown">
                        <a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo lang('Welcome'); ?>，<?php echo $user; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo Url('/admin/Index/change'); ?>"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;<?php echo lang('Modify the login password'); ?></a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo Url('/admin/Index/personal'); ?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;<?php echo lang('Modify personal information'); ?></a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo Url('/admin/Common/quit'); ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;<?php echo lang('Sign out'); ?></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="panel panel-default">
    <div class="panel-body"></div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2">
    <div class="collapse navbar-collapse" style="position: fixed; top: 51px; bottom: 0; padding-top: 10px; z-index: 1000; background-color:#eee;" id="bs-example-js-navbar-collapse">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_nr">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_nr">
                            <span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;<?php echo lang('Content'); ?>&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse_nr" class="panel-collapse collapse<?php if($backstageMenu == 'neirong'): ?> in<?php endif; ?>">
                    <div class="list-group" style="margin-bottom: 0px;">
                        <a href="<?php echo Url('/admin/Index/write'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'write'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Write an article'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/articles'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'articles'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('All articles'); ?>
                            </button>
                        </a>
                        <?php if($permissions < 6): ?>
                        <a href="<?php echo Url('/admin/Index/addclassify'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'addclassify'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Add category'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/classify'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'classify'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('All categories'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/comments'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'comments'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('All comments'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/messages'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'messages'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('All messages'); ?>
                            </button>
                        </a>
                        <?php endif; ?>
                        <a href="<?php echo Url('/admin/Index/recycle'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'recycle'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Recycle bin'); ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <?php if($permissions < 5): ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_ym">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_ym">
                            <span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;<?php echo lang('Page'); ?>&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse_ym" class="panel-collapse collapse<?php if($backstageMenu == 'yemian'): ?> in<?php endif; ?>">
                    <div class="list-group" style="margin-bottom: 0px;">
                        <a href="<?php echo Url('/admin/Index/newpage'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'newpage'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('New page'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/allpage'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'allpage'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('All pages'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/pageSettings'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'pageSettings'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('Page settings'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/addSlideshow'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'addSlideshow'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('Add a slide'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/slideshow'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'slideshow'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('All slides'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/addLinks'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'addLinks'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('Add links'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/links'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'links'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('All links'); ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_yh">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_yh">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo lang('User'); ?>&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse_yh" class="panel-collapse collapse<?php if($backstageMenu == 'yonghu'): ?> in<?php endif; ?>">
                    <div class="list-group" style="margin-bottom: 0px;">
                        <a href="<?php echo Url('/admin/Index/general'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'general'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('General users'); ?>
                            </button>
                        </a>
                        <?php if($permissions < 3): ?>
                        <a href="<?php echo Url('/admin/Index/addmanageuser'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'addmanageuser'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Add user'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/manageuser'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'manageuser'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('All users'); ?>
                            </button>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_cd">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_cd">
                            <span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;<?php echo lang('Menu'); ?>&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse_cd" class="panel-collapse collapse<?php if($backstageMenu == 'caidan'): ?> in<?php endif; ?>">
                    <div class="list-group" style="margin-bottom: 0px;">
                        <a href="<?php echo Url('/admin/Index/category'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'category'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('Add menu categories'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/managemc'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'managemc'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('All menu categories'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/addmenu'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'addmenu'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Add a menu'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/managemenu'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'managemenu'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('All menus'); ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_xt">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_xt">
                            <span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;<?php echo lang('System'); ?>&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse_xt" class="panel-collapse collapse<?php if($backstageMenu == 'xitong'): ?> in<?php endif; ?>">
                    <div class="list-group" style="margin-bottom: 0px;">
                        <a href="<?php echo Url('/admin/Index/web'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'web'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Website information'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/themes'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'themes'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('Themes'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/personal'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'personal'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Personal information'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/change'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'change'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Change password'); ?>
                            </button>
                        </a>
                        <a href="<?php echo Url('/admin/Index/clearcache'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'clearcache'): ?> btn-primary<?php endif; ?>">
                                <?php echo lang('Clear cache'); ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_kz">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_kz">
                            <span class="glyphicon glyphicon-inbox"></span>&nbsp;&nbsp;<?php echo lang('Extensions'); ?>&nbsp;&nbsp;<span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse_kz" class="panel-collapse collapse<?php if($backstageMenu == 'kuozhan'): ?> in<?php endif; ?>">
                    <div class="list-group" style="margin-bottom: 0px;">
                        <a href="<?php echo Url('/admin/Index/plugin'); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == 'plugin'): ?> btn-primary<?php endif; ?>">
                            <?php echo lang('Plug-ins'); ?>
                            </button>
                        </a>
                        <?php if(is_array($pluginslist) || $pluginslist instanceof \think\Collection): $i = 0;$__LIST__ = is_array($pluginslist) ? array_slice($pluginslist,0,6, true) : $pluginslist->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a id="kz_plugin_<?php echo $vo['plugin']; ?>" href="<?php echo Url('/admin/Index/plugins/plugin/'.$vo['plugin']); ?>">
                            <button type="button" class="btn btn-default btn-block<?php if($option == $vo['plugin']): ?> btn-primary<?php endif; ?>">
                            <?php echo lang($vo['pname']); ?>
                            </button>
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; if($numberOfPlugins > 6): ?>
                        <div class="btn-group btn-block dropup">
                            <button type="button" class="btn btn-default btn-block" data-toggle="dropdown">
                                <?php echo lang('More plug-ins'); ?> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <?php if(is_array($pluginslist) || $pluginslist instanceof \think\Collection): $i = 0;$__LIST__ = is_array($pluginslist) ? array_slice($pluginslist,6,null, true) : $pluginslist->slice(6,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a id="kz_plugin_<?php echo $vo['plugin']; ?>" href="<?php echo Url('/admin/Index/plugins/plugin/'.$vo['plugin']); ?>">
                                        <button type="button" class="btn btn-default btn-block<?php if($option == $vo['plugin']): ?> btn-primary<?php endif; ?>">
                                        <?php echo lang($vo['pname']); ?>
                                        </button>
                                    </a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <a href="<?php echo Url('/admin/Common/quit'); ?>">
            <button type="button" class="btn btn-default btn-block"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;<?php echo lang('Sign out'); ?></button>
        </a><br>
        <div class="text-center"><?php echo lang('Generated'); ?>：<?php echo $executionTime; ?></div>
    </div>
</div>
        <div class="col-xs-12 col-sm-9 col-md-10 pull-right" style="background-color:#FFFFFF;">

<link href="<?php echo $domain; ?>public/common/confirm/jquery-confirm.css" type="text/css" rel="stylesheet">
<div class="row bg-info text-center">
    <h4><?php echo lang('All slides'); ?></h4>
</div><br>
<div class="container-fluid" style="min-height: 800px;">
    <form class="form-inline" method="post" action="">
        <div>
            <p>
                <input type="hidden" name="paixu" value="paixu">
                <input type="hidden" name="verification" value="<?php echo $verification; ?>">
                <button type="submit" id="pshanchu" class="btn btn-primary btn-sm"><?php echo lang('Sort'); ?><span class="hidden">&nbsp;<img src="<?php echo $domain; ?>public/common/images/zhixing_bai.gif" width="14" height="14"></span></button>
            </p>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 80px;"><?php echo lang('Sort'); ?></th>
                        <th>ID</th>
                        <th><?php echo lang('Image'); ?></th>
                        <th><?php echo lang('Name'); ?></th>
                        <th><?php echo lang('Description'); ?></th>
                        <th><?php echo lang('Link'); ?></th>
                        <th><?php echo lang('Status'); ?></th>
                        <th><?php echo lang('Operation'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td>
                            <input type="text" value="<?php echo $vo['listorder']; ?>" name="<?php echo $vo['slide_id']; ?>" class="form-control" maxlength="8" style="width: 80px;">
                        </td>
                        <td><?php echo $vo['slide_id']; ?></td>
                        <td><img src="<?php echo $vo['slide_pic']; ?>" width="80"></td>
                        <td><?php echo $vo['slide_name']; ?></td>
                        <td><?php echo $vo['slide_des']; ?></td>
                        <td><?php echo $vo['slide_url']; ?></td>
                        <td>
                            <?php if($vo['slide_status'] == 1): ?><h5 class="text-success"><span class="glyphicon glyphicon-ok"></span> <?php echo lang('Display'); ?></h5>
                            <?php else: ?><h5 class="text-muted"><?php echo lang('Not show'); ?></h5>
                            <?php endif; ?>
                        </td>
                        <td>
                            <input class="hidden" value="<?php echo $vo['slide_status']; ?>">
                            <a href="<?php echo Url('modifyslide'); ?>?c=<?php echo $vo['slide_id']; ?>"><?php echo lang('Edit'); ?></a>
                            &nbsp;|&nbsp;
                            <a class="twitter" data-title="<?php echo lang('Confirm to delete?'); ?>" href="#!"><?php echo lang('Delete'); ?></a>
                            &nbsp;|&nbsp;
                            <a class="yincang<?php if($vo['slide_status'] != 1): ?> hidden<?php endif; ?>" href="#!"><?php echo lang('Hide'); ?><span class="hidden">&nbsp;<img src="<?php echo $domain; ?>public/common/images/zhixing.gif" width="16" height="16"></span></a>
                            <a class="qiyong<?php if($vo['slide_status'] == 1): ?> hidden<?php endif; ?>" href="#!"><?php echo lang('Enabled'); ?><span class="hidden">&nbsp;<img src="<?php echo $domain; ?>public/common/images/zhixing.gif" width="16" height="16"></span></a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div><br>
<div class="hidden" id="buxianshi"><?php echo lang('Not show'); ?></div>
<div class="hidden" id="xianshi"><?php echo lang('Display'); ?></div>
<div class="hidden" id="quedingshanchu"><?php echo lang('Confirm to delete?'); ?></div>
<div class="hidden" id="bukehuifu"><?php echo lang('Are you sure you want to delete the slideshow? Can not be restored after deletion!'); ?></div>
<div class="hidden" id="jixu"><?php echo lang('Continue'); ?></div>
<div class="hidden" id="quxiao"><?php echo lang('Cancel'); ?></div>
<div class="hidden" id="verification"><?php echo $verification; ?></div>
<script src="<?php echo $domain; ?>public/common/confirm/jquery-confirm.js"></script>
<script src="<?php echo $domain; ?>public/common/js/slideshow.js"></script>
        <div class="pull-right"><?php echo $catfish; ?></div>
        </div>
    </div>
</div>
<div class="hidden" id="siteroot"><?php echo $fulldomain; ?></div>
<script src="<?php echo $domain; ?>public/common/js/footer.js"></script>
</body>
</html>