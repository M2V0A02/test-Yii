<?php

namespace app\models;

use yii\db\ActiveRecord;

class Messages extends ActiveRecord{
    public function getUser(){
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}