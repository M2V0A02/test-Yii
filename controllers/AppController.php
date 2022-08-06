<?php

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller {
    public function actionGeneral(){
        return "General";
    }
    
    function debug($arr) {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
    
}

function debug($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}