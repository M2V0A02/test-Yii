<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use app\components\MyWidget;
use mihaildev\ckeditor\CKEditor;
// count($user->messages)
// debug($messages)
?>

<?php
    MyWidget::begin(); ?>
        <h1>привет, мир!</h1>
    <?php MyWidget::end();

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
<!-- //$form->field($model, 'message')?> -->
<?= $form->field($model, 'user_id')?>
<!-- composer require --prefer-dist yiisoft/yii2-jui -->
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?= 
    $form->field($model, 'message')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>