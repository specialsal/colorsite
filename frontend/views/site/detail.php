<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="keyword" content="美女图片,邪恶动态图,性感美女,美女写真,日本人体艺术,美女图片大全,邪恶gif,邪恶GIF,搞笑图片" />
    <title>美图蜘蛛</title>
    <!-- CSS  -->
    <link href="/assets/reset.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/assets/meitu/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="container">
    <div class="detail-title"><?=$data['title']?></div>

    <div class="detail-content">
        <div class="detail-img-box">
            <?php if(count($list)){?>

                <?php foreach ($list as $key=>$value){?>
                    <img id="ix<?=$key?>" class="detail-imglist" alt="<?=$data['title']?>" title="<?=$data['title']?>" src="<?=\yii\helpers\Url::to(['/site/img','url'=>$value])?>">
                <?php }?>

            <?php }?>
        </div>
    </div>

    <div class="row">
        <a class="detail-link" href="<?=$prev['router']?>"><?=$prev['title']?></a>
        <a class="detail-link" href="<?=$next['router']?>"><?=$next['title']?></a>
    </div>
    <div class="row" style="text-align: center;color: #999999;padding: 15px 0px;">
        本网站内容来源于互联网，如有侵犯版权请来信告知,我们将立即处理。<a target="_blank" href="<?=\yii\helpers\Url::to(['/site/submit'])?>">(点我发送信息告知)</a>
    </div>
</div>
</body>
<script src="https://s22.cnzz.com/z_stat.php?id=1266710485&web_id=1266710485" language="JavaScript"></script>
</html>
