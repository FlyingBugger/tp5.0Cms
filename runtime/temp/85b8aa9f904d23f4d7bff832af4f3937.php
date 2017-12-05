<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\step3.html";i:1480420896;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\header.html";i:1507466936;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\head.html";i:1480062774;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\footer.html";i:1475139480;}*/ ?>
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
                    <h3 class="text-primary"><span class="badge" style="background-color:#428bca;"><em>2</em></span> <?php echo lang('Create the data'); ?></h3>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="text-primary"><span class="badge" style="background-color:#428bca;"><em>3</em></span> <?php echo lang('Finish installation'); ?></h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="jumbotron">
                    <br><br>
                    <h2 class="text-center"><?php echo lang('Installation will be completed, rest for a while now!'); ?></h2>
                    <br><br>
                </div>
                <div class="row text-center">
                    <img src="<?php echo $domain; ?>public/common/images/jiazai.gif">
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</body>
</html>