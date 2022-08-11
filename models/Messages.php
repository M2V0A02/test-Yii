<?php

namespace app\models;

use yii\db\ActiveRecord;

class Messages extends ActiveRecord{
    public static function tableName() {
        return 'messages';
    }
}