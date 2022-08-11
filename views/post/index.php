<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>
<?php debug($messages) ?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= Yii::$app->session->getFlash(('success')); ?>
    </div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?= Yii::$app->session->getFlash(('error')); ?>
    </div>
<?php endif;?>

<h1>Test Action</h1>
<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
<?= $form->field($model, 'name')->passwordInput()?>
<?= $form->field($model, 'email')->input('email')?>
<?= $form->field($model, 'text')->textarea() ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>