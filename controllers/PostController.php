<?php

namespace app\controllers;

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
        $this->view->title = "Index";
        return $this->render('index');
    }

    public function actionShow() {
        return $this->render('show');
    }
}