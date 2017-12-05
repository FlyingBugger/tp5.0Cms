<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\Users\flyingBugger\Desktop\ar\cms/application/login\view\index\index.html";i:1506495228;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Catfish CMS All Rights Reserved">
    <meta name="robots" content="noindex,noarchive">
    <title><?php echo lang('User login'); ?></title>
    <link rel="icon" href="<?php echo $domain; ?>public/common/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/catfishBottom.css">
    <script src="<?php echo $domain; ?>public/common/js/jquery.min.js"></script>
    <script src="<?php echo $domain; ?>public/common/js/login.js"></script>
</head>
<body style="background-color: #006666;<?php if(!(empty($login_background) || ($login_background instanceof \think\Collection && $login_background->isEmpty()))): ?> background: url('<?php echo $login_background; ?>');background-size: cover;<?php endif; ?>">
<div class="container-fluid" id="catfishContentBlock">
    <div class="row">
        <br>
        <div class="hidden-xs"><br><br></div>
        <div class="col-xs-10 col-sm-6 col-md-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-4">
            <h1 class="text-center" style="color:#fff;">
                <img src="<?php if($logo == ''): ?><?php echo $domain; ?>public/common/images/catfish_white.png<?php else: ?><?php echo $logo; endif; ?>" width="32" height="32">
                <?php if($title == ''): ?>Catfish<?php else: ?><?php echo $title; endif; ?>
            </h1><br>
            <div class="panel panel-default" id="denglukuang">
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label><?php echo lang('User name'); ?></label>
                            <input type="text" class="form-control" name="user" placeholder="<?php echo lang('User name'); ?>" autofocus>
                        </div>
                        <div class="form-group">
                            <label><?php echo lang('Password'); ?></label>
                            <input type="password" class="form-control" name="pwd" placeholder="<?php echo lang('Password'); ?>">
                        </div>
                        <?php if($yanzheng == '1'): ?>
                        <div class="form-group">
                            <label><?php echo lang('Captcha'); ?></label>
                            <div><img style="cursor: pointer;" src="<?php echo captcha_src(); ?>" id="captcha" alt="captcha" /></div>
                            <input type="text" class="form-control" name="captcha" placeholder="<?php echo lang('Captcha'); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> <?php echo lang('Remember me'); ?>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"><?php echo lang('Log in'); ?></button>
                        </div>
                        <a href="<?php echo Url('/index'); ?>"><?php echo lang('Home'); ?></a>
                        <a href="<?php echo Url('login/Index/register'); ?>" class="pull-right"><?php echo lang('Sign up'); ?></a>
                    </form>
                </div>
            </div>
            <?php if(!(empty($login_annex) || ($login_annex instanceof \think\Collection && $login_annex->isEmpty()))): ?><?php echo $login_annex; endif; ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="catfishFooter">
    <div class="row">
        <div><?php echo $catfish; ?></div>
    </div>
</div>
<?php if(!(empty($login_background) || ($login_background instanceof \think\Collection && $login_background->isEmpty()))): ?>
<script>
    $(document).ready(function(){
        $("#denglukuang").css("opacity",0.85);
        $("input").css({"background-color":"#eee"});
    });
</script>
<?php endif; ?>
<script src="<?php echo $domain; ?>public/common/js/user/footer.js"></script>
</body>
</html>