<?php

namespace app\controllers;

use yii\base\Controller;
use Yii;
class PostController extends Controller {


    
    public function actionIndex() {
        if( Yii::$app->request->isAjax) {
            debug($_GET);
            return 'test';
        }
        else{
            $this->layout = 'basic';
            return $this->render('index');
    
        }
    }

    public function actionShow() {
        return $this->render('show');
    }
}