<?php

namespace app\controllers;

class MyController extends AppController {

    public function actionIndex($id = null) {
        $hi = "hello wordl";
        $names = ['Egor', 'Vlad', 'Mixail', 'Jeny'];
        return \app\controllers\debug($hi);
        //return $this->debug($hi);
        // return $this->render('index', ["hello" => $hi, "names" => $names]);
        //return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionMyBlog() {
        return "My Blog";
    }
}