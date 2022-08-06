<?php

namespace app\controllers;
use yii\web\Controller;

class MyController extends Controller {

    public function actionIndex($id = null) {
        $hi = "hello wordl";
        $names = ['Egor', 'Vlad', 'Mixail', 'Jeny'];
        // return $this->render('index', ["hello" => $hi, "names" => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
}