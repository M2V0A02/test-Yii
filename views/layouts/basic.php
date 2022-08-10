<?php
    use app\assets\AppAsset;
    use yii\helpers\Html;
    AppAsset::register($this);
    $this->beginPage() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head(); ?>
</head>
<body>
    <?php $this->beginBody(); ?>
        <div class="wrap">
            <div class="container">
                <ul class="nav nav-pills">
                    <li class="nav-item active" role="presentation"><?= Html::a('Главная', '/basic/web/'); ?></li>
                    <li class="nav-itemrole="presentation"><?= Html::a('Статьи', ['post/index']); ?></li>
                    <li class="nav-itemrole="presentation"><?= Html::a('Статьи', ['post/show']); ?></li>
                </ul>   
            <?= $content ?>
            </div>
        </div>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>