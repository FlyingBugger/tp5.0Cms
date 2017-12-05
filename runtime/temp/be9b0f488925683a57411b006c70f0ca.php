<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\step1.html";i:1507466922;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\header.html";i:1507466936;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\head.html";i:1480062774;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\footer.html";i:1475139480;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Catfish CMS All Rights Reserved">
    <meta name="robots" content="noindex,noarchive">
    <title><?php echo lang('Catfish installation'); ?></title>
    <link rel="icon" href="<?php echo $domain; ?>public/common/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/bootstrap.min.css">
    <script src="<?php echo $domain; ?>public/common/js/jquery.min.js"></script>
</head>
<body>
<div class="row">
    <br><br><br>
    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body bg-primary">
    <h4>
        <img src="<?php echo $domain; ?>public/common/images/catfish_white.png" width="20" height="20">
        <?php echo lang('Catfish'); ?> <?php echo $version['description']; ?> <?php echo lang('Setup Wizard'); ?><span class="pull-right"><?php echo $version['number']; ?></span>
    </h4>
</div>
            <div class="panel-body">
                <div class="col-md-4 text-center">
                    <h3 class="text-primary"><span class="badge" style="background-color:#428bca;"><em>1</em></span> <?php echo lang('Environment'); ?></h3>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="text-muted"><span class="badge"><em>2</em></span> <?php echo lang('Create the data'); ?></h3>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="text-muted"><span class="badge"><em>3</em></span> <?php echo lang('Finish installation'); ?></h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo lang('Environmental testing items'); ?></th>
                                <th><?php echo lang('Recommended configuration'); ?></th>
                                <th><?php echo lang('Current condition'); ?></th>
                                <th><?php echo lang('Minimum requirements'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo lang('Operating system'); ?></td>
                                <td><?php echo lang('Unix-like'); ?></td>
                                <td><span class="glyphicon glyphicon-ok text-success"></span> <?php echo $data['os']; ?></td>
                                <td><?php echo lang('Not limited'); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo lang('PHP version'); ?></td>
                                <td>5.4.x</td>
                                <td><?php echo $data['phpversion']; ?></td>
                                <td>5.4.0</td>
                            </tr>
                            <tr>
                                <td>PDO</td>
                                <td><?php echo lang('Open'); ?></td>
                                <td><?php echo $data['pdo']; ?></td>
                                <td><?php echo lang('Open'); ?></td>
                            </tr>
                            <tr>
                                <td>PDO_MySQL</td>
                                <td><?php echo lang('Open'); ?></td>
                                <td><?php echo $data['pdo_mysql']; ?></td>
                                <td><?php echo lang('Open'); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo lang('Attachment upload'); ?></td>
                                <td>>2M</td>
                                <td><?php echo $data['upload_size']; ?></td>
                                <td><?php echo lang('Not limited'); ?></td>
                            </tr>
                            <tr>
                                <td>curl</td>
                                <td><?php echo lang('Open'); ?></td>
                                <td><?php echo $data['curl']; ?></td>
                                <td><?php echo lang('Open'); ?></td>
                            </tr>
                            <tr>
                                <td>ZipArchive</td>
                                <td><?php echo lang('Open'); ?></td>
                                <td><?php echo $data['ZipArchive']; ?></td>
                                <td><?php echo lang('Open'); ?></td>
                            </tr>
                            <tr>
                                <td>session</td>
                                <td><?php echo lang('Open'); ?></td>
                                <td><?php echo $data['session']; ?></td>
                                <td><?php echo lang('Open'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><?php echo lang('Directory, file permissions check'); ?></th>
                            <th><?php echo lang('Write'); ?></th>
                            <th><?php echo lang('Read'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($data['folders']) || $data['folders'] instanceof \think\Collection): if( count($data['folders'])==0 ) : echo "" ;else: foreach($data['folders'] as $dir=>$vo): ?>
                        <tr>
                            <td>./<?php echo $dir; ?></td>
                            <td>
                                <?php if($vo['w'] == true): ?>
                                <span class="glyphicon glyphicon-ok text-success"></span> <?php echo lang('Writable'); else: ?>
                                <span class="glyphicon glyphicon-remove text-danger"></span> <?php echo lang('Not writable'); endif; ?>
                            </td>
                            <td>
                                <?php if($vo['r'] == true): ?>
                                <span class="glyphicon glyphicon-ok text-success"></span> <?php echo lang('Readable'); else: ?>
                                <span class="glyphicon glyphicon-remove text-danger"></span> <?php echo lang('Unreadable'); endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-body">
                <br>
                <div class="row text-center">
                    <a href="step1"><button type="button" class="btn btn-primary"><?php echo lang('Re-test'); ?></button></a>&nbsp;&nbsp;
                    <?php if($error != 0): ?>
                    <button type="button" class="btn btn-primary" disabled="disabled"><?php echo lang('Next step'); ?></button>
                    <?php else: ?>
                    <a href="step2"><button type="button" class="btn btn-primary"><?php echo lang('Next step'); ?></button></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>