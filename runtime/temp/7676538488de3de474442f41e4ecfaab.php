<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\web.html";i:1508919636;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\header.html";i:1512526280;s:78:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\sidebar.html";i:1493449308;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/admin\view\index\footer.html";i:1504339462;}*/ ?>
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

<link href="<?php echo $domain; ?>public/common/uploadify/uploadify.css" type="text/css" rel="stylesheet">
<div class="row bg-info text-center">
    <h4><?php echo lang('Website information'); ?></h4>
</div><br>
<div class="container-fluid" style="min-height: 800px;">
    <div class="row">
        <form method="post" action="">
            <div class="form-group">
                <label><?php echo lang('Site title'); ?>：</label>
                <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" placeholder="<?php echo lang('Site title'); ?>">
            </div>
            <div class="form-group">
                <label><?php echo lang('Subtitle'); ?>：</label>
                <input type="text" class="form-control" name="subtitle" value="<?php echo $data['subtitle']; ?>" placeholder="<?php echo lang('Subtitle'); ?>">
            </div>
            <div class="form-group">
                <label><?php echo lang('Site domain name'); ?>：</label>
                <input type="text" class="form-control" name="domain" value="<?php echo $data['domain']; ?>">
                <p class="help-block"><?php echo lang('The domain name ends with "/".'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Site keywords'); ?>：</label>
                <input type="text" class="form-control" name="keyword" value="<?php echo $data['keyword']; ?>">
            </div>
            <div class="form-group">
                <label><?php echo lang('Site description'); ?>：</label>
                <textarea class="form-control" name="description" rows="3"><?php echo $data['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label><?php echo lang('Webmaster E-mail'); ?>：</label>
                <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" placeholder="<?php echo lang('Webmaster E-mail'); ?>">
            </div>
            <div class="form-group">
                <label><?php echo lang('Template program'); ?>：</label>
                <select class="form-control" name="template">
                    <?php if(is_array($dir) || $dir instanceof \think\Collection): $i = 0; $__LIST__ = $dir;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo; ?>"<?php if($vo == $data['template']): ?> selected<?php endif; ?>><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label><?php echo lang('Review whether the audit'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="pinglun"<?php if($data['comment'] == 1): ?> checked<?php endif; ?>> <?php echo lang('Comments need to be audited'); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label><?php echo lang('User name filtering'); ?>：</label>
                <input type="text" class="form-control" name="guolv" value="<?php echo $data['filter']; ?>">
                <p class="help-block"><?php echo lang('You can set the user names that are not allowed to be registered, separated by a comma ","'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('The number of records displayed per page'); ?>：</label>
                <input type="number" class="form-control" name="everyPageShows" value="<?php if(!(empty($data['everyPageShows']) || ($data['everyPageShows'] instanceof \think\Collection && $data['everyPageShows']->isEmpty()))): ?><?php echo $data['everyPageShows']; else: ?>10<?php endif; ?>">
                <p class="help-block"><?php echo lang('You can set the number of displays in the category page'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Slide size'); ?>：</label>
                <div class="row">
                    <div class="col-md-1"><h5 class="text-center"><?php echo lang('Width'); ?></h5></div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="kuan" value="<?php echo $data['slideshowWidth']; ?>">
                    </div>
                    <div class="col-md-1"><h5 class="text-center"><?php echo lang('Height'); ?></h5></div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="gao" value="<?php echo $data['slideshowHeight']; ?>">
                    </div>
                </div>
                <p class="help-block"><?php echo lang('The units are pixels'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close the slide'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="closeSlide"<?php if(!(empty($data['closeSlide']) || ($data['closeSlide'] instanceof \think\Collection && $data['closeSlide']->isEmpty()))): if($data['closeSlide'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Close the slide'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('Shutting down slides requires theme support'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close the message'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="openMessage"<?php if($data['openMessage'] == 0): ?> checked<?php endif; ?>> <?php echo lang('Close the message'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('Close message requires subject support'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close the comment'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="closeComment"<?php if(!(empty($data['closeComment']) || ($data['closeComment'] instanceof \think\Collection && $data['closeComment']->isEmpty()))): if($data['closeComment'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Close the comment'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('After closing the comment, setting a comment when writing an article will be invalidated'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to allow registration'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="notAllowLogin"<?php if(!(empty($data['notAllowLogin']) || ($data['notAllowLogin'] instanceof \think\Collection && $data['notAllowLogin']->isEmpty()))): if($data['notAllowLogin'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Registrations are not allowed'); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label><?php echo lang('Login requires a verification code?'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="yanzheng"<?php if($data['captcha'] == 1): ?> checked<?php endif; ?>> <?php echo lang('Login requires a verification code'); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close the big image generation'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="datu"<?php if(!(empty($data['datu']) || ($data['datu'] instanceof \think\Collection && $data['datu']->isEmpty()))): if($data['datu'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Close Generate large images'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('Turning off big-picture generation saves space, but it can make large-picture effects for some topics unavailable'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to enable short address mode'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rewrite"<?php if(!(empty($data['rewrite']) || ($data['rewrite'] instanceof \think\Collection && $data['rewrite']->isEmpty()))): if($data['rewrite'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Enable short addresses'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('Enable short address need to open rewrite, check before you make sure your web environment to run a rewrite'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close the site map'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="closeSitemap"<?php if(!(empty($data['closeSitemap']) || ($data['closeSitemap'] instanceof \think\Collection && $data['closeSitemap']->isEmpty()))): if($data['closeSitemap'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Close the site map'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('The site map is turned on by default, where you can turn off the site map'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close RSS'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="closeRSS"<?php if(!(empty($data['closeRSS']) || ($data['closeRSS'] instanceof \think\Collection && $data['closeRSS']->isEmpty()))): if($data['closeRSS'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Close RSS'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('The default is to open RSS, where you can turn off RSS'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Whether to close the site'); ?>：</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="guanbi"<?php if(!(empty($data['guanbi']) || ($data['guanbi'] instanceof \think\Collection && $data['guanbi']->isEmpty()))): if($data['guanbi'] == 1): ?> checked<?php endif; endif; ?>> <?php echo lang('Close the site'); ?>
                    </label>
                </div>
                <p class="help-block"><?php echo lang('When you need website maintenance, you can use to close the site'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Site logo'); ?>：</label>
                <div id="upload"></div>
                <div style="width: 200px;">
                    <img src="<?php echo $domain; ?>public/common/images/default-thumbnail.png" class="img-thumbnail img-responsive" id="tubiaoImg">
                </div>
                <input type="hidden" value="<?php echo $data['logo']; ?>" name="tubiao" id="tubiao">
            </div>
            <div class="form-group">
                <label><?php echo lang('Website icon'); ?>：</label>
                <div id="upload_ico"></div>
                <div style="width: 200px;">
                    <img src="<?php echo $domain; ?>public/common/images/favicon.ico" class="img-thumbnail img-responsive" id="icotubiaoIco">
                </div>
                <input type="hidden" value="<?php if(!(empty($data['ico']) || ($data['ico'] instanceof \think\Collection && $data['ico']->isEmpty()))): ?><?php echo $data['ico']; endif; ?>" name="ico" id="icotubiao">
                <p class="help-block"><?php echo lang('Please upload the "ico" icon file'); ?></p>
            </div>
            <div class="form-group">
                <label><?php echo lang('Set the time format'); ?>：</label>
                <select class="form-control" name="timeFormat">
                    <?php if(is_array($timeFormat) || $timeFormat instanceof \think\Collection): $i = 0; $__LIST__ = $timeFormat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['val']; ?>"<?php if(!(empty($data['timeFormat']) || ($data['timeFormat'] instanceof \think\Collection && $data['timeFormat']->isEmpty()))): if($vo['val'] == $data['timeFormat']): ?> selected<?php endif; endif; ?>><?php echo $vo['show']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="form-group<?php if($lang != 'zh-cn'): ?> hidden<?php endif; ?>">
                <label><?php echo lang('Archival information'); ?>：</label>
                <input type="text" class="form-control" name="record" value="<?php echo $data['record']; ?>">
            </div>
            <div class="form-group">
                <label><?php echo lang('Copyright Information'); ?>：</label>
                <textarea class="form-control" name="copyright" rows="3"><?php echo $data['copyright']; ?></textarea>
            </div>
            <div class="form-group">
                <label><?php echo lang('Statistical code'); ?>：</label>
                <textarea class="form-control" name="statistics" rows="3"><?php echo $data['statistics']; ?></textarea>
            </div>
            <div class="text-center">
                <input type="hidden" name="verification" value="<?php echo $verification; ?>">
                <button type="submit" class="btn btn-default"><?php echo lang('Save'); ?><span class="hidden">&nbsp;<img src="<?php echo $domain; ?>public/common/images/zhixing.gif" width="16" height="16"></span></button>
            </div>
        </form>
    </div>
</div><br><br>
<div class="hidden" id="webroot"><?php echo $domain; ?></div>
<div class="hidden" id="buttonText"><?php echo lang('Select Image'); ?></div>
<div class="hidden" id="icobuttonText"><?php echo lang('Select the icon'); ?></div>
<script type="text/javascript" src="<?php echo $domain; ?>public/common/uploadify/jquery.uploadify.js"></script>
<script src="<?php echo $domain; ?>public/common/js/web.js"></script>
        <div class="pull-right"><?php echo $catfish; ?></div>
        </div>
    </div>
</div>
<div class="hidden" id="siteroot"><?php echo $fulldomain; ?></div>
<script src="<?php echo $domain; ?>public/common/js/footer.js"></script>
</body>
</html>