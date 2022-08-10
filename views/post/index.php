<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>

<h1>Test Action</h1>
<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
<?= $form->field($model, 'name')->label("имя")->passwordInput()?>
<?= $form->field($model, 'email')->input('email')?>
<?= $form->field($model, 'text')->label("текст сообщения")->textarea() ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>