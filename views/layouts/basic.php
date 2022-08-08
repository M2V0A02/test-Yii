<?php
    use app\assets\AppAsset;
    AppAsset::register($this);
    $this->beginPage() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->head(); ?>
</head>
<body>
    <?php $this->beginBody(); ?>
        <h1>Hello, BASIC!</h1>
        <?= $content ?>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>