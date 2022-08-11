<?php

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

    public static function tableName(){
        return 'messages';
    }

    public function attributeLabels() {
        return [
            'message' => 'Сообщение',
            'user_id' => 'id-пользователя',
        ];
    }

    public function rules() {
        return [
            [ ['message', 'user_id'], 'required'],
            ['message', 'string', 'min' => 2, 'tooShort' => 'Короткое сообещние'],
            // ['name', 'string', 'max' => 5, 'tooLong' => 'Много']
            // [ 'name', 'string', 'length' => [2, 5] ],
        ];
    }
}