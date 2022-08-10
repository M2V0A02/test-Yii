<?php
    //$this->title = "About";
    //$this->registerJsFile('@web/js/main.js', ['depends' => 'yii\web\YiiAsset'])
    //$this->registerJs('alert(1);', \yii\web\View::POS_LOAD);
    $script = <<< JS
        $('#btn').on('click', function(e) {
            $.ajax({
            url: 'index.php?r=post/index',
            type: 'POST',
            data: {id: '4'},
            success: function(data) {
                console.log(data);
            },
            error: function() {
                alert('Ошибка');
            }
            });
        });
    JS;
    $this->registerJs($script)
?>

<?php $this->beginBlock('block'); ?>
    <h1>Это блок h1 </h1>
<?php $this->endBlock();?>
Контент
<button class="btn btn-success" id="btn">Click me</button>
