<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"C:\Users\flyingBugger\Desktop\ar\cms/application/login\view\index\register.html";i:1512521411;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Catfish CMS All Rights Reserved">
    <meta name="robots" content="noindex,noarchive">
    <title><?php echo lang('New user'); ?></title>
    <link rel="icon" href="<?php echo $domain; ?>public/common/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/catfishBottom.css">
    <script src="<?php echo $domain; ?>public/common/js/jquery.min.js"></script>
</head>
<body style="background-color: #159f9f;<?php if(!(empty($registration_background) || ($registration_background instanceof \think\Collection && $registration_background->isEmpty()))): ?> background: url('<?php echo $registration_background; ?>');background-size: cover;<?php endif; ?>">
<div class="container-fluid" id="catfishContentBlock">
    <div class="row">
        <br>
        <div class="hidden-xs"><br><br></div>
        <div class="col-xs-10 col-sm-6 col-md-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-4">
            <h1 class="text-center" style="color:#fff;">
                <img src="<?php if($logo == ''): ?><?php echo $domain; ?>public/common/images/catfish_white.png<?php else: ?><?php echo $logo; endif; ?>" width="32" height="32">
                    注册
            </h1><br>
            <div class="panel panel-default" id="zhucekuang">
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label><?php echo lang('User name'); ?></label>
                            <input type="text" class="form-control" name="user" placeholder="<?php echo lang('User name'); ?>" maxlength="50" autofocus>
                        </div>
                        <div class="form-group">
                            <label><?php echo lang('Password'); ?></label>
                            <input type="password" class="form-control" name="pwd" placeholder="<?php echo lang('Password'); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo lang('Confirm password'); ?></label>
                            <input type="password" class="form-control" name="repeat" placeholder="<?php echo lang('Confirm password'); ?>">
                        </div>
                        <div class="form-group">
                            <label><?php echo lang('Email'); ?></label>
                            <input type="email" class="form-control" name="email" placeholder="<?php echo lang('Email'); ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"><?php echo lang('Sign up'); ?></button>
                        </div>
                        <a href="<?php echo Url('/index'); ?>"><?php echo lang('Home'); ?></a>
                        <a href="<?php echo Url('/login'); ?>" class="pull-right"><?php echo lang('Log in'); ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="catfishFooter">
    <div class="row">
        <div><?php echo $catfish; ?></div>
    </div>
</div>
<?php if(!(empty($registration_background) || ($registration_background instanceof \think\Collection && $registration_background->isEmpty()))): ?>
<script>
    $(document).ready(function(){
        $("#zhucekuang").css("opacity",0.85);
        $("input").css({"background-color":"#eee"});
    });
</script>
<?php endif; ?>
<script src="<?php echo $domain; ?>public/common/js/user/footer.js"></script>
</body>
</html>
