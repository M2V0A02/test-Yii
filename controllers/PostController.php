<?php

namespace app\controllers;

use app\models\TestForm;
use yii\base\Controller;
use yii\web\Response;
use app\models\Messages;
use app\models\Users;
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
        // $model->message = "Сообщение";
        // $model->user_id = "5"; // связывает input с значениями таблицы.
        // $model-save();

        // $updatesModel = Messages::findAll(['message' => 'Сообщение 30']);  //массовое обновление
        // foreach($updatesModel as $updateModel){
        //     $updateModel->message = "Сообщение 50";
        //     $updateModel->save();
        // }
        //Messages::findOne(30)->delete(); // удаление
        //Messages::deleteAll(['>', 'id', 3]) // массовое удаление.
        if ($model ->load(Yii::$app->request->post()) ){
            if ($model->save()) {
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
        // $query = "SELECT * FROM messages WHERE message LIKE :search";
        // $messages = Messages::findBySql($query, [':search' => '%f%'])->all();
        // $messages = Messages::findOne(50);
        //$users = Users::findOne(2);
        // $users = Users::find()->all();
        $messages = Users::find()->with('messages')->where('id = 2')->all();
        $users = Users::find()->with('messages')->all();
        return $this->render('index', compact('model', 'users', 'messages'));
    }

    public function actionShow() {
        return $this->render('show');
    }
}