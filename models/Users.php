<?php

namespace app\models;
//use app\models\Messages;
use yii\db\ActiveRecord;

class Users extends ActiveRecord{
    public function getMessages(){
        return $this->hasMany(Messages::className(), ['user_id' => 'id']);
    }
}