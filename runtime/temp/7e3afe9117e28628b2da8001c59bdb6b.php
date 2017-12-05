<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\step4.html";i:1480577858;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\header.html";i:1507466936;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\head.html";i:1480062774;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\footer.html";i:1475139480;}*/ ?>
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
                <p><h2 class="text-success text-center"><?php echo lang('Congratulations, the installation is complete!'); ?></h2></p>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body bg-warning">
                            <?php echo lang('Thank you for your support of the Catfish CMS system!'); ?><br>
                            <?php echo lang('Is not still immersed in the installation of happiness, but the installation is over, then you will continue to use the site in the process of happiness, let us start!'); ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="row text-center">
                    <a href="<?php echo url('/'); ?>"><button type="button" class="btn btn-primary"><?php echo lang('Enter the home page'); ?></button></a>&nbsp;&nbsp;
                    <a href="<?php echo url('/admin'); ?>"><button type="button" class="btn btn-primary"><?php echo lang('Into the background'); ?></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>