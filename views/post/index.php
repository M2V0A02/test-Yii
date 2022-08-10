<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>

<h1>Test Action</h1>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>
<?= $form->field($model, 'text')?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>