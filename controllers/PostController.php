<?php

namespace app\controllers;

use app\models\TestForm;
use yii\base\Controller;
use yii\web\Response;
use app\models\Messages;
use Yii;
class PostController extends Controller {

    // public function beforeAction($action)
    // {            
    //     if ($action->id == 'index') {
    //         Yii::$app->request->enableCsrfValidation = false;
    //     }
    //     return parent::beforeAction($action);
    // }

    public function actionIndex() {
        // if( Yii::$app->request->isAjax) {
        //     debug($_GET);
        //     var_dump(Yii::$app->request->post());
        // }
        $this->layout = 'basic';
        $model = new TestForm();
        if ($model ->load(Yii::$app->request->post()) ){
            if ($model->validate() ) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return Yii::$app->getResponse()->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Данные не приняты');
            }
        }

        $messages = Messages::find()->all();

        return $this->render('index', compact('model', 'messages'));
    }

    public function actionShow() {
        return $this->render('show');
    }
}