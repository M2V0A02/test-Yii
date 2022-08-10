<?php

namespace app\controllers;

use app\models\TestForm;
use yii\base\Controller;
use Yii;
class PostController extends Controller {

    public function beforeAction($action)
    {            
        if ($action->id == 'index') {
            Yii::$app->request->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex() {
        if( Yii::$app->request->isAjax) {
            debug($_GET);
            var_dump(Yii::$app->request->post());
        }
        $this->layout = 'basic';
        
        $model = new TestForm();

        return $this->render('index', compact('model'));
    }

    public function actionShow() {
        return $this->render('show');
    }
}