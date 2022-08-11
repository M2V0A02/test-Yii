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

        // $messages = Messages::find()->orderBy(['id' => SORT_DESC])->all();
        // $messages = Messages::find()->asArray()->where('id > 50')->orderBy(['id' => SORT_DESC])->all();
        // $messages = Messages::find()->asArray()->where(['user_id' => 2])->orderBy(['id' => SORT_DESC])->all();
        // $messages = Messages::find()->asArray()->where(['like', 'message', 'f'])->orderBy(['id' => SORT_DESC])->all();
        // $messages = Messages::find()->asArray()->where(['>=', 'id', 50])->orderBy(['id' => SORT_DESC])->all();
        // $messages = Messages::find()->all();
        // $messages = Messages::find()->asArray()->limit(2)->one();
        // $messages = Messages::find()->count();
        //$messages = Messages::findOne([50]);
        //$messages = Messages::findOne(['id' => 50]);
        // $messages = Messages::findAll(['id' => 50]);
        // $query = "SELECT * FROM messages WHERE message LIKE '%f%'";
        // $messages = Messages::findBySql($query)->all();
        $query = "SELECT * FROM messages WHERE message LIKE :search";
        $messages = Messages::findBySql($query, [':search' => '%f%'])->all();
        return $this->render('index', compact('model', 'messages'));
    }

    public function actionShow() {
        return $this->render('show');
    }
}