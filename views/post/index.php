Контент

<?php //$this->registerJsFile('@web/js/main.js', ['depends' => 'yii\web\YiiAsset'])
        $this->registerJs('alert(1)', \yii\web\View::POS_LOAD);
?>