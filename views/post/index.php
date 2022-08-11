<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
// count($user->messages)
// debug($messages)
?>

<?php
    // foreach ($users as $user) {
    //     echo '<ul>';
    //         echo '<li>' . $user->name . '</li>';
    //         $messages = $user->messages;
    //         foreach($messages as $message) {
    //             echo '<ul>';
    //                 echo '<li>' . $message->message . '</li>';
    //             echo '</ul>';
    //         }
    //     echo '</ul>';
    // }
?>
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
<?= $form->field($model, 'message')?>
<?= $form->field($model, 'user_id')?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>