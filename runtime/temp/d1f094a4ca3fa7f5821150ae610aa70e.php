<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\step2.html";i:1503408252;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\header.html";i:1507466936;s:77:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\head.html";i:1480062774;s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/install\view\index\footer.html";i:1475139480;}*/ ?>
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
                    <h3 class="text-muted"><span class="badge"><em>3</em></span> <?php echo lang('Finish installation'); ?></h3>
                </div>
            </div>
            <form method="post" action="step3">
                <div class="panel-body">
                    <h4><?php echo lang('Site Information'); ?></h4><hr>
                    <div class="form-group">
                        <label><?php echo lang('The database server'); ?>：</label>
                        <input type="text" class="form-control" name="host" value="localhost" required="required">
                        <p class="help-block"><?php echo lang('Database server address, usually localhost'); ?></p>
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('The database port'); ?>：</label>
                        <input type="text" class="form-control" name="port" value="3306" required="required">
                        <p class="help-block"><?php echo lang('The database server port, typically 3306'); ?></p>
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('The database user name'); ?>：</label>
                        <input type="text" class="form-control" name="user" value="root" required="required">
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('The database password'); ?>：</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('The database name'); ?>：</label>
                        <input type="text" class="form-control" name="name" value="catfish" required="required">
                        <p class="help-block"><?php echo lang('If you use an existing database, replace it with the actual database name'); ?></p>
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('Database table prefix'); ?>：</label>
                        <input type="text" class="form-control" name="prefix" value="catfish_" required="required">
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('Site title'); ?>：</label>
                        <input type="text" class="form-control" name="biaoti" value="<?php echo lang('Catfish'); ?> CMS">
                        <p class="help-block"><?php echo lang('You can modify the site name at any time in the background'); ?></p>
                    </div><br>
                    <h4><?php echo lang('Founder Information'); ?></h4><hr>
                    <div class="form-group">
                        <label><?php echo lang('The administrator account'); ?>：</label>
                        <input type="text" class="form-control" name="admin" value="admin" required="required">
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('The administrator password'); ?>：</label>
                        <input type="password" class="form-control" name="pwd" value="" required="required">
                        <p class="help-block"><?php echo lang('The administrator password can not be shorter than 8 characters'); ?></p>
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('Confirm password'); ?>：</label>
                        <input type="password" class="form-control" name="repwd" value="" required="required">
                    </div>
                    <div class="form-group">
                        <label><?php echo lang('E-mail'); ?>：</label>
                        <input type="email" class="form-control" name="email" value="" required="required">
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row text-center">
                        <a href="step1"><button type="button" class="btn btn-primary"><?php echo lang('Previous'); ?></button></a>&nbsp;&nbsp;
                        <button type="submit" id="myButton" class="btn btn-primary"><?php echo lang('Create the data'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myButton").prop('disabled',false);
        $("form").submit(function(e){
            $("#myButton").prop('disabled','disabled');
        });
    });
</script>
</body>
</html>