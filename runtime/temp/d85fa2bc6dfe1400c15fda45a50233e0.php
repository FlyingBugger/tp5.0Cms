<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"C:\Users\flyingBugger\Desktop\ar\cms/application/../public/common/html/404/index.html";i:1501921594;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php if(!(empty($ico) || ($ico instanceof \think\Collection && $ico->isEmpty()))): ?><?php echo $ico; else: ?><?php echo $domain; ?>public/common/images/favicon.ico<?php endif; ?>">
    <title><?php echo $title; ?> | <?php echo $subtitle; ?></title>
    <link rel="stylesheet" href="<?php echo $domain; ?>public/common/css/bootstrap.min.css">
    <link href="<?php echo $domain; ?>public/common/html/404/css/style.css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="row pad-top text-center">
        <div class="col-md-6 col-md-offset-3 text-center">
            <h2>  <?php echo lang('You visit the page out to play!'); ?> </h2>
            <h5> <?php echo lang('The page does not exist, please click the link at the bottom of the page to return'); ?></h5>
            <span id="error-link"></span>
            <h2>! <?php echo lang('Access error'); ?> !</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="bigfont">
                <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
            </div>
            <a href="<?php echo $domain; ?>" class="btn btn-primary"><?php echo lang('Return to the home page'); ?></a><br><br>
        </div>
    </div>
</div>
<script src="<?php echo $domain; ?>public/common/js/jquery.min.js"></script>
<script src="<?php echo $domain; ?>public/common/html/404/js/countUp.js"></script>
<script src="<?php echo $domain; ?>public/common/html/404/js/custom.js"></script>
</body>
</html>
