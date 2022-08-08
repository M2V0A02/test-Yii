<?php

namespace app\controllers;

use yii\base\Controller;

class PostController extends Controller {

    public $layout = 'basic';

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionShow() {
        return $this->render('show');
    }
}