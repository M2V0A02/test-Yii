<?php

namespace app\controllers;

use yii\base\Controller;

class PostController extends Controller {


    
    public function actionIndex() {
        $this->layout = 'basic';
        return $this->render('index');
    }

    public function actionShow() {
        return $this->render('show');
    }
}